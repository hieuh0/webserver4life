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
<?php
if(isset($_POST["btnthemsp"])){
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $name = $_FILES["fileToUpload"]["name"];
    $hinh= "$name";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $ten = $_POST["txtten"];
    $idloai = $_POST["loai"];
    settype($idloai, "int");
    $trangthai = $_POST["anhien"];
    settype($trangthai,'int');
    $qr =  "INSERT INTO loai_dm VALUES(null,'$ten','$hinh','$idloai','$trangthai')";
mysql_query($qr);
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
              <?php
                switch ($p) {
                    case "themloai" :
                    require "pages/themloai.php";
                        break;
                        case "xoaloai" :
                        require "pages/xoaloai.php";
                            break;
                            case "sualoai" :
                            require "pages/sualoai.php";
                                break;
                    default:
                        require "pages/pagedanhsachloai.php";
                        break;
                }
                ?>
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
