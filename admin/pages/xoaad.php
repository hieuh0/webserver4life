<?php
$id = $_GET["ID_AD"];
settype($id, 'int');
$qr = "UPDATE `admin` SET `Khoa` = '0' WHERE `admin`.`ID_AD` = '$id' ";
mysql_query($qr);
header("location:danhsachadmin.php");
?>
