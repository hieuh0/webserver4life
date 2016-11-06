<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST" enctype="multipart/form-data" >

        <div class="form-group">
            <label>Sản Phẩm</label>
            <select class="form-control" name="sanpham" id="sanpham">
                <?php
                  $hang = sanpham();
                   while($row_hang = mysql_fetch_array($hang)){
                   ?>
                   <option value="<?php echo $row_hang['ID_SP'] ?>"><?php echo $row_hang['TENSP'] ?></option>
               <?php
           }
               ?>
               </select>
        </div>
        <div class="form-group">
            <label>Hình 1</label>
            <input type="file"  name="hinh1" />
        </div>
        <div class="form-group">
            <label>Hình 2</label>
            <input type="file"  name="hinh2" />
        </div>
        <div class="form-group">
            <label>Hình 3</label>
            <input type="file"  name="hinh3" />
        </div>
        <div class="form-group">
            <label>Hình 4</label>
            <input type="file"  name="hinh4" />
        </div>
        <button type="submit" name="themhinh" id="themhinh" class="btn btn-default">Thêm Hình</button>
    <form>
</div>
