<html>
<head></head>
<body>
<pre>
<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	
	try{
		$connection = $dao->getConnection();
	
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$first = filter_var($_POST['firstname']);
		$last = filter_var($_POST['lastname']);
		$user = filter_var($_POST['username']);
		$pass = filter_var($_POST['password']);
	
		$stmt = $connection->prepare("INSERT INTO users(FirstName, LastName, UserName, Password) VALUES (?,?,?,?)");
		if($stmt->execute([$first, $last, $user, $pass])){
		header("Location: https://fruitfound.herokuapp.com/login.php");
		exit;
		}else{
			    $_SESSION['auth'] = false;
		$_SESSION['message'] = "Account Creation Failed, please try again";
		header("Location: https://fruitfound.herokuapp.com/index.php");
		exit;
		}
	}	
	catch(PDOException $e){
		echo $e->getMessage);
	}
  ?> 
  </pre>
  </body>
  </html>