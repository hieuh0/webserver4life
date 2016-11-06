<?php
require "../lib/config.php";
$email = $_POST["EMAIL"];
$diachi = $_POST["DIACHI"];
$hinh = $_POST["HINH"];
$gioitinh = $_POST["GioiTinh"];
$qr = "UPDATE thanh_vien SET HINH = '$hinh', DIACHI = '$diachi',GioiTinh='$gioitinh' WHERE EMAIL = '$email'";
	if(mysql_query($qr)){
		echo "0";
	}else{
		echo "1";
	}
?>
