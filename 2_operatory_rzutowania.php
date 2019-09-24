<?php

//operatory rzutowania
//bool int float string array object unset
$text = '123asd';
$x = (int)$text;

$text1 = -1;
$x1 = (bool)$text1; //tylko 0 = false

$text2 = 10;
$x2 = (unset)$text2; //tylko 0 = false

echo $x;
echo $x1;
echo $x2;
echo gettype($x2);


//rozmiar typu integer

echo PHP_INT_SIZE,'<br>'; //8

//kontrola typu zmiennych
$x = 10;
echo is_int($x);
echo is_string($x);
echo is_bool($x);
echo is_float($x);
echo is_null($x), '<hr>';

$w;
echo @gettype($w);



//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_SERVER['SERVER_PORT'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['SERVER_PORT'];
echo $_SERVER['SERVER_PROTOCOL'];
echo $_SERVER['DOCUMENT_ROOT'];

$lokalizacjaPliku = $_SERVER['DOCUMENT_ROOT'];
$lokalizacjaPliku .= $_SERVER['SCRIPT_NAME'];

echo $lokalizacjaPliku;


//stałe
//nazwy z dużych liter!
define ('NAZWISKO','Kowal<hr>');
echo NAZWISKO;

define('imie','Janusz');
echo imie;

define('WIEK','18', true); //do wersji 8 php tue - wielkość liter bez znaczenia, domyślnie false
echo wiek,'<hr>';

echo PHP_VERSION; //7.39
echo gettype(PHP_VERSION);
$ver = PHP_VERSION;
if($ver > 5.6) {
  echo "Nowy PHP";}
else
{
  echo "Stara wersja PHP";}









?>
