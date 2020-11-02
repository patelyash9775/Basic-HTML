<?php
 
 $x=array("sonu","pushti","Vrund");
 $y[0]=122;
 $y[1]=105;
 $y[2]=132;
 $mark=array("sonu"=>9.59,"pushti"=>9.77,"Vrund"=>9.68);

?>

<html>
 <head>
  <title>First Program</title>
 </head>
 <body>
  <h1>Hello <?php echo $x[0]; print" "; echo $y[0]; print" - "; echo $mark["sonu"];?></h1><br/>
  <h2>Hello <?php echo $x[1]; print" "; echo $y[1]; print" - "; echo $mark["pushti"];?></h2><br/>
  <h3>Hello <?php echo $x[2]; print" "; echo $y[2]; print" - "; echo $mark["Vrund"];?></h3><br/>
 </body>
</html>