<?php
require "../lib/config.php";

	$tongtien = $_POST["TONGTIEN"];
	$idsp = $_POST["ID_SP"];
	$idtv = $_POST["ID_TV"];
	$soluong = $_POST["SOLUONG"];
	$ghichu = $_POST["GhiChu"];
	$qr = "INSERT INTO hoa_don VALUES (null,NOW(),'$tongtien','$idsp','$idtv','$soluong','$ghichu',0,0)";
	if(mysql_query($qr)){
		echo "1";
	}else{
		echo "2";
	}
?>
