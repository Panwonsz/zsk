<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forms</title>
  </head>
  <body>
    <h3>Figury geometryczne</h3>
    <form action="./scripts/formy.php" method="post">
      <input type="text" name="imie" placeholder="Podaj imię"><br><br>
      <input type="radio" name="polygon" value="kwadrat" checked>Kwadrat <br><br>
      <input type="radio" name="polygon" value="prostokąt">Prostokąt <br><br>
      <input type="submit" value="Zatwierdź">
    </form>
  </body>
</html>
