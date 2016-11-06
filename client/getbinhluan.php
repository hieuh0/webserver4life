<?php
require "../lib/config.php";
$idsp = $_GET["ID_SP"];
$re = "SELECT * FROM thanh_vien,binh_luan WHERE binh_luan.ID_SP= '$idsp' AND binh_luan.ID_TV = thanh_vien.ID_TV AND AnHien = 1 ";

$res = array();
$qr = mysql_query($re);

if(mysql_num_rows($qr) > 0){
  $res["success"] = 1;
	$res["BinhLuan"]= array();
	while($row = mysql_fetch_array($qr)){
		$bl = array();
		$bl["TEN"] = $row["TEN"];
    $bl["Ngay"] = $row["Ngay"];
		$bl["NoiDung"] = $row["NoiDung"];

		array_push($res["BinhLuan"],$bl);
	}
	echo json_encode($res);
}else{
  $res["success"] = 0;
  $res["message"] = "Khong Co Luot Danh Gia Nao";
  echo json_encode($res);
}
?>
