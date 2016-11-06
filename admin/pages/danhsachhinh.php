<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Hình Chi Tiết
            <small>Danh Sách</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
              <th>ID</th>
              <th>Hình 1</th>
              <th>Sản Phẩm</th>
              <th>Xóa</th>
              <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
          <?php
       $danhsach = hinhchitiet();
       while($row_danhsach = mysql_fetch_array($danhsach)){
           ob_start();
       ?><tr class="even gradeC" align="center">
                <td>{{ID_CT}}</td>
                <td><img src="../upload/{{HINHCT}}" width="50px" height="50px" /></td>
                <td>  <?php $row_ad = danhsachsanpham();
                  while($row = mysql_fetch_array($row_ad)){
                  ?> <?php if($row_danhsach["ID_SP"]== $row["ID_SP"]) echo $row["TENSP"]; ?><?php

              }  ?></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="pages/xoact.php?ID_CT={{ID_CT}}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="danhsachsp.php?p=suahinh&ID_CT={{ID_CT}}">Edit</a></td>
            </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{{ID_CT}}",$row_danhsach["ID_CT"],$s);
            $s = str_replace("{{HINHCT}}",$row_danhsach["HINHCT"],$s);
            $s = str_replace("{{ID_SP}}",$row_danhsach["ID_SP"],$s);
            echo $s;
          }
            ?>
        </tbody>
    </table>
</div>
