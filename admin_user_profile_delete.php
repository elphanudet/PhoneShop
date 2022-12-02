<?php
	session_start();
?>

<meta charset="utf-8">
<?php
if (isset($_GET['u'])){
	include("connectdb.php");
	$sql = "delete from users where u_id='{$_GET['u']}'" ;
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	echo "<script>";
	echo "window.location='admin_user_profile_list.php';" ;
	echo "</script>";
}
?>