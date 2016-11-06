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
        unset($_SESSION["Quyen"]);
        header("location:index.php");
}
?>
<?php
if(isset($_POST["btnthemad"])){
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    $name = $_FILES["hinh"]["name"];
    $hinh= "$name";
    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
    $ten = $_POST["txtten"];
    $diachi = $_POST["txtdiachi"];
    $mail = $_POST["txtemail"];
    $mk = md5($_POST["txtmatkhau"]);
    $dienthoai= $_POST["txtdienthoai"];
mysql_query("INSERT INTO admin VALUES(null,'$ten','$diachi','$mail','$mk','$dienthoai','$hinh',1)");
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


          <!-- /.navbar-header -->

          <?php require "menu/menu.php";?>
          <!-- /.navbar-top-links -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                  <?php
                    switch ($p) {

                        case "suaad":
                        require "pages/suaad.php";
                        break;
                        case "xoaad":
                        require "pages/xoaad.php";
                        break;
                        case "themad" :
                        require "pages/themad.php";
                            break;
                        default:
                            require "pages/pagedanhsachad.php";
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
