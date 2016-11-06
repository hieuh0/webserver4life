<?php
$id = $_GET['ID'];
settype($id, "int");
$sp = chitiet($id);
while($row = mysql_fetch_array($sp)){
?>

 <div role="main" class="ui-content">

<center><img src="upload/<?php echo $row['Hinh']?>" width="150px" heigth="150px" /></center>

<p  align="left|right|center|justify">
 <?php echo $row['ChiTiet']?>
</p>

</div>

<?php
 }
?>
