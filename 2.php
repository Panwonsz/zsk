<?php
echo PHP_VERSION;
echo 2**10,"<br>";

$x = 100;
$y = 10;
echo $x<=>$y,"<br>";

//równe
$x = 1;
$y = 1.0;
echo gettype($x),"<br>";
echo gettype($y),"<br>";

if ($x == $y) {
  echo "Równe";
}else {
  echo "Różne";
}
//preinkrementacja
$x = 10;
echo $x,"<br>";
$x=++$x;
echo $x,"<br>";

//postinkrementacja
$x=$x++;
echo $x,"<br>";

$y=$x++;
echo $x,"<br>";
echo $y,"<br>";

//predekrementacja


//postdekrementacja

$x=1;
echo $x;

$x=$x++;
echo $x;
$x=++$x;
echo $x;
$y=++$x;
echo $x;
echo $y;
$y=$x++;
echo $x;
echo $y;

 ?>
