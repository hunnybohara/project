<?php
include dirname(__FILE__).'/../../config.php';
class DB{
	var $host = HOST;
	var $username = USERNAME;
	var $password = PASSWORD;
	var $db = DBNAME;
	public $con;

	/*public function __construct(){
			
	}*/

	public function connect(){	
		$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->db) or die("Not connect". mysqli_connect_error());		
		return $this->con;
	}

	public function adminLogin($email = NULL, $password = NULL){		
		if(!empty($email)){
			if(!empty($password)){				
				$chkAdminQry = mysqli_query($this->con, "SELECT `id`, `password` FROM `users` WHERE `email` = '".$email."' AND `is_admin` = 1 AND `status` = 1") or die(mysql_error());				
				if(mysqli_num_rows($chkAdminQry) > 0){					
					$chkAdminRes = mysqli_fetch_assoc($chkAdminQry);
					if(password_verify($password, $chkAdminRes['password']) == 1){
						$id = $chkAdminRes['id'];									
						$_SESSION['admin_session'] = 1;
						$_SESSION['admin_user'] = $id;
						return TRUE;
					}
					else{
						Session::setGlobalMsg('Email and Password not matched', 'error');
						return FALSE;
					}										
				}
				else{
					Session::setGlobalMsg('Email and Password not matched', 'error');
					return FALSE;
				}
			}
			else{
				Session::setGlobalMsg('Password required', 'error');
				return FALSE;
			}
		}		
		else{
			Session::setGlobalMsg('Email required', 'error');
			return FALSE;
		}
	}
}