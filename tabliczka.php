<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Bartosz Maik</title>
  </head>
  <body>
    <table>
     <?php
      $ile = 10;
      $row = 1;
      $col = 1;
      do{
        echo "<tr><td>$row</td>";
        $row++;
        do{
          echo "<td>$col</td>";
          $col++;
        }while($col<=$ile);

        echo "</tr>";
      }
      while($row<=$ile);
      ?>
    </table>
  </body>
</html>
