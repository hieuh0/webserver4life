
<?php
   $idad = $_SESSION["ID_AD"];
   settype($idad,"int");
 ?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">ADMIN
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Địa Chỉ</th>
                                <th>EMAIL</th>
                                <th>Điện Thoại</th>
                                <th>Hình</th>
                                <th>Tình Trạng</th>
                                <th>Xóa</th>
                                <th>Sữa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $danhsach = admin();
                        while($row_danhsach = mysql_fetch_array($danhsach)){
                            ob_start();
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td>{{ID_AD}}</td>
                                <td>{{TEN}}</td>
                                <td>{{DIACHI}}</td>
                                <td>{{EMAIL}}</td>
                                <td>{{SDT}}</td>
                                <td><img src="../upload/{{HINH}}" width="50px" height="50px" /></td>
                                <td><?php if($row_danhsach["Khoa"] == 0){echo "Vô Hiệu Hóa";}else{
                                    echo "Bình Thường";
                                }?></td>

                                <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i><a href="danhsachadmin.php?p=xoaad&ID_AD={{ID_AD}}"> Khóa</a></td>

                                <td class="center">
                                  <?php
                                  if($row_danhsach["ID_AD"] != $idad){
                                       echo '<i class="fa fa-pencil fa-fw"></i><a href="javascript:void(0);">Không Được Sửa</a>';
                                     }
                                 else{
                                   echo '<i class="fa fa-pencil fa-fw"></i> <a href="danhsachadmin.php?p=suaad&ID_AD={{ID_AD}}">Sửa</a>';
                                 }?>
                                  </td>
                            </tr>
                            <?php
                            $s = ob_get_clean();
                            $s = str_replace("{{ID_AD}}",$row_danhsach["ID_AD"],$s);
                            $s = str_replace("{{TEN}}",$row_danhsach["TEN"],$s);
                            $s = str_replace("{{DIACHI}}",$row_danhsach["DIACHI"],$s);
                            $s = str_replace("{{EMAIL}}",$row_danhsach["EMAIL"],$s);
                            $s = str_replace("{{SDT}}",$row_danhsach["SDT"],$s);
                            $s = str_replace("{{HINH}}",$row_danhsach["HINH"],$s);
                            $s = str_replace("{{Khoa}}",$row_danhsach["Khoa"],$s);
                            echo $s;
                                }
                            ?></tbody>
                    </table>
                </div>
