<?php
ob_start();
session_start();
require "../lib/config.php";
require "../lib/quantri.php";
if( isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";
if(!isset($_SESSION["ID_AD"])){
$id = $_GET["ID_AD"];
header("location:index.php");
}?>
<?php
   $idad = $_SESSION["ID_AD"];
   settype($idad,"int");
 ?>
<?php
if(isset($_POST["btnthoat"])){
        unset($_SESSION["ID_AD"]);
        unset($_SESSION["TEN"]);
        unset($_SESSION["DIACHI"]);
        unset($_SESSION["EMAIL"]);
        unset($_SESSION["MK"]);
        unset($_SESSION["SDT"]);
        unset($_SESSION["HINH"]);
        header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang Quản Trị Ứng Dụng 4life- Bản Quyền Thuộc 4lifeTeam">
    <meta name="author" content="">
    <title>ADMIN-4life</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="ckeditor/ckeditor.js" ></script>
</head>

<body>

    <div id="wrapper">
        <?php require "menu/menu.php";?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
              <div class="row">
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                 <thead>
                     <tr align="center">
                         <th>ID</th>
                         <th>Thành Viên</th>
                         <th>Sản Phẩm</th>
                         <th>Nội Dung</th>
                         <th>Ngày</th>
                         <th>Ẩn Hiện</th>
                         <th>Xóa</th>
                         <th>Sữa</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php
                 $danhsach = danhsachcomment();
                 while($row_hd = mysql_fetch_array($danhsach)){
                     ob_start();
                 ?>
                     <tr class="odd gradeX" align="center">
                         <td>{{ID_BL}}</td>
                         <td><?php $row_tv=thanhvien();
                         while ($row = mysql_fetch_array($row_tv)) {?><?php if($row_hd["ID_TV"]== $row["ID_TV"]) echo $row["TEN"] ?>

                             <?php } ?></td>
                             <td><?php $row_sp=sanpham();
                             while ($row = mysql_fetch_array($row_sp)) {?><?php if($row_hd["ID_SP"]== $row["ID_SP"]) echo $row["TENSP"] ?>

                                 <?php } ?>
                             </td>
                         <td>{{NoiDung}}</td>
                         <td>{{Ngay}}</td>
                         <td><?php if($row_hd["AnHien"] == 0) {echo "Ẩn";}  else if($row_hd["AnHien"] == 1) {echo "Hiện";}?></td>

                         <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:alert('Không Được Xóa')">Xóa</a></td>
                         <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="pages/suabinhluan.php?ID_BL={{ID_BL}}">Sửa</a></td>
                     </tr>
                     <?php
                     $s = ob_get_clean();
                     $s = str_replace("{{ID_BL}}",$row_hd["ID_BL"],$s);
                     $s = str_replace("{{ID_TV}}",$row_hd["ID_TV"],$s);
                     $s = str_replace("{{ID_SP}}",$row_hd["ID_SP"],$s);
                     $s = str_replace("{{NoiDung}}",$row_hd["NoiDung"],$s);
                     $s = str_replace("{{Ngay}}",$row_hd["Ngay"],$s);
                     $s = str_replace("{{AnHien}}",$row_hd["AnHien"],$s);
                     echo $s;
                         }
                     ?>
                 </tbody>
             </table>
         </div>

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
