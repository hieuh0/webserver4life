<?php
$tin = danhsachtin();
while ($tintuc = mysql_fetch_array($tin)){
               ?>

               <li><a href="index.php?p=chitiet&ID=<?php echo $tintuc['ID']?>"> <?php echo $tintuc['TieuDe'] ?></a></li>
               <?php
                              }
                          ?>
