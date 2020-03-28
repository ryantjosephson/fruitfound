<html>
<head></head>
<body>
<pre>
<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['username'])){
		
	$first = $_POST['firstname']; //!empty($_POST['firstname']) ? trim($_POST['firstname'] : null;
	$last = $_POST['lastname']; //!empty($_POST['lastname']) ? trim($_POST['lastname'] : null;	
	$user = $_POST['username'];//!empty($_POST['username']) ? trim($_POST['username'] : null;
	$pass = $_POST['password']; //!empty($_POST['password']) ? trim($_POST['password'] : null;

		
		$sql = "SELECT COUNT(UserName) AS num FROM users WHERE UserName = :username";
		$stmt = $connection->prepare($sql);
		
		$stmt->bindValue(':username', $user);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
	}
		if($row['num']>0){
			$_SESSION['message'] = "There is a duplicate Account";
			header("Location: https://fruitfound.herokuapp.com/index.php");
			exit;	
		}
		
		$passwordhash = hash("sha256", "pass" . "fKd93Vmz!k*dAv5029Vkf9$3Aa")
		
		$sql = "INSERT INTO users (FirstName, LastName, UserName, Password) VALUES (:firstname, :lastname, :username, :password)";
		$stmt = $connection->prepare($sql);
		$stmt->bindValue(':firstname', $first);
		$stmt->bindValue(':lastname', $last);
		$stmt->bindValue(':username', $user);
		$stmt->bindValue(':password', $passwordhash);
		
		$result = $stmt->execute();
		
		if($result){
			$_Session['message'] = "Account Created, please sign in";
			header("Location: https://fruitfound.herokuapp.com/index.php");
			exit;
		}else{
			$_SESSION['message'] = "Account Creation Failed, please try again";
			header("Location: https://fruitfound.herokuapp.com/index.php");
			exit;
		}

  ?> 
  </pre>
  </body>
  </html>