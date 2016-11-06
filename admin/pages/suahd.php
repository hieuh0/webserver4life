<?php
$id = $_GET["ID_HD"];
settype($id,"int");
$row_sp = chitiethd($id);
 ?>
 <?php
if(isset($_POST["btnsua"])){
    $trangthai = $_POST["trangthai"];
    settype($trangthai, 'int');
    $qr = "UPDATE hoa_don SET TRANGTHAI='$trangthai',ID_AD='$idad' WHERE ID_HD='$id'";
    mysql_query($qr);
    header("location:danhsachhd.php");
}
?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
                            <small>Đổi Trạng Thái</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Ngày Mua</label>
                                <input class="form-control" value="<?php echo $row_sp["NGAYTAO_HD"]?>" id="txtten" name="txtten" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Tổng Tiền</label>
                                <input class="form-control" value="<?php echo $row_sp["TONGTIEN"]?>" id="txtdiachi" name="txtdiachi" disabled />
                            </div>
                             <div class="form-group">
                                <label>Thành Viên</label>
                                <input class="form-control" value="
                                <?php $row_tv = thanhvien();  while ($row = mysql_fetch_array($row_tv)) {?><?php if($row_sp["ID_TV"]== $row["ID_TV"]) echo $row["TEN"] ?> <?php } ?>" id="txtmatkhau" name="txtmatkhau" disabled />
                            </div>
                            <div class="form-group">
                                <label>Trạng Thái</label>

                                <select class="form-control" name="trangthai" id="trangthai">

                                            <option  <?php if($row_sp["TRANGTHAI"] == 0) echo "selected='selected'";?> value="<?php echo "0" ?>">
                                            <?php echo "Đang Xử Lí" ?>
                                             </option>
                                             <option  <?php if($row_sp["TRANGTHAI"] == 1) echo "selected='selected'";?> value="<?php echo "1" ?>">
                                            <?php echo "Đang Giao" ?>
                                             </option>
                                             <option  <?php if($row_sp["TRANGTHAI"] == 2) echo "selected='selected'";?> value="<?php echo "2" ?>">
                                            <?php echo "Đã Giao" ?>
                                             </option>
                                </select>
                              </div>


                            <button type="submit" name="btnsua" id="btnsua" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Nhập Lại</button>
                        <form>
                    </div>
                </div>
