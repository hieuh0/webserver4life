<?php

require "../lib/config.php";

$spmoi = mysql_query("SELECT * FROM san_pham WHERE IDKHUYENMAI >=2 AND AnHien =1 AND ID_LOAI BETWEEN 1 AND 9 ORDER BY ID_SP DESC LIMIT 0,15");

$res = array();

if(mysql_num_rows($spmoi) > 0){
	$new["success"]=1;
	$new["chitiet"] = array();

	while($ness = mysql_fetch_array($spmoi)){
		$nes = array();

		$nes["ID_SP"]=$ness["ID_SP"];
		$nes["TENSP"]=$ness["TENSP"];
		$nes["HinhSP"]=$ness["HinhSP"];
		$nes["GIASP"] = $ness["GIASP"];
		$nes["ID_LOAI"] = $ness["ID_LOAI"];

		array_push($new["chitiet"],$nes);

	}
echo json_encode($new);
}

?>
