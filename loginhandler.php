<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	$stmt = $connection->prepare("SELECT * FROM users WHERE UserName = ? ");
	$stmt->execute([$_POST['username']]);
	$user = $stmt->fetch();
	$password = $user["Password"];

 if ($user && $_POST['password'] = $user['Password']) {
    $_SESSION['auth'] = true;
    header("Location: https://fruitfound.herokuapp.com/account.php");
    exit;
} else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Invalid username or password ";
    header("Location: https://fruitfound.herokuapp.com/login.php");
}
  ?> 