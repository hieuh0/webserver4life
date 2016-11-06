<?php
require "../lib/config.php";

$id = $_GET["ID_SP"];
$result = mysql_query("SELECT * FROM chitietsp WHERE ID_SP='$id'");
$res = array();
if(mysql_num_rows($result) > 0 ){
    $res["success"] = 1;
    $res["chitiet"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_CT"]= $rows["ID_CT"];
        $sp["HINHCT"] = $rows["HINHCT"];
        $sp["ID_SP"] = $rows["ID_SP"];
        array_push($res["chitiet"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO PRODUCT";
    echo json_encode($res);
}
 ?>
