<?php
require "../lib/config.php";
	$idyt = $_POST["ID_YT"];
	settype($idyt, 'int');
	$rows = "DELETE FROM yeu_thich WHERE ID_YT = '$idyt'";
	//$rows = "UPDATE yeu_thich SET AnHien = 1 WHERE ID_YT='$idyt'";
	if(mysql_query($rows)){
		echo "1";
	}else{
	echo "2";

	}
?>
