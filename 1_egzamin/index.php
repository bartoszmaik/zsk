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

      mysqli_close($connect);
      ?>

      <form method="post">
        <select name="towar">
          <option value="c">Czekolada</option>
          <option value="g">Grześki</option>
          <option value="b">Baton</option>
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



        mysqli_close($connect);
      }

     ?>
  </body>
</html>
