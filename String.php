<?php
 $x="Yash";
 $y="Yashvi";
 ?>
<html>
 <head>
  <title>Welcome to Strings</title>
 </head>
 <body>
  <h1><?php echo "Hello $x, \n Welcome to PHP course"; ?></h1>
  <h2><?php echo 'Hii $y'; ?></h2>
  <?php $l=strlen($x); ?>
  <h3><?php echo "$x has $l character"; ?></h3>
  <?php $a=strtoupper($x); ?>
  <h4><?php echo "$x , $a"; ?></h4>
  <?php $b=strcmp($x,$y); ?>
  <h5 style="font-size:18px;"><?php echo "$x , $y ,$b"; ?></h5>
 </body>
</html>