<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      tr, th,td,table {
        border-collapse: collapse;
        text-align: center;
        border: 2px solid red;
      }
    </style>
    <title>Panel Główny</title>
  </head>
  <body>
  <?php
  //Połączenie z bazą
  require_once "./skrypty/connect.php";
  $sql = "select * from users;";
  $result = $connect->query($sql);
  //Wyświetlanie informacji z bazy danych
  echo <<<S
  <table>
  <tr>
  <th>ID</th>
  <th>CITYID</th>
  <th>Imie</th>
  <th>Nazwisko</th>
  <th>Data Urodzenia</th>
  <th>Usuwanie</th>
  <th>Modyfikowanie</th>
  </tr>
  S;
  while($rows=$result->fetch_assoc()){
    echo <<<D
    <tr>
    <td>$rows[id]</td>
    <td>$rows[cityid]</td>
    <td>$rows[name]</td>
    <td>$rows[surname]</td>
    <td>$rows[birthday]</td>
    <td><a href="./skrypty/delete.php?id=$rows[id]">Delete</a></td>
    <td><a href="./bazy_5.php?update=$rows[id]">Modyfikuj</a></td>
    D;
  }
  echo "</table>";
  //Odbieranie Danych
  if(isset($_GET['i'])){
    echo $_GET['i'];
  }
  echo "<br><br>";
  //Dodawanie informacji do bazy danych
  if(isset($_GET['adds'])){
    echo <<<FORM
    <h3>Dodawanie Do Bazy</h3><br>
    <form method="post" action="./skrypty/insert.php">
      <input type="text" name="im" placeholder="Podaj imie"><br>
      <input type="text" name="naz" placeholder="Podaj nazwisko"><br>
      <input type="date" name="dat">Data Urodzenia<br>
      <select name="miasto">
    FORM;
    $eldo = "select * from cities;";
    $ans = $connect->query($eldo);
    while($row=$ans->fetch_assoc()){
      echo "<option value=$row[id]>$row[city]</option>";
    }
    echo '</select><input type="submit" value="Dodaj Użytkownika"></form>';
  } else {
    echo '<a href="./bazy_5.php?adds=">Dodaj Rekod Do Bazy</a>';
  }
  //Aktualizowanie rekordów bazy
  if(isset($_GET['update'])){
    echo <<<UPDATE
    <h3>Aktualizowanie Bazy Danych</h3>
    <form method="post" action="./update.php"><br>
      <input type="text" name="e" placeholder="Podaj imie"><br>
      <input type="text" name="ez" placeholder="Podaj nazwisko"><br>
      <input type="date" name="day"><br>
      <input type="hidden" value=$_GET[update] name="hid">
      <select name="miast">
    UPDATE;
    $bagno = "select * from cities;";
    $resu = $con->query($bagno);
    while($ad=$resu->fetch_assoc()){
      echo "<option value=$ad[id]>$ad[city]</option>";
    }
    echo '</select><input type="submit" value="Aktualizuj Rekord"></form>';
  }
   ?>
  </body>
</html>