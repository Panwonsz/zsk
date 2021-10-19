<?php
  function show(){
    echo "test";
  }

  function show1(){
    return "show 1";
  }

  function showName($name){
    return $name;
  }
  function string_validate($name, $len){
    if (strlen($name)>$len) {
      $name = substr($name, 0, $len);
    }
    $name = ucfirst(mb_strtolower(preg_replace('/\s+/', '', $name)));
    return $name;
  }
  //Zdefinuj funkcję o nazwie stringvalidate, która wykona następujące działania:
  //1) usunie białe znaki
  //2) Zamieni pierwszą literę na dużą
  //3) Od drugiej litery małe znaki
  //4) Drugi parametr będzie określał długość string_validate
?>
