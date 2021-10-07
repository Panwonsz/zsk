<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h1>Kwadrat</h1>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
      <input type="submit" name="btn" value="Oblicz">
    </form>
    <?php
      // if (!empty($_GET["sideA"]) && is_numeric($_GET['sideA'])) {
      if (!empty($_GET["sideA"])) {
        $a = str_replace(',','.',$_GET["sideA"]);
        $area=pow($a, 2);
        $circumferance=4*$a;
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
