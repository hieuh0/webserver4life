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
$id = $_GET["ID_CT"];
settype($id, "int");
$qr = "DELETE FROM chitietsp WHERE ID_CT='$id'";
mysql_query($qr);
header("location:../danhsachsp.php");
?>
