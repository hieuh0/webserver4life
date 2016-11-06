<?php
$id = $_GET["ID"];
settype($id,"int");
$row_tin = chitiettintuc($id);
 ?>
 <?php
   if(isset($_POST["btnsua"])){
     $target_dir = "../upload/";
     $target_file = $target_dir . basename($_FILES["hinhtin"]["name"]);
     $name = $_FILES["hinhtin"]["name"];
     $hinh= "$name";
     move_uploaded_file($_FILES["hinhtin"]["tmp_name"], $target_file);
     $ten = $_POST["txttieude"];
     $chitiet = $_POST["demo"];
     $qr =  "UPDATE tintuc SET TieuDe='$ten',Hinh='$hinh',ChiTiet='$chitiet',ID_AD='$idad' WHERE ID='$id'";
     mysql_query($qr);
     header("location:danhsachtin.php");
   }
 ?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Tiêu Đề </label>
                                <input value="<?php echo $row_tin["TieuDe"] ?>" class="form-control" id="txttieude" name="txttieude" />
                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file"  name="hinhtin" />
                                <img src="../upload/<?php echo $row_tin["Hinh"] ?>" width="100px" height="100px"/>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea  class="form-control ckeditor" id="demo" name="demo" rows="20"><?php echo $row_tin["ChiTiet"] ?></textarea>
                            </div>
                            <button type="submit" name="btnsua" id="btnsua" class="btn btn-default">Thêm Sản Phẩm</button>
                        <form>
                    </div>
                </div>
