<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <?php
      if (!isset($_POST["person"])) {
        echo <<< FORMCOUNTPERSON
        <h3>Ilość osób w rodzinie</h3>
        <form method="post">
          <input type="text" name="person" placeholder="Podaje ilosć osób"><br><br>
          <input type="submit" value="Zatwierdź"><br>
        </form>
        FORMCOUNTPERSON;
      }
    ?>
    <?php
      if (!empty($_POST["person"])) {
        echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
        echo <<< FORMAGE
        <form method="post">
        FORMAGE;
        $count=$_POST["person"];
        for ($i=1; $i <= $count; $i++) {
          echo "<input type='number' name='person".$i."' placeholder='Podaje wiek osoby nr ".$i."'><br><br>";
        }
        echo <<< FORMAGE
          <input type="submit" name="buttonavg" value="Zatwierdź"><br>
        </form>
        FORMAGE;
      }
      if (isset($_POST['buttonavg'])) {
        // print_r($_POST);
        $avg = 0;
        $count = 0;
        foreach ($_POST as $key => $value) {
          if ($key != 'buttonavg') {
            $avg+=$value;
            $count++;
          }
        }
        echo "Średni wiek ".number_format($avg/$count, 2);
      }
    ?>
  </body>
</html>
