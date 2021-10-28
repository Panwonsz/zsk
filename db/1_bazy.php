<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "4cgr1_baza1");
      $sql = "SELECT * FROM `users`";

      $result = $connect->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
          Id: $row[id]<br>
          Imię i nazwisko: $row[name] $row[surname]<br>
          Data urodzenia: $row[birthday]<br>
          <hr>
        ROW;
      }

      $connect->close();
    ?>
  </body>
</html>
