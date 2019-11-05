<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Bartosz Maik</title>
  </head>
  <body>
<form method="post">
  <input type="text" name="rodzina">
  <input type="submit" value="Przycisk">
</form>

    <?php
///Użytkownik podaje z klawiatury ilość osób w rodzinie po prawidłowym podaniu liczby z przedziału <1,70>
//  Na ekranie wyświetli się tyle pól numerycznych ile jest osób w rodzinie. Napisz funkcję, która obliczy
//średni wiek, najmłodszą i najstarszą osobę z rodziny i wyświetli w liście punktowanej w formacie:
//Średni wiek: ...lat
// Najmłodsza osoba ma ...lat
//Najstarsza osoba ma ...lat

if(!empty($_POST['rodzina'])) {
 $rodzina = $_POST['rodzina'];
  if($rodzina <= 70 && $rodzina >= 1){
    echo "<hr><form method=\"post\">";

    for($i=0; $i<$rodzina; $i++){
      echo "<input type=\"number\" name=\"rodzina$i\"><br>";
    }
    $suma = 0;

      echo "<input type=\"submit\" value=\"Sprawdź\"></form>";

      for($i=0; $i < $rodzina; $i++){
        $suma += $_POST["rodzina$i"];
      }

      echo $suma;
  }
}


     ?>
  </body>
</html>
