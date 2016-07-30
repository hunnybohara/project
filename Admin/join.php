<?php
include 'loader.php';
if(isset($_REQUEST['admin_login']) && $_REQUEST['admin_login'] == 1){
  $db = new DB;
  $db->adminLogin($_REQUEST['email'], $_REQUEST['password']);
}
?>