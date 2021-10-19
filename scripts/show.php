<?php
  require_once "./function.php";
  show();
  echo "<br>".show1();
  if (!empty($_POST['name'])) {
    echo "<br>Imię: ".showName($_POST['name']);
  }
  if (!empty($_POST['name'])) {
    echo "<br>String: ".string_validate($_POST['name'],6);
  }
?>
