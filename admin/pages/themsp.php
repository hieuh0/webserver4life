<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Mã Sản Phẩm</label>
                                <input class="form-control" id="txtmasp" name="txtmasp" />
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" id="txtten" name="txtten" />
                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file"  name="fileToUpload" />
                            </div>
                            <div class="form-group">
                                <label>Giá Sản Phẩm</label>
                                <input class="form-control" id="txtgia" name="txtgia" />
                            </div>
                            <div class="form-group">
                                <label>Khuyến Mãi</label>
                               <select class="form-group" name="trangthai" id="trangthai">
                                <?php
                                $km = khuyenmai();
                                while($row_KM = mysql_fetch_array($km)){
                                 ?>
                                   <option value="<?php echo $row_KM['IDKHUYENMAI']?>" > <?php echo $row_KM['TENKM']?></option>
                                   <?php
                                 }
                                    ?>
                               </select>

                            </div>
                            <div class="form-group">
                                <label>Loại Danh Mục</label>
                             <select class="form-control" name="loai" id="loai">
                                 <?php
                                   $hang = loaidm();
                                    while($row_hang = mysql_fetch_array($hang)){
                                    ?>
                                        <option value="<?php echo $row_hang['ID_LOAI'] ?>"><?php echo $row_hang['TENLOAI'] ?></option>
                                <?php
                            }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ẩn Hiện</label>
                                <select class="form-control" name="anhien" id="anhien">
                                    <option value="0">Ẩn</option>
                                      <option value="1">Hiện</option>
                                   </select>
                            </div>
                            <div class="form-group">
                                <label>Ẩn Hiện</label>
                                <textarea class="form-control ckeditor" id="demo" name="demo" rows="4"></textarea>
                            </div>
                            <button type="submit" name="buttonthemsp" id="buttonthemsp" class="btn btn-default">Thêm Sản Phẩm</button>
                            <button type="reset" class="btn btn-default">Nhập Lại</button>
                        <form>
                    </div>
                </div>
