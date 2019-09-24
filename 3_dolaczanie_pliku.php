<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
Plik główny <hr>
<?php
  //include('./plik1.php');
//  include_once('./plik1.php'); //Jak istnieje to nie podpina

  require('./plik1.php');
  require_once('./plik1.php'); //Jak istnieje to nie podpina

  ?>
  <hr>
Strona główna - dalsza część
</body>
</html>
