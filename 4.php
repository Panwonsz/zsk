<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="post">
      <input type="text" name="name" value="Janusz"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="submit" value="Zatwierdź">
    </form>

    <?php
    if (isset($_POST['name'])) {
      // echo "Imię: ".$_POST['name'];
      // echo "Nazwisko: ".$_POST['surname'];
      echo <<< L
      <hr>
        Imię: $_POST[name]<br>
        Nazwisko: {$_POST['surname']}
L;
    }
    ?>
  </body>
</html>
