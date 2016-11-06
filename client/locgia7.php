<?php
require "../lib/config.php";
$idloai = $_GET["ID_LOAI"];
$result = mysql_query("SELECT * FROM san_pham WHERE AnHien=1 AND ID_LOAI='$idloai' AND GIASP > 250000");
$res = array();

if(mysql_num_rows($result) > 0 ){
	$res["success"] = 1;
    $res["chitiet"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_SP"] = $rows["ID_SP"];
        $sp["TENSP"] = $rows["TENSP"];
        $sp["HinhSP"] = $rows["HinhSP"];
        $sp["GIASP"] = $rows["GIASP"];
        $sp["ID_LOAI"] = $rows["ID_LOAI"];
        array_push($res["chitiet"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO PRODUCT";
    echo json_encode($res);
}
?>
