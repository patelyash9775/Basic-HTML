<?php
 $x=array(10,20,30,40,50,60);
?>
<html>
 <head>
 </head>
 <body>
  <ul>
   <?php
    for($i=0;$i<=5;$i++)
      {
   ?>

    <li><?php echo $x[$i]; ?></li>
   <?php
     }
    ?>
  </ul>
 </body>
</html>