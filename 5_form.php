<!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>

    <form method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="number" name="age" placeholder="Podaj wiek"><br><br>
      <input type="submit" name="button" placeholder="Zatwierdź"><hr>
  </body>
<?php

if(!empty($_POST['name']) && !empty($_POST['age'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];


#Zabezpiecz formularz przed podaniem błędnych danych tj. białe znaki, ogranicz ilość znaków do 10 dla imienia, piewsza litera w imieniu ma być duża a pozostale małe. Wyświetl dane w formacie:
# Przed poprawą:...
# Po zmianie: ...
# Dane poprawione wyświetl w tabeli z nagłówkami o nazwach imie i wiek
echo "Przed poprawą: ".$name."<br".$age."<br><br>";

$name = str_replace(' ','',$name);
$name = ucfirst(strtolower(substr(trim ($name), 0,10)));



echo <<< TABLE
Po zmianie: \n
<table>
  <tr>
    <th>Imię</th>
    <th>Wiek</th>
  </tr>
  <tr>
    <td>$name</td>
    <td>$age</td>
  </tr>
  </table>
TABLE;
}




?>
