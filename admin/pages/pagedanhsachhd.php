<ul class="nav nav-tabs">
    <li class="active"><a href="#chuaxuli">Chưa Xử Lí</a></li>
    <li><a href="#danggiao">Đang Giao</a></li>
    <li><a href="#dagiao">Đã Giao</a></li>
    <li><a href="#thongke">Thống Kê</a></li>
  </ul>
  <div class="tab-content">
    <!--- tab chưa xử lí -->
      <div id="chuaxuli" class="tab-pane fade in active">
              <?php
      $TrangThai = 0;
      settype($TrangThai,'int');
      ?>
        <h3>Hóa Đơn Chưa Xử Lí</h3>
        <div class="row">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr align="center">
                                 <th>ID</th>
                                 <th>Ngày Tạo</th>
                                 <th>Tổng Tiền</th>
                                 <th>Thành Viên</th>
                                 <th>Trạng Thái</th>
                                 <th>Người Xử Lí Hóa Đơn</th>
                                 <th>Chi Tiết</th>
                                 <th>Sữa</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php
                         $danhsach = hoadon($TrangThai);
                         while($row_hd = mysql_fetch_array($danhsach)){
                             ob_start();
                         ?>
                             <tr class="odd gradeX" align="center">
                                 <td>{{ID_HD}}</td>
                                 <td>{{NGAYTAO_HD}}</td>
                                 <td>{{TONGTIEN}}</td>
                                 <td><?php $row_tv=thanhvien();
                                 while ($row = mysql_fetch_array($row_tv)) {?>
                                   <a data-id="<?php $row_hd["ID_TV"]?>" href="danhsachhd.php?p=showinfo&ID_TV={{ID_TV}}" data-toggle='modal' data-remote-target="#myModal .modal-body" >  <?php if($row_hd["ID_TV"]== $row["ID_TV"]) echo $row["TEN"] ?></a>
             <?php } ?></td>
                                 <td><?php if($row_hd["TRANGTHAI"] == 0) {echo "Đang Xử Lí";}  else if($row_hd["TRANGTHAI"] == 1) {echo "Đang Giao";}else{
                                     echo "Đã Giao";}?></td>
                                     <td>
                                       <?php $row_ad = admin();
                                        while($row = mysql_fetch_array($row_ad)){
                                        ?> <?php if($row_hd["ID_AD"]== $row["ID_AD"]) echo $row["TEN"]; ?><?php
                                      }  ?>
                                       </td>
                                 <td class="center"><i class="fa-fw"></i><a href="danhsachhd.php?p=chitiethoadon&ID_HD={{ID_HD}}">Chi Tiết</a></td>
                                 <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="danhsachhd.php?p=suahoadon&ID_HD={{ID_HD}}">Sửa</a></td>
                             </tr>
                             <?php
                             $s = ob_get_clean();
                             $s = str_replace("{{ID_HD}}",$row_hd["ID_HD"],$s);
                             $s = str_replace("{{NGAYTAO_HD}}",$row_hd["NGAYTAO_HD"],$s);
                             $s = str_replace("{{TONGTIEN}}",$row_hd["TONGTIEN"],$s);
                             $s = str_replace("{{ID_TV}}",$row_hd["ID_TV"],$s);
                             $s = str_replace("{{TRANGTHAI}}",$row_hd["TRANGTHAI"],$s);
                             $s = str_replace("{{ID_AD}}",$row_hd["ID_AD"],$s);
                             echo $s;
                                 }
                             ?>
                         </tbody>
                     </table>
                 </div>

      </div>
<!--- end tab chưa xử lí -->

<!--- tab đang giao -->
      <div id="danggiao" class="tab-pane fade">
        <?php
        $TrangThai = 1;
        settype($TrangThai,'int');
  ?>
        <h3>Hóa Đơn Đang Giao</h3>
        <?php require "pages/danggiao.php";?>

        </div>
<!--- end tab đang giao -->

<!--- tab đã giao -->
      <div id="dagiao" class="tab-pane fade">
        <?php
        $TrangThai = 2;
        settype($TrangThai,'int');
      ?>
        <h3>Hóa Đơn Đã Giao</h3>
        <?php require "pages/dagiao.php";?>
        </div>
<!--- end tab đã giao -->

      <!--- tab thống kê -->
      <div id="thongke" class="tab-pane fade">
        <h3>Thống Kê</h3>
        </div>
      <!--- end tab thống kê -->
    </div>
  </div>
  <!--Thông Tin Chi Tiết -->
