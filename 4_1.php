<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" value="Janusz"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="submit" value="Zatwierdź">
    </form>

    <?php
    if (!empty($_GET['name'])&& !empty($_GET['surname'])) {
      // echo "Imię: ".$_POST['name'];
      // echo "Nazwisko: ".$_POST['surname'];
      echo <<< L
      <hr>
        Imię: $_GET[name]<br>
        Nazwisko: {$_GET['surname']}
L;
    }
    else {
      echo "Wypełnij dane";
    }
    ?>
  </body>
</html>
