<?php

require "../lib/config.php";
$gia = $_GET["GIASP"];
$gia1 = $_GET["GIASP1"];
$km = mysql_query("SELECT * FROM san_pham WHERE GIASP BETWEEN '$gia' AND '$gia1' AND AnHien=1 AND IDKHUYENMAI >=2 LIMIT 0,15");
$res = array();
if(mysql_num_rows($km)> 0){
	$dung["success"]=1;
	$dung["chitiet"] = array();
	while($tai = mysql_fetch_array($km)){
		$saylala = array();
		$saylala["ID_SP"] = $tai["ID_SP"];
		$saylala["TENSP"] = $tai["TENSP"];
		$saylala["HinhSP"] = $tai["HinhSP"];
		$saylala["GIASP"] = $tai["GIASP"];
		$saylala["ID_LOAI"] = $tai["ID_LOAI"];

		array_push($dung["chitiet"],$saylala);

	}echo json_encode($dung);
}

?>
