
<?php
$id = $_GET["ID_LOAI"];
settype($id, 'int');
$qr = "UPDATE loai_dm SET AnHien = 0 WHERE ID_LOAI='$id'";
mysql_query($qr);
header("location:danhsachloaidm.php");
?>
