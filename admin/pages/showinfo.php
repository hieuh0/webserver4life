<?php
$id = $_GET["ID_TV"];
settype($id,'int');

$row_tv = chitietthanhvien($id);
?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thành Viên
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" value="<?php echo $row_tv["TEN"]?>" id="txtmasp" name="txtmasp" disabled />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" value="<?php echo $row_tv["DIACHI"]?>" id="txtten" name="txtten" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Điện Thoại</label>
                              <input class="form-control" value="<?php echo $row_tv["SDT"]?>" id="txtten" name="txtten"disabled />
                            </div>
                        <form>
                    </div>
                </div>
