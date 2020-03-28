<?php
	session_start();
	
	$_SESSION['auth'] = false;
	$_SESSION['userID'] = null;
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	$stmt = $connection->prepare("SELECT * FROM users WHERE UserName = ? ");
	$stmt->execute([$_POST['username']]);
	$user = $stmt->fetch();
	$password = $user["Password"];
	$userID = $user["UserID"];

 if ($user && $_POST['password'] = $user['Password']) {
    $_SESSION['auth'] = true;
	$_SESSION['userID'] = $userID;
    header("Location: https://fruitfound.herokuapp.com/account.php");
    exit;
} else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Invalid username or password ";
    header("Location: https://fruitfound.herokuapp.com/login.php");
	exit;
}
  ?> 