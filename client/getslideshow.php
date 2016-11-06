<?php
require "../lib/config.php";

$result = mysql_query("SELECT *  FROM tintuc ORDER BY ID DESC LIMIT 0,3");
$res = array();
if(mysql_num_rows($result) > 0 ){
     $res["success"] = 1;
    $res["slide"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID"] = $rows["ID"];
        $sp["TieuDe"] = $rows["TieuDe"];
        $sp["Hinh"] = $rows["Hinh"];
        array_push($res["slide"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO IMAGE";
    echo json_encode($res);
}
 ?>
