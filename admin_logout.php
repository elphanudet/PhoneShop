<meta charset="utf-8">
<?php
	@session_start();
	unset($_SESSION['admin_id']) ;
	unset($_SESSION['admin_name']) ;
	
	echo "<script>";
		echo "window.location='admin_login.php';";
		echo "</script>";
?>