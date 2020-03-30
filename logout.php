<?php
  session_start();
  $_SESSION['auth']=false;
  session_destroy();
  header("Location: https://fruitfound.herokuapp.com/index.php");
  exit;
?>