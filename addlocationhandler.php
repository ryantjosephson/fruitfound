<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['locationname'])){
	
	$location = $_POST['locationname']; //!empty($_POST['firstname']) ? trim($_POST['firstname'] : null;
	$street = $_POST['street']; //!empty($_POST['lastname']) ? trim($_POST['lastname'] : null;	
	$city = $_POST['city'];//!empty($_POST['username']) ? trim($_POST['username'] : null;
	$state = $_POST['state']; //!empty($_POST['password']) ? trim($_POST['password'] : null;
	$zip = $_POST['zip']; //!empty($_POST['password']) ? trim($_POST['password'] : null;
	$phone = $_POST['phone']; //!empty($_POST['password']) ? trim($_POST['password'] : null;	
	$userid= $_SESSION['userID'];

	$sql = "INSERT INTO userlistings (LocationName, Street, City, State, Zip, Phone, UserID) VALUES (:location, :street, :city, :state, :zip, :phone, :userid)"; 
	$stmt = $connection->prepare($sql);
	$stmt->bindParam(":location", $location);
	$stmt->bindParam(":street", $street);
	$stmt->bindParam(":city", $city);
	$stmt->bindParam(":state", $state);
	$stmt->bindParam(":zip", $zip);
	$stmt->bindParam(":phone", $phone);
	$stmt->bindParam(":userid", $userid);
	$stmt->execute();
	$_SESSION['message'] = "Location has been added.";
	header("Location: https://fruitfound.herokuapp.com/account.php");
	exit;
	}else {
		$_SESSION['message'] = "Location has not been added.";
		header("Location: https://fruitfound.herokuapp.com/account.php");
		exit;
	}

  ?> 
