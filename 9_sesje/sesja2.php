<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Strona druga<hr>
    Witamy <?php echo $_SESSION['name']; ?> na stronie!
    <a href="./9_sesje.php">Strona 3</a>
  </body>
</html>
