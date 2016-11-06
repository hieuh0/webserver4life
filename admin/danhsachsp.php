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
<?php
if(isset($_POST["buttonthemsp"])){
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $name = $_FILES["fileToUpload"]["name"];
    $hinh= "$name";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $masp = $_POST["txtmasp"];
    $ten = $_POST["txtten"];
    $gia = $_POST["txtgia"];
    settype($gia, "int");
    $tt = $_POST["trangthai"];
    settype($tt , "int");
    $idloai = $_POST["loai"];
    settype($idloai, "int");
    $chitiet = $_POST["demo"];
    $anhien = $_POST["anhien"];
    settype($anhien, "int");
mysql_query("INSERT INTO san_pham VALUES(null,'$masp','$ten','$hinh','$gia','$tt','$idloai','$chitiet','$anhien',CURDATE(),'$idad')");
}
?>

<?php
if(isset($_POST["themhinh"])){
  ///chuyen hinh 1
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["hinh1"]["name"]);
  $name = $_FILES["hinh1"]["name"];
  $hinh1= "$name";
  move_uploaded_file($_FILES["hinh1"]["tmp_name"], $target_file);
  ///chuyen hinh 2
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["hinh2"]["name"]);
  $name = $_FILES["hinh2"]["name"];
  $hinh2= "$name";
  move_uploaded_file($_FILES["hinh2"]["tmp_name"], $target_file);
  ///chuyen hinh 3
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["hinh3"]["name"]);
  $name = $_FILES["hinh3"]["name"];
  $hinh3= "$name";
  move_uploaded_file($_FILES["hinh3"]["tmp_name"], $target_file);
  ///chuyen hinh 4
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["hinh4"]["name"]);
  $name = $_FILES["hinh4"]["name"];
  $hinh4= "$name";
  move_uploaded_file($_FILES["hinh4"]["tmp_name"], $target_file);
  $sanpham = $_POST["sanpham"];
  settype($sanpham,'int');
  $qr1 = "INSERT INTO chitietsp VALUES(null,'$hinh1','$sanpham')";
  $qr2 = "INSERT INTO chitietsp VALUES(null,'$hinh2','$sanpham')";
  $qr3 = "INSERT INTO chitietsp VALUES(null,'$hinh3','$sanpham')";
  $qr4 = "INSERT INTO chitietsp VALUES(null,'$hinh4','$sanpham')";
  mysql_query($qr1);
  mysql_query($qr2);
  mysql_query($qr3);
  mysql_query($qr4);

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
                  <?php
                    switch ($p) {
                      case "suasanpham" :
                      require "pages/suasanpham.php";
                          break;
                      case "suahinh" :
                      require "pages/suahinh.php";
                          break;
                        case "themsp" :
                        require "pages/themsp.php";
                            break;
                        case "danhsachchitiet" :
                            require "pages/danhsachhinh.php";
                            break;
                        case "themhinhchitiet" :
                            require "pages/themhinh.php";
                            break;
                        default:
                            require "pages/pagedanhsachsp.php";
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
