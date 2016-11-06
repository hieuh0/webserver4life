<?php
require "../lib/config.php";
$id_tv = $_POST["ID_TV"];
$id_sp = $_POST["ID_SP"];
$binhluan = $_POST["NoiDung"];
$qr = "INSERT INTO binh_luan VALUES(null,'$id_tv','$id_sp','$binhluan',CURDATE(),1)";
if(mysql_query($qr)){
	echo "ThanhCong";
}else{
	echo "Loi";
}
?>
