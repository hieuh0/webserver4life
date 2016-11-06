<?php
require "../lib/config.php";

$idtv = $_GET["ID_TV"];

$qr = mysql_query("SELECT SUM(TONGTIEN) AS tien FROM hoa_don WHERE ID_TV='$idtv' AND TRANGTHAI=2");

$res = array();
if(mysql_num_rows($qr)){
	 $res["success"] = 1;
	$res['TONGTIEN'] = array();
	while($row = mysql_fetch_array($qr)){
		$tien = array();
		$tien['tien'] = $row['tien'];
		
		array_push($res['TONGTIEN'], $tien);			
	}
	echo json_encode($res);
}else {
    $res["success"] = 0;
    $res["message"] = "NO USER INFO";
    echo json_encode($res);
}

?>