<meta charset="utf-8" />
<?php
	@session_start();
	unset($_SESSION['sid']) ;
	unset($_SESSION['sname']) ;
	unset($_SESSION['sprice']) ;
	unset($_SESSION['sdetail']) ;
	unset($_SESSION['spicture']) ;
	unset($_SESSION['sitem']) ;
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=user_basket.php\">";

?>