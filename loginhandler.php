<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	$stmt = $connection->prepare("SELECT * FROM users WHERE UserName = ? ");
	$stmt->execute([$_POST['username']]);
	$user = $stmt->fetch();
	?>
	<pre>
	<?php
	print_r($user)?></pre>
	

/* if ($user && password_verify($_POST['password'], $user['password'])) {
    $_SESSION['auth'] = true;
    header("Location: https://fruitfound.herokuapp.com/index.php");
    exit;
} else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Invalid username or password";
    header("Location: https://fruitfound.herokuapp.com/login.php");
}*/
  ?> 