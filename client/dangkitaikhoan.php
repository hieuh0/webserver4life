<?php
require "../lib/config.php";

$ten = $_POST['TEN'];
$mk = md5($_POST['MK']);
$email = $_POST['EMAIL'];
$dt = $_POST['SDT'];
mysql_query("SET NAMES utf8");
$row = mysql_query("SELECT * FROM thanh_vien WHERE EMAIL='$email'");
$num = mysql_num_rows($row);
if($num > 0){
		echo "0";
}else{
	$qr = "INSERT INTO thanh_vien VALUES (null,'$ten','','$email','$mk','','$dt',NOW(),0,1)";
	if(mysql_query($qr)){
		echo "1";
	}else{
		echo "2";
	}

}

?>
