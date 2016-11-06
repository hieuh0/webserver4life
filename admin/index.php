<?php
ob_start();
session_start();
require "../lib/config.php";
?>
<?php
if(isset($_POST["btnlogin"])){
    $em  = $_POST["EMAIL"];
    $pa  = md5($_POST["MK"]);
    $qr = "SELECT * FROM admin WHERE EMAIL='$em' AND MK='$pa' AND Khoa = 1 ";
    $user = mysql_query($qr);
    if(mysql_num_rows($user) == 1){
    $row = mysql_fetch_array($user);
    $_SESSION["ID_AD"] = $row['ID_AD'];
    $_SESSION["TEN"] = $row['TEN'];
    $_SESSION["DIACHI"] = $row['DIACHI'];
    $_SESSION["EMAIL"] = $row['EMAIL'];
    $_SESSION["MK"] = $row['MK'];
    $_SESSION["SDT"] = $row['SDT'];
    $_SESSION["HINH"] = $row['HINH'];
    $_SESSION["Khoa"] = $row['Khoa'];
  }else{
    $message = "Sai Email Hoặc Mật Khẩu";
  echo "<script type='text/javascript'>alert('$message');</script>";
  }
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
    <title>4lifeteam</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng Nhập</h3>
                    </div>

                        <?php
                      if( !isset($_SESSION["ID_AD"])){
                          require "pages/formlogin.php";
                      }
                      else{
                          require "pages/xinchao.php";
                      }
                      ?>
                </div>
            </div>
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
