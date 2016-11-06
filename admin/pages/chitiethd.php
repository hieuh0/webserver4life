<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Hóa Đơn
            <small>Chi Tiết</small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
              <th>ID</th>
              <th>Tên Sản Phẩm</th>
              <th>Số Lượng</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $idhd = $_GET["ID_HD"];
        $ds = gethoadontheoid($idhd);
       while($row = mysql_fetch_array($ds)){
           ob_start();
       ?><tr class="even gradeC" align="center">
                <td>{{ID_CHITIETHD}}</td>
                <td>     <?php $row_ad = sanpham();
                      while($rows = mysql_fetch_array($row_ad)){
                      ?> <?php if($row["ID_SP"]== $rows["ID_SP"]) echo $rows["TENSP"]; ?><?php
                    }  ?></td>
                <td>{{SOLUONG}}</td>
            </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{{ID_CHITIETHD}}",$row["ID_CHITIETHD"],$s);
            $s = str_replace("{{ID_SP}}",$row["ID_SP"],$s);
            $s = str_replace("{{SOLUONG}}",$row["SOLUONG"],$s);
            echo $s;
          }
            ?>
        </tbody>
    </table>
</div>
