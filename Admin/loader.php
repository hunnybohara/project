<?php
include 'class/Session.php';
// create Session class object
include 'class/DB.php';

// create DB class object
$db_obj = new DB;
$con = $db_obj->connect();
$session_obj = new Session;

?>