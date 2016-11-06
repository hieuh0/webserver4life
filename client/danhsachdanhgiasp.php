<?php
require "../lib/config.php";
$id_sp = $_GET["ID_SP"];
$sosao = $_GET["SO_SAO"];
$qr = mysql_query("SELECT COUNT(*) as luotdanhgianh,SO_SAO FROM danhgia_sp WHERE SO_SAO ='$sosao' AND ID_SP='$id_sp'");
$res = array();
if(mysql_num_rows($qr) > 0 ){
  $res["success"] = 1;
  $res["solan"] = array();
  while($rows = mysql_fetch_array($qr)){
        $sp = array();
        if($rows["SO_SAO"] == NULL){
          $sp["SO_SAO"] = $rows["0"];
          $sp["luotdanhgianh"]= $rows["luotdanhgianh"];
          array_push($res["solan"], $sp);
        }else{
          $sp["SO_SAO"] = $rows["SO_SAO"];
          $sp["luotdanhgianh"]= $rows["luotdanhgianh"];
          array_push($res["solan"], $sp);
        }
  }
  echo json_encode($res);
}else {
  $res["success"] = 0;
  $res["message"] = "Khong Co Luot Danh Gia Nao";
  echo json_encode($res);
}
?>
