<?php
ob_start();
session_start();
require "../lib/config.php";
require "../lib/quantri.php";
if(!isset($_SESSION["ID_AD"])){
header("location:index.php");
}
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
</head>

<body>

    <div id="wrapper">

        <?php require "menu/menu.php";?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Mục
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Hình Ảnh</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                        $danhsach = danhsachdm ();
                        while($row_danhsach = mysql_fetch_array($danhsach)){
                            ob_start();
                        ?>
                            <tr class="odd gradeX" align="center">
                                 <td>{{ID_DM}}</td>
                                 <td>{{TENDM}}</td>
                                 <td><img src="../upload/{{HINHDM}}" width="100px" /></td>
                                 <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoasp.php?id={{id}}"> Delete</a></td>
                                 <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                             </tr>
                             <?php
                             $s = ob_get_clean();
                             $s = str_replace("{{ID_DM}}",$row_danhsach["ID_DM"],$s);
                             $s = str_replace("{{TENDM}}",$row_danhsach["TENDM"],$s);
                             $s = str_replace("{{HINHDM}}",$row_danhsach["HINHDM"],$s);
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
