<?php
function danhsachtin(){
	$qr = "SELECT * FROM tintuc";
	return mysql_query($qr);
}

function chitiet($id){
		$qr = "SELECT * FROM tintuc WHERE ID='$id'";
		return mysql_query($qr);
}

?>
