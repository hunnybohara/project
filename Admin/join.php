<?php
include 'loader.php';
if(isset($_REQUEST['admin_login']) && $_REQUEST['admin_login'] == 1){
	$login_result = $db_obj->adminLogin($_REQUEST['email'], $_REQUEST['password']);
	if($login_result == TRUE){
		header('Location:'.ADMIN_URL);
	}
	else if($login_result == FALSE){
		header('Location:'.ADMIN_URL.'login.php');
	}
}
?>