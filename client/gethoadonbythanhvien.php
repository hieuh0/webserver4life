<?php
require "../lib/config.php";

$idtv = $_GET["ID_TV"];
$result = mysql_query("SELECT * FROM hoa_don WHERE ID_TV = '$idtv'");
$res = array();
if(mysql_num_rows($result) > 0 ){
  $res["success"] = 1;
    $res["hoadon"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_HD"] = $rows["ID_HD"];
        $sp["NGAYTAO_HD"] = $rows["NGAYTAO_HD"];
        $sp["TONGTIEN"] = $rows["TONGTIEN"];
        $sp["ID_TV"] = $rows["ID_TV"];
        $sp["TRANGTHAI"] = $rows["TRANGTHAI"];
        array_push($res["hoadon"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO PRODUCT";
    echo json_encode($res);
}



?>
