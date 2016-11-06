<?php
require "../lib/config.php";

$idtv = $_GET["ID_TV"];

$result = mysql_query("SELECT * FROM yeu_thich,san_pham WHERE yeu_thich.ID_TV = '$idtv' AND yeu_thich.ID_SP = san_pham.ID_SP");
$res = array();
if(mysql_num_rows($result) > 0 ){
     $res["success"] = 1;
    $res["yeuthich"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_YT"] = $rows["ID_YT"];
        $sp["ID_SP"] = $rows["ID_SP"];
         $sp["TENSP"] = $rows["TENSP"];
        $sp["HinhSP"] = $rows["HinhSP"];
        $sp["GIASP"] = $rows["GIASP"];
        array_push($res["yeuthich"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO PRODUCT";
    echo json_encode($res);
}



?>