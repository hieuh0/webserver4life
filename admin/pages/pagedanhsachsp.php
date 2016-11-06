<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sản Phẩm
            <small>Danh Sách</small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
              <th>ID</th>
              <th>Mã Sản Phẩm</th>
              <th>Tên Sản Phẩm</th>
              <th>Hình</th>
              <th>Giá</th>
              <th>Khuyến Mãi</th>
              <th>Loại</th>
              <th>Ẩn Hiện</th>
              <th>Ngày Đăng</th>
              <th>Người Đăng</th>
              <th>Xóa</th>
              <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
          <?php
       $danhsach = sanpham();
       while($row_danhsach = mysql_fetch_array($danhsach)){
           ob_start();
       ?><tr class="even gradeC" align="center">
                <td>{{ID_SP}}</td>
                <td>{{MASP}}</td>
                <td>{{TENSP}}</td>
                <td><img src="../upload/{{HinhSP}}" width="50px" height="50px" /></td>
                <td>{{GIASP}}</td>
                <td>{{IDKHUYENMAI}}</td>
                <td> <?php $row_loai = loaidm();
                while($rows = mysql_fetch_array($row_loai)){
                ?> <?php if($row_danhsach["ID_LOAI"]== $rows["ID_LOAI"]) echo $rows["TENLOAI"]; ?><?php
              }  ?></td>
                <td><?php if($row_danhsach["AnHien"] == 0) {echo "Ẩn";}  else if($row_danhsach["AnHien"] == 1) {echo "Hiện";}?></td>
                <td>{{NgayDang}}</td>
                <td>  <?php $row_ad = admin();
                  while($row = mysql_fetch_array($row_ad)){
                  ?> <?php if($row_danhsach["ID_AD"]== $row["ID_AD"]) echo $row["TEN"]; ?><?php

              }  ?></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="pages/xoasp.php?ID_SP={{ID_SP}}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="danhsachsp.php?p=suasanpham&ID_SP={{ID_SP}}">Edit</a></td>
            </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{{ID_SP}}",$row_danhsach["ID_SP"],$s);
            $s = str_replace("{{MASP}}",$row_danhsach["MASP"],$s);
            $s = str_replace("{{TENSP}}",$row_danhsach["TENSP"],$s);
            $s = str_replace("{{HinhSP}}",$row_danhsach["HinhSP"],$s);
            $s = str_replace("{{GIASP}}",$row_danhsach["GIASP"],$s);
            $s = str_replace("{{IDKHUYENMAI}}",$row_danhsach["IDKHUYENMAI"],$s);
            $s = str_replace("{{ID_LOAI}}",$row_danhsach["ID_LOAI"],$s);
            $s = str_replace("{{AnHien}}",$row_danhsach["AnHien"],$s);
            $s = str_replace("{{ID_AD}}",$row_danhsach["ID_AD"],$s);
            $s = str_replace("{{NgayDang}}",$row_danhsach["NgayDang"],$s);
            echo $s;
          }
            ?>
        </tbody>
    </table>
</div>
