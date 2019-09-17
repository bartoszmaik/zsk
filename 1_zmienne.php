<?php
  $number = 1;
  $_number = 1;
  $imię = 1;
  $Imię = 1;
  echo "$number";
  echo '$number';

  //typy danych
  $prawda = true;
  $falsz = false;

  //integer

  $calkowita = 100;
  $szesnastkowa = 0xA;
  echo "<br>$szesnastkowa";

  $osemkowa = 010;
  echo '<br>'.$osemkowa;

  $binarna = 0b1010;
  echo '<br>',$binarna;

//składnia heredoc
  $imie = 'Janusz';
  $wiek = 18;

  $napis = <<< TEKST
  <hr>
    Masz na imię: $imie<br>
    Twój wiek: $wiek
    <hr>
 TEKST;
  echo $napis;

  //drugi sposóbug
  echo <<< T
  Janusz 123 dasdas
  T;

//Składnia nowdoc - nie interpretuje zmiennych
$x = 'Anna';

echo <<< 'K'
    <hr>Imię: $x
K;


echo "Zmienna o nazwie \$x ma wartość $x";
?>
