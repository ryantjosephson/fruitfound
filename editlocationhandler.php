<?php

<html>
<head></head>
<body>
<pre>
<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['LocationName'])){
		
	$location = $_POST['locationname']; //!empty($_POST['firstname']) ? trim($_POST['firstname'] : null;
	$street = $_POST['street']; //!empty($_POST['lastname']) ? trim($_POST['lastname'] : null;	
	$city = $_POST['city'];//!empty($_POST['username']) ? trim($_POST['username'] : null;
	$state = $_POST['state']; //!empty($_POST['password']) ? trim($_POST['password'] : null;
	$zip = $_POST['zip']; //!empty($_POST['password']) ? trim($_POST['password'] : null;
	$phone = $_POST['phone']; //!empty($_POST['password']) ? trim($_POST['password'] : null;	
	
	$sql = "UPDATE  userlistings SET LocationName = {$location}, Street = {$street}, City = {$city}, State = {$state}, Zip = {$zip}, Phone = {$phone}"; 
		$stmt = $connection->prepare($sql);
		$result = $stmt->execute();
	}	
		if($result){ 
			$_SESSION['message'] = "Location has been updated.";
			header("Location: https://fruitfound.herokuapp.com/account.php");
			exit;
		}else{
			$_SESSION['message'] = "Error found, location not updated.";
			header("Location: https://fruitfound.herokuapp.com/account.php");
			exit;
		}

  ?> 
  </pre>
  </body>
  </html>