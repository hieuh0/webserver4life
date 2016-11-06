<?php
require "../lib/config.php";
$iddm = $_GET["ID_DM"];
$result = mysql_query("SELECT * FROM loai_dm WHERE ID_DM ='$iddm' AND AnHien=1");
$res = array();
if(mysql_num_rows($result) > 0 ){
     $res["success"] = 1;
    $res["LOAI"] = array();
    while($rows = mysql_fetch_array($result)){
        $sp = array();
        $sp["ID_LOAI"] = $rows["ID_LOAI"];
        $sp["TENLOAI"] = $rows["TENLOAI"];
        $sp["HINH"] = $rows["HINH"];
        array_push($res["LOAI"], $sp);
    }
    echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "Khong co ITEM nao";
    echo json_encode($res);
}

 ?>
