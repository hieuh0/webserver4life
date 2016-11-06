<?php
require "../lib/config.php";
if(isset($_POST["SO_SAO"]) && isset($_POST["ID_SP"]) && isset($_POST["ID_TV"])){
$sosao = $_POST["SO_SAO"];
$idsp = $_POST["ID_SP"];
$idtv= $_POST["ID_TV"];
$qr = mysql_query("SELECT * FROM danhgia_sp WHERE  ID_SP='$idsp'AND ID_TV ='$idtv'");
$num = mysql_num_rows($qr);
if($num > 0){
  $update = mysql_query("UPDATE danhgia_sp SET SO_SAO = '$sosao' WHERE ID_TV = '$idtv' AND ID_SP='$idsp'");
  echo "1";
}else{
  $insert = mysql_query("INSERT INTO danhgia_sp VALUES (null,'$sosao','$idsp','$idtv')");
  echo "0";
}
}else{
  echo "Loi";
}

?>
