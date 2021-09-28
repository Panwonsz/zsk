<?php
// echo "<pre>";
//   print_r($_POST);
// echo "</pre>";
if (!empty($_POST['imie']) && !empty($_POST['polygon'])) {
  switch ($_POST['polygon']) {
    case 'kwadrat':
      echo "KWADRAT";
      break;
    case 'prostokąt':
      echo "PROSTOKĄT";
      break;

    default:
      // code...
      break;
  }
}
else {
  echo "Wypełnij dane";
?>
<script type="text/javascript">
  history.back();
</script>
<?php
}
?>
