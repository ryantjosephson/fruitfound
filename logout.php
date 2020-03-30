<?php
  session_start();
  session_destroy();
  header("Location: https://fruitfound.herokuapp.com/login.php");
  exit;
?>