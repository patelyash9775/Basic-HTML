<?php
 $x=array("first"=>10,"second"=>20,"third"=>30);
?>
<html>
 <head>
 </head>
 <body>
  <h1>List of numbers</h1>
  <ul>
   <?php
    foreach($x as $v)
      {
   ?>
    <li><?php echo $v; ?></li>
   <?php
     }
    ?>
  </ul>
 </body>
</html>