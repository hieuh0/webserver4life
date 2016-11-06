<?php
$id = $_GET["ID_LOAI"];
settype($id,'int');
$row = chitietloaidm($id);
?>
<?php
if(isset($_POST["btnsualoai"])){
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["filehinh"]["name"]);
  $name = $_FILES["filehinh"]["name"];
  $hinh= "$name";
  move_uploaded_file($_FILES["filehinh"]["tmp_name"], $target_file);
  $dm = $_POST["dm"];
  settype($dm,'int');
  $anhien = $_POST["anhien"];
  settype($anhien,'int');
  $ten = $_POST["txtten"];
  $qr = "UPDATE loai_dm SET TENLOAI='$ten',HINH='$hinh',ID_DM='$dm',AnHien='$anhien' WHERE ID_LOAI='$id'";

  mysql_query($qr);
  header("location:danhsachloaidm.php");
}

?>

    <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Danh Mục
                           <small>Sửa</small>
                       </h1>
                   </div>
                   <div class="col-lg-7" style="padding-bottom:120px">
                       <form action="" method="POST" enctype="multipart/form-data" >
                           <div class="form-group">
                               <label>Tên Danh Mục</label>
                               <input class="form-control" value="<?php echo $row["TENLOAI"] ?>" id="txtten" name="txtten" />
                           </div>

                           <div class="form-group">
                               <label>Hình</label>
                               <input type="file"  name="filehinh" />
                               <img src="../upload/<?php echo $row["HINH"] ?>" width="100px" height="100px"/>
                           </div>
                           <div class="form-group">
                               <label>Danh Mục</label>
                            <select class="form-control" name="dm" id="dm">
                                <?php
                                  $hang = danhsachdm();
                                   while($row_hang = mysql_fetch_array($hang)){
                                   ?>
                                       <option <?php if($row_hang["ID_DM"]== $row["ID_DM"]) echo "selected='selected'";?> value="<?php echo $row_hang['ID_DM'] ?>"><?php echo $row_hang['TENDM'] ?></option>
                               <?php
                           }
                               ?>
                               </select>
                           </div>
                           <div class="form-group">
                               <label>Ẩn Hiện</label>
                               <select class="form-control" name="anhien" id="anhien">
                               <option <?php if($row["AnHien"]== 0) echo  "selected='selected'"; ?> value="0">Ẩn</option>
                               <option <?php if($row["AnHien"]== 1) echo  "selected='selected'"; ?> value="1">Hiện</option>
                              </select>
                           </div>
                           <button type="submit" name="btnsualoai" id="btnsualoai" class="btn btn-default">Sửa</button>
                           <button type="reset" class="btn btn-default">Nhập Lại</button>
                       <form>
                   </div>
               </div>
