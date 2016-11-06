<div class="row">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
   <thead>
       <tr align="center">
           <th>ID</th>
           <th>Họ Tên</th>
           <th>Hình</th>
           <th>Email</th>
           <th>Địa Chỉ</th>
           <th>Điện Thoại</th>
           <th>Giới Tính</th>
           <th>Ngày Tạo</th>
           <th>Trạng Thái</th>
           <th>Danh Sách Hóa Đơn</th>
           <th>Xóa</th>
           <th>Sữa</th>
       </tr>
   </thead>
   <tbody>
   <?php
   $danhsach = thanhvien();
   while($row_hd = mysql_fetch_array($danhsach)){
       ob_start();
   ?>
       <tr class="odd gradeX" align="center">
           <td>{{ID_TV}}</td>
           <td>{{TEN}}</td>
          <td><img src="data:image/png;base64,{{HINH}}" width="50px" height="50px" /></td>
           <td>{{EMAIL}}</td>
           <td>{{DIACHI}}</td>
           <td>{{SDT}}</td>
           <td><?php if($row_hd["GioiTinh"] == 0) {echo "Nữ";}  else if($row_hd["GioiTinh"] == 1) {echo "Nam";}?></td>
           <td>{{NgayTao}}</td>
           <td><?php if($row_hd["TrangThai"] == 0) {echo "Vô Hiệu Hóa";}  else if($row_hd["TrangThai"] == 1) {echo "Bình Thường";}?></td>

            <td class="center"><i class="glyphicon glyphicon-link  fa-fw"></i><a href="danhsachtv.php?p=chitiethoadon&ID_TV={{ID_TV}}">Danh Sách Hóa Đơn</a></td>
           <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="danhsachtv.php?p=mokhoa&ID_TV={{ID_TV}}">Mở Khóa</a></td>
           <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="danhsachtv.php?p=vohieu&ID_TV={{ID_TV}}">Khóa</a></td>
       </tr>
       <?php
       $s = ob_get_clean();
       $s = str_replace("{{ID_TV}}",$row_hd["ID_TV"],$s);
       $s = str_replace("{{TEN}}",$row_hd["TEN"],$s);
       $s = str_replace("{{HINH}}",$row_hd["HINH"],$s);
       $s = str_replace("{{EMAIL}}",$row_hd["EMAIL"],$s);
       $s = str_replace("{{DIACHI}}",$row_hd["DIACHI"],$s);
       $s = str_replace("{{SDT}}",$row_hd["SDT"],$s);
       $s = str_replace("{{GioiTinh}}",$row_hd["GioiTinh"],$s);
       $s = str_replace("{{NgayTao}}",$row_hd["NgayTao"],$s);
       $s = str_replace("{{TrangThai}}",$row_hd["TrangThai"],$s);
       echo $s;
           }
       ?>
   </tbody>
</table>
</div>
