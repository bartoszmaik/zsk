<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>



    <?php
      //skrypt 1
      $connect = mysqli_connect("localhost", "root", "", "sklep");

      $sql = "SELECT nazwa FROM `towary` WHERE promocja=1";

      mysqli_set_charset($connect, 'utf8');
      $result = mysqli_query($connect, $sql);

      echo "<ul>";
      while ($row = mysqli_fetch_assoc($result)) {
      //  echo "x<br>"; - powtorzenia petli = ilosc kolumn
        echo "<li>",$row["nazwa"],"</li>";
      }
      echo "</ul>";


      ?>

      <form method="post">
        <select name="towar">
            <?php

              $sql = "SELECT nazwa FROM towary";
              $result = mysqli_query($connect,$sql);

              while ($option = mysqli_fetch_assoc($result)){

                echo "<option value=\"$option[nazwa]\">$option[nazwa]</option>";
              }

            ?>
        </select>
        <input type="submit" name="button" value="WYBIERZ">
      </form>

      <?php
      //skrypt 2
      if (isset($_POST["towar"])){
        $towar = $_POST["towar"];

        switch ($towar) {
          case 'c': $towar = "Czekolada"; break;
          case 'g': $towar = "Grześki"; break;
          case 'b': $towar = "Baton"; break;
        }



        $connect = mysqli_connect("localhost", "root", "", "sklep");
        $sql = "SELECT 'cena' FROM `towary` WHERE 'nazwa' = 'czekolada'";
        mysqli_set_charset($connect, 'utf8');
        $result = mysqli_query($connect, $sql);



        $row = mysqli_fetch_assoc($result);

        $promocja = round($row["cena"] * 0.85, 2);
        echo $promocja;

      }

      echo "<table><tr><th>Nazwa</th><th>Cena</th><th>Promocja</th><th>Dostawca</th></tr>";
      $sql = "SELECT t.nazwa as tnazwa,d.nazwa as dnazwa, cena, promocja, idDostawcy FROM towary AS t JOIN dostawcy AS d ON t.idDostawcy = d.id";
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $cena = $row["cena"];
        if($row["promocja"]==1)
          $cena2 = $cena *0.85;
          else $cena2 = $cena;
        echo "<tr><td>".$row["tnazwa"]."</td><td>".$cena."</td><td>".$cena2."</td><td>".$row["dnazwa"]."</td></tr>";
      }

      echo "</table>";

mysqli_close($connect);
     ?>
  </body>
</html>
