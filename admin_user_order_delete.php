<?php
	session_start();
?>

<meta charset="utf-8">
<?php
if (isset($_GET['a'])){
	include("connectdb.php");
	$sql = "delete from orders where oid='{$_GET['a']}'" ;
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	echo "<script>";
	echo "window.location='admin_user_order.php';" ;
	echo "</script>";
}
?>