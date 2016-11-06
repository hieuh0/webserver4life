<?php
require "../lib/config.php";
if(isset($_POST["ID_SP"]) && isset($_POST["ID_TV"]) ){
	$idsp = $_POST['ID_SP'];
	$idtv = $_POST['ID_TV'];
	$check = mysql_query("SELECT * FROM yeu_thich WHERE ID_SP = '$idsp' AND ID_TV = '$idtv'");
	$num = mysql_num_rows($check);
	if($num > 0){
		echo "0";
	}else{
	$qr = "INSERT INTO yeu_thich VALUES (null,'$idsp','$idtv')";
	if(mysql_query($qr)){
		echo "1";
	}else{
		echo "2";
	}	
	}
}

?>