<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['locationname']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zip']) && isset($_POST['phone'])){
	
	$location = htmlspecialchars($_POST['locationname']);
	$street = htmlspecialchars($_POST['street']);
	$city = htmlspecialchars($_POST['city']);
	$state = htmlspecialchars($_POST['state']);
	$zip = htmlspecialchars($_POST['zip']);
	$phone = htmlspecialchars($_POST['phone']);
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
		$_SESSION['message'] = "Location has not been added. Missing fields.";
		header("Location: https://fruitfound.herokuapp.com/account.php");
		exit;
	}

  ?> 
