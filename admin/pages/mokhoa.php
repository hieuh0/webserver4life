<?php
$id = $_GET["ID_TV"];
settype($id, "int");
$qr = "UPDATE thanh_vien SET TrangThai = 1 WHERE ID_TV='$id'";
mysql_query($qr);
header("location:danhsachtv.php");

?>
