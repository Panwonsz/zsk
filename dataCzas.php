<?php
  // date()
  echo "dzień-miesiąc-rok: ".date('d-m-Y')."<br>";
  echo "dzień-miesiąc-rok: ".date('m-d-Y')."<br>";
  echo "dzień-miesiąc-rok: ".date('d-M-Y')."<br>";
  echo "dzień-miesiąc-rok: ".date('d-F-Y')."<br>";

  setlocale(LC_ALL, 'polish');
  echo strftime('%d %8 %Y')."<br>";

  echo date('G:i:s')."<br>";
  echo date('G:i:sa')."<br>";
  echo date('H:i:s')."<br>";
?>
<script type="text/javascript">
  setTimeout(function(){
    window.location.reload();
  },1000)
</script>
<?php
  //getdate()
  $data = getdate();
  // echo $data;
  echo "<pre>";
    print_r($data);
  echo "</pre>";

  echo $data['wday']."<br>";
  echo $data['yday']."<br>";
  echo date('L')."<br>";

  //maketime()
  $today=mktime(0,0,0,date('m'),date('d'),date('Y'));
  echo $today."<br>";

  //Lata od 1 stycznia 1970
  $year=$today/(60*60*24*365);
  echo (int)$year,"<br>";

  //poprzedni rok
  $today=mktime(0,0,0,date('m'),date('d'),date('Y')-1);
  $year=$today/(60*60*24*365);
  echo (int)$year," lat<br>";
?>
