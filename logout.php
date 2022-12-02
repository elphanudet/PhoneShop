<meta charset="utf-8">
<?php
	@session_start();
	unset($_SESSION['ses_id']) ;
	unset($_SESSION['ses_name']) ;
	unset($_SESSION['sid']) ;
	unset($_SESSION['sname']) ;
	unset($_SESSION['sprice']) ;
	unset($_SESSION['sdetail']) ;
	unset($_SESSION['spicture']) ;
	unset($_SESSION['sitem']) ;
	
	echo "<script>";
		echo "window.location='index.php';";
		echo "</script>";
?>