<?php
ob_start();
session_start();
require "../../lib/config.php";
require "../../lib/quantri.php";
if(!isset($_SESSION["ID_AD"])){
header("location:index.php");
}
?>
<?php
$id = $_GET["ID_BL"];
settype($id, "int");
//$qr = "DELETE FROM loai_dm WHERE ID_LOAI='$id'";
$qr = "UPDATE binh_luan SET AnHien=0 WHERE ID_BL='$id'";
mysql_query($qr);
header("location:../danhsachcomment.php");
?>
