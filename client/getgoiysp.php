<?php
require "../lib/config.php";

$id_loai = $_GET["ID_LOAI"];
$result = mysql_query("SELECT * FROM san_pham WHERE ID_SP <> ID_LOAI AND ID_LOAI = '$id_loai' ORDER BY RAND() LIMIT 0,5");
$res = array();
if(mysql_num_rows($result) > 0 ){
     $res["success"] = 1;
    $res["goiy"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_SP"] = $rows["ID_SP"];
        $sp["TENSP"] = $rows["TENSP"];
        $sp["HinhSP"] = $rows["HinhSP"];
        $sp["GIASP"] = $rows["GIASP"];
        $sp["ID_LOAI"] = $rows["ID_LOAI"];
        array_push($res["goiy"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO PRODUCT";
    echo json_encode($res);
}
 ?>