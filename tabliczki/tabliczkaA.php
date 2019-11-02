<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Bartosz Maik</title>

    <style>
      td{border: solid 1px black;
        text-align: center;
        height:50px;
        width:50px;}
    </style>
  </head>
  <body>
    <form method="post">
      <input type="number" name="ile" placeholder="Podaj rozmiar"><br><br>
      <input type="submit" name="button" placeholder="Licz"><hr>
    </form>

    <table>
     <?php
     if(!empty($_POST['ile'])){
      $ile = $_POST['ile'];
      $row = 1;

      do{
        echo "<tr><td>$row</td>";
        $col = 2;
        do{
          $wart = $row*$col;
          echo "<td>$wart</td>";
          $col++;
        }while($col<=$ile);
        echo "</tr>";
        $row++;
      }
      while($row<=$ile);
        }
      ?>

    </table>
  </body>
</html>
