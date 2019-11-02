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
      $suma = 0;
      do{
        $col=1;
        if($row==$col) {echo "<td bgcolor=\"red\">1</td>"; $suma+=1;}
        else echo "<tr><td>$row</td>";
        $col = 2;
        do{
          $wart = $row*$col;
          if($row==$col) {echo "<td bgcolor=\"red\">$wart</td>"; $suma+=$wart;}
          else echo "<td>$wart</td>";
          $col++;
        }while($col<=$ile);
        echo "</tr>";
        $row++;
      }
      while($row<=$ile);
      echo "suma wartości z przekątnej: $suma";
        }

      ?>

    </table>
  </body>
</html>
