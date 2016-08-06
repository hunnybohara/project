<?php
include 'class/Session.php';

include 'class/DB.php';

// create DB class object
$db_obj = new DB;
$con = $db_obj->connect();
// create Session class object
$session_obj = new Session;

?>