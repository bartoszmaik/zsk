<?php
session_start();
unset($_SESSION['error']);
  if (isset($_POST['button']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];

    require_once('./connect.php');

    $sql = "INSERT INTO `user`( `name`, `surname`, `birthday`) VALUES ('$name', '$surname', '$birthday')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
  }else $_SESSION['error'] = "Wypełnij wszystkie pola";
  header('location: ../');
 ?>