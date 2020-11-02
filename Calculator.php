<?php
 $x=$_POST['fno'];
 $y=$_POST['sno'];
 $sum=$x+$y;
 $sub=$x-$y;
 $mult=$x*$y;
 $div=$x/$y;
 echo "Sum of $x and $y is $sum";
 echo "<br>";
 echo "Subtraction of $x and $y is $sub";
 echo "<br>";
 echo "Multiplication of $x and $y is $mult";
 echo "<br>";
 echo "Division of $x and $y is $div";
?>