<?php
  session_start();
  unset($_SESSION['name']);
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Strona trzecia<hr>
    Witamy <?php echo $_SESSION['name']; ?> na stronie!
    <a href="./9_sesje.php">Strona startowa</a>
  </body>
</html>
