<?php
include 'loader.php';
if(isset($_REQUEST['admin_login']) && $_REQUEST['admin_login'] == 1){
	$login_result = $db_obj->adminLogin($_REQUEST['email'], $_REQUEST['password']);
	if($login_result == TRUE){
		header('Location:'.ADMIN_URL);
	}
}
?>