<?php
require "../lib/config.php";
$username=$_POST['EMAIL'];
$password=md5($_POST['MK']);
$result=mysql_query("SELECT * FROM thanh_vien WHERE EMAIL='$username' AND MK='$password' AND TrangThai=1");
$count=mysql_num_rows($result);
        if ($count > 0){
        echo 1;
        }else{
        echo 0;
        }
?>
