<?php
$id = $_GET["ID_AD"];
settype($id,"int");
$row = chitietadmin($id);
?>
<?php
if(isset($_POST["btnsuaad"])){
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    $name = $_FILES["hinh"]["name"];
    $hinh= "$name";
    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
    $ten = $_POST["txtten"];
    $diachi = $_POST["txtdiachi"];
    $mk = md5($_POST["txtmatkhau"]);
    $dienthoai= $_POST["txtdienthoai"];
    $khoa = $_POST["trangthai"];
    mysql_query("UPDATE admin SET TEN='$ten',DIACHI='$diachi',MK='$mk',SDT='$dienthoai',HINH='$hinh',Khoa='$khoa' WHERE ID_AD='$id'");
    header("location:danhsachadmin.php");
}
?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>ADMIN</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" value="<?php echo $row["TEN"]?>" id="txtten" name="txtten" />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" value="<?php echo $row["DIACHI"]?>"  id="txtdiachi" name="txtdiachi" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" value="<?php echo $row["EMAIL"]?>"  id="txtemail" name="txtemail" disabled/>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật Khẩu</label>
                                        <input class="form-control" type="password" id="txtmatkhau" name="txtmatkhau" />
                                        </div>
                          <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control" value="<?php echo $row["SDT"]?>"  id="txtdienthoai" name="txtdienthoai" />
                                  </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file"  name="hinh" />
                                <img src="../upload/<?php echo $row["HINH"]?>" width="100px" height="100px" />
                                  </div>
                                  <div class="form-group">
                                      <label>Trạng Thái</label>

                                      <select class="form-control" name="trangthai" id="trangthai">

                                                  <option  <?php if($row["Khoa"] == 0) echo "selected='selected'";?> value="<?php echo "0" ?>">
                                                  <?php echo "Vô Hiệu Hóa" ?>
                                                   </option>
                                                   <option  <?php if($row["Khoa"] == 1) echo "selected='selected'";?> value="<?php echo "1" ?>">
                                                  <?php echo "Bình Thường" ?>
                                                   </option>
                                      </select>
                            <button type="submit" name="btnsuaad" id="btnsuaad" class="btn btn-default">Sửa ADMIN</button>
                        <form>
                    </div>
                </div>
