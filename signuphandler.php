<html>
<head></head>
<body>
<pre>
<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();

	$stmt = $connection->prepare("INSERT INTO Users(FirstName,LastName, UserName, Password) VALUES (?,?,?,?)");
	$stmt->bind_param("ssss", $first, $last, $user, $pass);
	
	$first = filter_var($_POST['firstname']);
	$last = filter_var($_POST['lastname']);
	$user = filter_var($_POST['username']);
	$pass = filter_var($_POST['password']);
	$stmt->execute();
	$useraccount = $connection->query("select * FROM users WHERE UserName = "$user"");
	print_r($useraccount);
	
 if ($useraccount['username'] == $user ){
    header("Location: https://fruitfound.herokuapp.com/login.php");
    exit;
} else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Account Creation Failed, please try again";
    header("Location: https://fruitfound.herokuapp.com/index.php");
	exit;
}
  ?> 
  </pre>
  </body>
  </html>