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
				$pass = password_hash($password, PASSWORD_DEFAULT);				
				$chkAdminQry = mysqli_query($this->con, "SELECT `id` FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."' AND `is_admin` = 1 AND `status` = 1") or die(mysql_error());				
				if(!empty($chkAdminQry)){
					$chkAdminRow = mysqli_num_rows($chkAdminQry);
					if(!empty($chkAdminRow)){
						$chkAdminRes = mysqli_fetch_assoc($chkAdminQry);
						$id = $chkAdminRes['id'];
						return TRUE;						
					}					
				}
				else{
					$session_obj->setGlobalMsg('Email and Password not matched', 'error');
					//return 'Email and Password not matched';
				}
			}
			else{
				$session_obj->setGlobalMsg('Password required', 'error');
				//return 'Password required';
			}
		}		
		else{
			$session_obj->setGlobalMsg('Email required', 'error');
			//return 'Email required';
		}
	}
}