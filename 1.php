<?php
  echo "ZSK<br";
  echo "ZSK";
  $name="Janusz";
  echo 'Twoje imię: $name';
  echo "<br>Twoje imię: $name<br>";

  $prawda = true;
  $fałsz = false;
  $całkowita = 10;
  $bin = 0b1011; //11
  $oct = 011; //9
  $hex = 0x11; //17
  echo gettype($hex); //integer
  echo gettype($prawda); //boolean
  echo $bin;

  //zmiennoprzecinkowa

  $x = 10.5;
  echo gettype($x); //double

  //heredoc
$surname = Nowak;
echo <<< ETYKIETA
  <hr>
  Anna $surname<br>
  Poznań
ETYKIETA;

$x = <<< ETYKIETA
  <hr>
  Janusz $surname<br>
  Poznań
ETYKIETA;

echo $x;
echo "Nazwa zmiennej: \$name";
 ?>
