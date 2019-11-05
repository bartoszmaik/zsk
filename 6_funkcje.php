<?php
  function value($a){
    if ($a < 0) {
      return 'ujemna';
    }else if ($a == 0){
      return 'zero';
    }else {
      return 'dodatnia';
    }
  }

echo value(10); //dodatnia;

function getValue():int{
  return 20.99;
}

echo getValue(); //20

//zasięg zmiennych

$x = 10; //zmienna globalna
function Show(){
  echo "Wartość zmiennej \$x wynosi: <br>";
  echo $GLOBALS['x'];
}
Show();


$y = 10; //globalna

function Show1(){
  global $y;
  echo "<br>Wartość zmiennej \$y wynosi: $y";
  echo $GLOBALS['x'];
}
echo "<hr>";
show1();

#######################

function sum(){
  $number = 10;
  echo "\$number wynosi $number<br>";
  $number += 10;
}

sum(); //10
sum(); //10



//argumenty
function add($x, $y = 1){
  return $x + $y;
}


$z = 5;

echo add(2); //3
echo add(2, 4); //6
echo add(2, $z); //7


#######################
//argumenty i typy danych

function multi(float $x, int $y){
  return $x * $y;
}

echo multi(5.21,3), '<br>';










 ?>
