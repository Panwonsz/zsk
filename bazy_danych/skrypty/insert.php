<?php
//Sprawdzanie czy nie są puste oraz czy imie i nazwisko nie są numerami
if(!empty($_POST['im']) && !empty($_POST['naz']) && !empty($_POST['dat'])){
  if(is_numeric($_POST['im']) || is_numeric($_POST['naz'])){
  header("location: ../bazy_5.php?i=Imie i nazwisko nie mogą być numerami&adds=");
  }
  else {
    //Wstawianie rekordu
    require_once "./connect.php";
    //Parsowanie danych
    (string)$i = $_POST['im'];
    //Parsowanie danych
    (string)$n  = $_POST['naz'];
    $d = $_POST['dat'];
    $a = $_POST['miasto'];
    $sql = "insert into users(cityid,name,surname,birthday) values ('$a','$i','$n','$d');";
    if($connect->query($sql)){
      header("location: ../bazy_5.php?i=Udało się wstawić rekord");
    } else {
      header("location: ../bazy_5.php?i=Nie udało się wstawić rekordu");
    }
  }
} else {
  header("location: ../bazy_5.php?i=Wypełnij wszystkie pola&adds=");
}

 ?>