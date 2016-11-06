<?php

require "../lib/config.php";
$tongtien = $_POST["TONGTIEN"];
$idtv= $_POST["ID_TV"];
$qr = "INSERT INTO hoa_don VALUES(null,NOW(),'$tongtien','$idtv',0,0)";
if(mysql_query($qr)){
echo "1";
}else{
echo "2";
}

?>
