<html>
<head></head>
<body>
<pre>
<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['submit'])){
		
		$user = !empty($_POST['username']) ? trim($_POST['username'] : null;
		$pass = !empty($_POST['password']) ? trim($_POST['password'] : null;
		
		$sql = "SELECT COUNT(username) AS num from users WHERE UserName = :username";
		$stmt = $connection->prepare($sql);
		
		$stmt->bindValue(':username', $username);
		$stmt->execute();
		$row = $stmt->fetchPDO::FETCH_ASSOC);
		
		if($row['num']>0){
			$_SESSION['auth'] = false;
			$_SESSION['message'] = "That user already exists";
			header("Location: https://fruitfound.herokuapp.com/index.php");
			exit;
		}
		
	
	
	
/* 	$first = filter_var($_POST['firstname']);
	$last = filter_var($_POST['lastname']);

	
	$stmt = $connection->prepare("INSERT INTO users(FirstName, LastName, UserName, Password) VALUES (?,?,?,?)");
	$stmt->execute([$first, $last, $user, $pass])
	
	
	
	
		header("Location: https://fruitfound.herokuapp.com/login.php");
		exit;
		}else{
		$_SESSION['auth'] = false;
		$_SESSION['message'] = "Account Creation Failed, please try again";
		header("Location: https://fruitfound.herokuapp.com/index.php");
		exit;
		}
	}	 */

  ?> 
  </pre>
  </body>
  </html>