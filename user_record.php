<?php
	session_start();
	if(empty($_SESSION['ses_id'])){
		echo "กรุณาเข้าสู่ระบบก่อน จึงจะสามารถไปยังหน้านี้ได้";
		exit;
	}
?>

<meta charset="utf-8">
<?php
	@session_start();
	include("connectdb.php");
	
		foreach($_SESSION['sid'] as $pid) {
			$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
			$member = $_SESSION['ses_name'];
			@$total += $sum[$pid] ;
		}
	
	$sql = "insert into `orders` values('', '$total', CURRENT_TIMESTAMP, '$member');" ;
	mysqli_query($conn, $sql) or die ("insert error") ;
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['sid'] as $pid) {
		$sql2 = "insert into orders_detail values('', '$id', '".$_SESSION['sid'][$pid]."', '".$_SESSION['sitem'][$pid]."');" ;
		mysqli_query($conn, $sql2);
	}
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=user_clear.php\">";
?>