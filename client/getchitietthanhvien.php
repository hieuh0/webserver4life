<?php
require "../lib/config.php";

$email = $_GET["EMAIL"];
$result = mysql_query("SELECT * FROM thanh_vien  WHERE EMAIL = '$email'");
$res = array();
if(mysql_num_rows($result) > 0 ){
     $res["success"] = 1;
    $res["thanhvien"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_TV"] = $rows["ID_TV"];
        $sp["TEN"] = $rows["TEN"];
        $sp["HINH"] = $rows["HINH"];
        $sp["EMAIL"] = $rows["EMAIL"];
        $sp["MK"] = $rows["MK"];
        $sp["DIACHI"] = $rows["DIACHI"];
        $sp["SDT"] = $rows["SDT"];
        $sp["GioiTinh"] = $rows["GioiTinh"];
        array_push($res["thanhvien"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO USER INFO";
    echo json_encode($res);
}
 ?>