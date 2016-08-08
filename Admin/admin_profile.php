<!DOCTYPE html>
<html>
<?php
include 'head.php';
if(!isset($_SESSION['admin_session']) && empty($_SESSION['admin_session'])){
    header('Location:'.ADMIN_URL.'login.php');    
}
?>
  	<body class="hold-transition skin-blue sidebar-mini">
	    <div class="wrapper">
	    	<?php include 'header.php';?>
	      	<!-- Left side column. contains the logo and sidebar -->
	      	<?php include 'left-sidebar.php';?>
	      	<!-- Content Wrapper. Contains page content -->
	      	<div class="content-wrapper">
	      		<section class="content">
	      			
	      		</section>
	      	</div><!-- /.content-wrapper -->
	      	<?php include 'footer.php';?>
	      	<?php include 'sidebar-control.php';?>
	    </div><!-- ./wrapper -->
	    <?php include 'foot.php';?>
  	</body>
</html>