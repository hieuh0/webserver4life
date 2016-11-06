<?php
$idsp = $_GET["ID_SP"];
settype($idsp,'int');
$row = chitietsanpham($idsp);
?>
<?php
   $idad = $_SESSION["ID_AD"];
   settype($idad,"int");
 ?>
<?php
if(isset($_POST["btnsuasp"])){
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
  $name = $_FILES["hinhsp"]["name"];
  $hinh= "$name";
  move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file);
  $masp = $_POST["masp"];
  $ten = $_POST["ten"];
  $gia = $_POST["gia"];
  settype($gia, 'int');
  $tt = $_POST["khuyenmai"];
  settype($tt , 'int');
  $idloai = $_POST["idloai"];
  settype($idloai, 'int');
  $chitiet = $_POST["demo"];
  $anhien = $_POST["hienan"];
  settype($anhien, 'int');
  $qr = "UPDATE san_pham SET MASP='$masp',
  TENSP='$ten',
  HinhSP='$hinh',
  GIASP='$gia',
  IDKHUYENMAI='$tt',
  ID_LOAI='$idloai',
  MOTA='$chitiet',
  AnHien='$anhien',
  ID_AD='$idad' WHERE ID_SP='$idsp'";
  mysql_query($qr);
  header("location:danhsachsp.php");

}
?>
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Mã Sản Phẩm</label>
                                <input value="<?php echo $row["MASP"]?>" class="form-control" id="masp" name="masp" />
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input value="<?php echo $row["TENSP"]?>"  class="form-control" id="ten" name="ten" />

                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file"  name="hinhsp" />
                                  <img src="../upload/<?php echo $row["HinhSP"]?>" width="100px" heigth="100px"/>
                            </div>
                            <div class="form-group">
                                <label>Giá Sản Phẩm</label>
                                <input class="form-control" value="<?php echo $row["GIASP"]?>" id="gia" name="gia" />
                            </div>
                            <div class="form-group">
                                <label>Khuyến Mãi</label>
                               <select class="form-group" name="khuyenmai" id="khuyenmai">
                                <?php
                                $km = khuyenmai();
                                while($row_KM = mysql_fetch_array($km)){
                                 ?>
                                   <option <?php if($row_KM["IDKHUYENMAI"]==$row["IDKHUYENMAI"])  echo "selected='selected'";?> value="<?php echo $row_KM['IDKHUYENMAI']?>" > <?php echo $row_KM['TENKM']?></option>
                                   <?php
                                 }
                                    ?>
                               </select>

                            </div>
                            <div class="form-group">
                                <label>Loại Danh Mục</label>
                             <select class="form-control" name="idloai" id="idloai">
                                 <?php
                                   $hang = loaidm();
                                    while($row_hang = mysql_fetch_array($hang)){
                                    ?>
                                        <option <?php if($row_hang["ID_LOAI"]== $row["ID_LOAI"]) echo "selected='selected'";?> value="<?php echo $row_hang['ID_LOAI'] ?>"><?php echo $row_hang['TENLOAI'] ?></option>
                                <?php
                            }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ẩn Hiện</label>
                                <select class="form-control" name="hienan" id="hienan">
                                  <option  <?php if($row["AnHien"] == 0) echo "selected='selected'";?> value="<?php echo "0" ?>">
                                  <?php echo "Ẩn" ?>
                                   </option>
                                   <option  <?php if($row["AnHien"] == 1) echo "selected='selected'";?> value="<?php echo "0" ?>">
                                   <?php echo "Hiện" ?>
                                    </option>
                                   </select>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea class="form-control ckeditor" id="demo" name="demo" rows="4"><?php echo $row["MOTA"] ?> </textarea>
                            </div>
                            <button type="submit" name="btnsuasp" id="btnsuasp" class="btn btn-default">Sửa Sản Phẩm</button>
                            <button type="reset" class="btn btn-default">Nhập Lại</button>
                        <form>
                    </div>
                </div>
