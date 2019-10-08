<!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
<?php
  if(!empty($_GET['country'])) {
    echo "ok";
  }else{
    ?>
    <form method="get">
        <input type="text" name="country" placeholder="Podaj kraj">
        <input type="submit" name="" value="Klik">
    </form>
    <?php
  }
     ?>
  </body>
  </html>
