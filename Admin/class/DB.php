<?php
include dirname(__FILE__).'/../../config.php';
class DB{
	var $host = HOST;
	var $username = USERNAME;
	var $password = PASSWORD;
	var $db = DBNAME;
	public $con;

	public function connect(){
		$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->db) or die("Not connect". mysqli_connect_error());		
		return $this->con;
	}

	public function adminLogin($email = NULL, $password = NULL){
		echo '<pre>';
		print_r($this->con);die;
		if(!empty($email)){
			if(!empty($password)){
				$pass = password_hash($password, PASSWORD_DEFAULT);
				//$real_pass = password_verify('admin@123', $pass);
				$chkAdminQry = mysqli_query($this->con, "SELECT `id`, `email`, `password` FROM `users` WHERE 'email' = '".$email."' AND 'password' = '".$password."' AND 'is_admin' = 1") or die(mysql_error());
				if(!empty($chkAdminQry)){
					$chkAdminRes = mysqli_fetch_array($chkAdminQry);
					print_r($chkAdminRes);
				}
			}
		}		
	}
}