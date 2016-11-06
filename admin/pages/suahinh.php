<?php
$id = $_GET["ID_CT"];
settype($id,'int');
$row = chitiethinh($id);
?>
<?php
if(isset($_POST["btnsua"])){
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["hinh1"]["name"]);
    $name = $_FILES["hinh1"]["name"];
    $hinh= "$name";
    move_uploaded_file($_FILES["hinh1"]["tmp_name"], $target_file);
    $masp = $_POST["masp"];
    mysql_query("UPDATE chitietsp SET HINHCT='$hinh',ID_SP='$masp' WHERE ID_CT='$id'");
}
?>
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label>Sản Phẩm</label>
            <select class="form-control" name="masp" id="masp">
                <?php
                  $hang = sanpham();
                   while($row_hang = mysql_fetch_array($hang)){
                   ?>
                   <option  <?php if($row_hang["ID_SP"] == $row["ID_SP"]) echo "selected='selected'";?> value="<?php echo $row_hang["ID_SP"]?>"> <?php echo $row_hang["TENSP"] ?>
                   </option>
               <?php
           }
               ?>
               </select>
        </div>
        <div class="form-group">
            <label>Hình</label>
            <input type="file"  name="hinh1" />
            <img src="../upload/<?php echo $row["HINHCT"]?>" width="100px" height="100px"/>
        </div>
        <button type="submit" name="btnsua" id="btnsua" class="btn btn-default">Thêm Hình</button>
    <form>
</div>
