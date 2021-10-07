<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj bok b"><br><br>
      <input type="submit" name="btn" value="Oblicz">
    </form>
    <?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
        $a = str_replace(',','.',$_GET["sideA"]);
        $b = str_replace(',','.',$_GET["sideA"]);
        $area=$a*$b;
        $circumferance=2*$a+2*$b;
        echo <<< RESULT
          <hr>
          Pole kwadratu wynosi: $area cm^2 <br>
          Obwód kwadratu wynosi: $circumferance cm
        RESULT;
      }else if (isset($_GET['btn'])) {
        echo "Wypełnij pole";
      }
    ?>
  </body>
</html>
