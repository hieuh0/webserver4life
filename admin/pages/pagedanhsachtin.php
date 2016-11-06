<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tin Tức
            <small>Danh Sách</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
              <th>ID</th>
              <th>Tiêu Đề</th>
              <th>Hình</th>
              <th>Ngày Đăng</th>
              <th>Người Đăng</th>
              <th>Xóa</th>
              <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
          <?php
       $danhsach = tintuc();
       while($row_danhsach = mysql_fetch_array($danhsach)){
           ob_start();
       ?><tr class="even gradeC" align="center">
                <td>{{ID}}</td>
                <td>{{TieuDe}}</td>
                <td><img src="../upload/{{Hinh}}" width="50px" height="50px" /></td>
                <td>{{ngay}}</td>
                <td>  <?php $row_ad = admin();
                  while($row = mysql_fetch_array($row_ad)){
                  ?> <?php if($row_danhsach["ID_AD"]== $row["ID_AD"]) echo $row["TEN"]; ?><?php

              }  ?></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="danhsachtin.php?p=suatin&ID={{ID}}">Edit</a></td>
            </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{{ID}}",$row_danhsach["ID"],$s);
            $s = str_replace("{{TieuDe}}",$row_danhsach["TieuDe"],$s);
            $s = str_replace("{{Hinh}}",$row_danhsach["Hinh"],$s);
            $s = str_replace("{{ngay}}",$row_danhsach["ngay"],$s);
            $s = str_replace("{{ID_AD}}",$row_danhsach["ID_AD"],$s);
            echo $s;
          }
            ?>
        </tbody>
    </table>
</div>
