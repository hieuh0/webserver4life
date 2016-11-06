<?php

require "../lib/config.php";
$idtv = $_POST["ID_TV"];
$idsp= $_POST["ID_SP"];
$soluong = $_POST["SOLUONG"];
$check = mysql_query("SELECT ID_HD FROM hoa_don WHERE ID_TV='$idtv' AND TRANGTHAI=0");
$num = mysql_num_rows($check);
if($num){
	while($row = mysql_fetch_array($check)){
			$idHD = $row["ID_HD"];
			settype($idHD,'int');
		}
		mysql_query("INSERT INTO chitiethd VALUES(null,'$idHD','$idsp','$soluong')");
		echo "Thành Công";
}else{
echo "FAIL";
}

?>
