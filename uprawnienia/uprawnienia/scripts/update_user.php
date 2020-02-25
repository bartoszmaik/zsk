<?php
session_start();
  require_once('./connect.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

  }
  $sql = "UPDATE `user` WHERE `user`.`id` = '$id'";

  //if (mysqli_query($conn, $sql)) {
    header('location: ../');
  //}
 ?>
