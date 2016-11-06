<?php
	require "../lib/config.php";
$result = mysql_query("SELECT * FROM tintuc");
$res = array();
if(mysql_num_rows($result) > 0 ){
    $res["tintuc"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID"] = $rows["ID"];
        $sp["TieuDe"] = $rows["TieuDe"];
        $sp["Hinh"] = $rows["Hinh"];
        $sp["ChiTiet"] = $rows["ChiTiet"];
        $sp["ngay"] = $rows["ngay"];
        array_push($res["tintuc"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "loi";
    echo json_encode($res);
}





?>