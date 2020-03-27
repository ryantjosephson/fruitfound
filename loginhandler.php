<?php
  session_start();

  $username = "r";
  $password = "j";

  if ($username == $_POST['username'] && $password == $_POST['password']) {
    $_SESSION['auth'] = true;
    header("Location: https://fruitfound.herokuapp.com/index.php);
    exit;
  } else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Invalid username or password";
    header("Location: https://fruitfound.herokuapp.com/login.php");
  }
  ?>