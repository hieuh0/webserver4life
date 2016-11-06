<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Loại Danh Mục
            <small>Danh Sách</small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
              <th>ID DM</th>
               <th>Tên Danh Mục</th>
               <th>Hình</th>
               <th>ID Loại</th>
               <th>Tên Loại</th>
               <th>Hình</th>
               <th>Ẩn Hiện</th>
               <th>Xóa</th>
               <th>Sữa</th>
            </tr>
        </thead>
        <tbody>
          <?php
         $danhsach = loaidm();
         while($row_danhsach = mysql_fetch_array($danhsach)){
             ob_start();
         ?>
             <tr class="odd gradeX" align="center">
                 <td>{{ID_DM}}</td>
                 <td>{{TENDM}}</td>
                 <td><img src="../upload/{{HINHDM}}" width="40px" height="40px"/></td>
                 <td>{{ID_LOAI}}</td>
                 <td>{{TENLOAI}}</td>
                 <td><img src="../upload/{{HINH}}" width="40px" height="40px"/></td>
                   <td><?php if($row_danhsach["AnHien"] == 0) {echo "Ẩn";}  else if($row_danhsach["AnHien"] == 1) {echo "Hiện";}?></td>
                 <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="danhsachloaidm.php?p=xoaloai&ID_LOAI={{ID_LOAI}}"> Delete</a></td>
                 <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="danhsachloaidm.php?p=sualoai&ID_LOAI={{ID_LOAI}}">Edit</a></td>
             </tr>
             <?php
             $s = ob_get_clean();
             $s = str_replace("{{ID_DM}}",$row_danhsach["ID_DM"],$s);
             $s = str_replace("{{TENDM}}",$row_danhsach["TENDM"],$s);
             $s = str_replace("{{HINHDM}}",$row_danhsach["HINHDM"],$s);
             $s = str_replace("{{ID_LOAI}}",$row_danhsach["ID_LOAI"],$s);
             $s = str_replace("{{TENLOAI}}",$row_danhsach["TENLOAI"],$s);
             $s = str_replace("{{HINH}}",$row_danhsach["HINH"],$s);
             $s = str_replace("{{AnHien}}",$row_danhsach["AnHien"],$s);
             echo $s;
                 }
             ?>
        </tbody>
    </table>
</div>
