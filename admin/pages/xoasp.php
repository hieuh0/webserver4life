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
$id = $_GET["ID_SP"];
settype($id, "int");
$qr = "UPDATE san_pham SET AnHien=0 WHERE ID_SP='$id'";
mysql_query($qr);
header("location:../danhsachsp.php");
?>
