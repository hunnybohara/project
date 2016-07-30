<?php
include dirname(__FILE__).'/../../config.php';
class DB{
	var $host = HOST;
	var $username = USERNAME;
	var $password = PASSWORD;
	var $db = DBNAME;

	public function connect(){
		$con = mysqli_connect($this->host, $this->username, $this->password, $this->db) or die("Not connect". mysqli_connect_error());
		return $con;
	}
}