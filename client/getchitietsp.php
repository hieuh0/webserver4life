<?php
require "../lib/config.php";

$id = $_GET["ID_SP"];
$result = mysql_query("SELECT * FROM san_pham WHERE ID_SP='$id'");
$res = array();
if(mysql_num_rows($result) > 0 ){
    $res["success"] = 1;
    $res["sanpham"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_SP"]= $rows["ID_SP"];
        $sp["MASP"] = $rows["MASP"];
        $sp["TENSP"] = $rows["TENSP"];
        $sp["HinhSP"] = $rows["HinhSP"];
        $sp["GIASP"] = $rows["GIASP"];
        $sp["MOTA"] = $rows["MOTA"];
        array_push($res["sanpham"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO PRODUCT";
    echo json_encode($res);
}
 ?>