<?php
if(!empty($_GET['id'])){
  require_once "./connect.php";
  $sql = "delete from users where id=$_GET[id];";
  $connect->query($sql);
  echo $con->affected_rows;
  if ($con->affected_rows){
    header("location: ../bazy_5.php?i=Nie udało się usunąć rekordu o id:$_GET[id]");
  } else {
    header("location: ../bazy_5.php?i=Udało się usunąć rekord o id:$_GET[id]");
  }
} else {
  header("location: ../bazy_5.php?i=Wartość id jest pusta");
}
?>