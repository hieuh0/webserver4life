<?php
if(!isset($_SESSION["ID_AD"])) {
header("location:../index.php");
}
?>
Xin Chào <?php echo $_SESSION["TEN"] ?>
Bạn sẽ chuyển sang trang Quản trị sau <span id="time">5</span> giây nữa<br />

<a href="danhsachdm.php">click vào đây nếu không muốn đợi</a>
  <script type="text/javascript">
  var jgt = 5; document.getElementById('time').innerHTML = jgt;
  function stime(){
    document.getElementById('time').innerHTML = jgt; jgt = jgt - 1;
    if(jgt == 0){clearInterval(timing);
      location = 'danhsachdm.php';} }
      var timing = setInterval("stime();",1000);
      </script>
