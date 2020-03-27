<?php
	session_start();
	require_once ('dao.php');
//	$connection = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_a416b59d1326088', 'b6e186ca6a829b', '80469f78');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	$stmt = $connection->prepare("SELECT * FROM users WHERE UserName = ? ");
	$stmt->execute([$_POST['username']]);
	$user = $stmt->fetch();

if ($user && password_verify($_POST['password'], $user['password'])) {
    $_SESSION['auth'] = true;
    header("Location: https://fruitfound.herokuapp.com/index.php");
    exit;
} else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Invalid username or password";
    header("Location: https://fruitfound.herokuapp.com/login.php");
}
  ?>