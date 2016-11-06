<div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Danh Mục
                           <small>Thêm</small>
                       </h1>
                   </div>
                   <div class="col-lg-7" style="padding-bottom:120px">
                       <form action="" method="POST" enctype="multipart/form-data" >
                           <div class="form-group">
                               <label>Tên Danh Mục</label>
                               <input class="form-control" id="txtten" name="txtten" />
                           </div>

                           <div class="form-group">
                               <label>Hình</label>
                               <input type="file"  name="fileToUpload" />
                           </div>
                           <div class="form-group">
                               <label>Danh Mục</label>
                            <select class="form-control" name="loai" id="loai">
                                <?php
                                  $hang = danhsachdm();
                                   while($row_hang = mysql_fetch_array($hang)){
                                   ?>
                                       <option value="<?php echo $row_hang['ID_DM'] ?>"><?php echo $row_hang['TENDM'] ?></option>
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
                           <button type="submit" name="btnthemsp" id="btnthemsp" class="btn btn-default">Thêm</button>
                           <button type="reset" class="btn btn-default">Nhập Lại</button>
                       <form>
                   </div>
               </div>
