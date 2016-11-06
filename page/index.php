<?php
require "../lib/config.php";
require "../lib/trangchu.php";
if( isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";

?>
<!DOCTYPE html>
<html>
<head>
	<title>4life</title>
<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">



 <?php
                    switch ($p) {

                        case "chitiet" :
                        require "chitiet.php";
                            break;

                        default:
                            require "trangchu.php";
                            break;
                    }
                    ?>



</div>
</body>
</html
