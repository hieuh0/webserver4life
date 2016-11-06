<?php
require "../lib/config.php";
$ten = $_POST["TEN"];
$mail = $_POST["EMAIL"];
$dienthoai = $_POST["SDT"];
$qr = mysql_query("SELECT * FROM thanh_vien WHERE TEN='$ten' AND EMAIL='$mail' AND SDT='$dienthoai'");
	$mk =rand();
	$newpass= md5($mk);
	$check = mysql_num_rows($qr);
if($check > 0){
	$update = mysql_query("UPDATE thanh_vien SET MK='$newpass' WHERE EMAIL='$mail'");
	echo json_encode($mk);
}else {
	echo "2";
}
?>
