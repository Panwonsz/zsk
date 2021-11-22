<?php
//Sprawdzanie czy zmienne nie są puste oraz czy imie i nazwisko nie są numerai
if(!empty($_POST['e']) && !empty($_POST['ez']) && !empty($_POST['day'])){
  if(is_numeric($_POST['e']) || is_numeric($_POST['ez'])){
    header("location: ./tabelka.php?i=Imię lub nazwisko nie mogą być numerami!!!&update=");
  } else {
    require_once "./connect.php";
    //Aktualizowaanie rekordów
    $sql = "update users set cityid='$_POST[miast]', name='$_POST[e]',
    surname='$_POST[ez]',birthday='$_POST[day]' where id='$_POST[hid]';";
    //$_POST[hid] patrzeć na tabelka.php !!! Zastosowałem tam <input type="hidden"> Żeby przemycić ID REKORDU
    if($connect->query($sql)){
      header("location: ../bazy_5.php?i=Udało się zaktualizować rekord");
    } else {
      header("location: ../bazy_5.php?i=Nie udało się zaktualizować rekordu");
    }
  }
} else {
  header("location: ../bazy_5.php?i=Wypełnij wszystkie pola&update=");
}
?>