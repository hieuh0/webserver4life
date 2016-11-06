<?php
require "../lib/config.php";
$idhd = $_GET["ID_HD"];

$qr = "SELECT * FROM hoa_don,chitiethd,san_pham WHERE hoa_don.ID_HD='$idhd' AND hoa_don.ID_HD = chitiethd.ID_HD AND chitiethd.ID_SP = san_pham.ID_SP";
$row = mysql_query($qr);
$res = array();
if(mysql_num_rows($row) > 0){
  $res["success"] = 1;
  $res["chitiet"] = array();
  while($rows = mysql_fetch_array($row)){
      $sp = array();
      $sp["ID_SP"] = $rows["ID_SP"];
      $sp["TENSP"] = $rows["TENSP"];
       $sp["HinhSP"] = $rows["HinhSP"];
      $sp["GIASP"] = $rows["GIASP"];
      $sp["SOLUONG"] = $rows["SOLUONG"];
      $sp["NGAYTAO_HD"] = $rows["NGAYTAO_HD"];
      array_push($res["chitiet"], $sp);
  }
  echo json_encode($res);
}else {
  $res["success"] = 0;
  $res["message"] = "NO PRODUCT";
  echo json_encode($res);
}
?>
