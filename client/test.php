<?php
require "../lib/config.php";

$qr = mysql_query("SELECT * FROM san_pham WHERE AnHien=1 AND ID_SP <> ID_LOAI ORDER BY RAND() LIMIT 0,5");
$rs = array();
if(mysql_num_rows($qr) > 0 ){
     $rs["success"] = 1;
    $rs["chitiet"] = array();
    while($r = mysql_fetch_array($qr)){
        $s = array();
        $s["ID_SP"] = $r["ID_SP"];
        $s["TENSP"] = $r["TENSP"];
        $s["HinhSP"] = $r["HinhSP"];
        $s["GIASP"] = $r["GIASP"];
        $s["ID_LOAI"] = $r["ID_LOAI"];
        array_push($rs["chitiet"], $s);
    }
    echo json_encode($rs);
}else {
    $rs["success"] = 0;
    $rs["message"] = "NO PRODUCT";
    echo json_encode($rs);
}

?>
