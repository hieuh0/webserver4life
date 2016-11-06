<?php
require "../lib/config.php";

$id = $_POST["ID_TV"];
$ten = $_POST["TEN"];
$hinh = $_POST["HINH"];
$mail = $_POST["EMAIL"];
$mk = md5($_POST["MK"]);
$diachi = $_POST["DIACHI"];
$sdt = $_POST["SDT"];
$gioitinh = $_POST["GioiTinh"];
settype($gioitinh,'int');
$qr = "UPDATE thanh_vien SET TEN = '$ten', HINH = '$hinh',EMAIL='$mail', MK = '$mk', DIACHI = '$diachi', SDT = '$sdt', GioiTinh = '$gioitinh' WHERE ID_TV = '$id' ";

if(mysql_query($qr)){
	echo "1";
}else {
	echo "2";
}

?>
