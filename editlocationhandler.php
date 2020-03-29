<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['locationname'])){
	
	$locationid = $_POST['locationid']; 
	$location = $_POST['locationname']; 
	$street = $_POST['street']; 
	$city = $_POST['city'];
	$state = $_POST['state']; 
	$zip = $_POST['zip'];
	$phone = $_POST['phone']; 
	
	//This function is not working for some unknown reasons.
	//$dao->$editLocation($_POST['locationid'],$_POST['locationname'],$_POST['street'],$_POST['city'],$_POST['state'],$_POST['zip'],$_POST['phone']);
	$sql = "UPDATE  userlistings SET LocationName = :location, Street = :street, City = :city, State = :state, Zip = :zip, Phone = :phone WHERE LocationID = :locationid"; 
	$stmt = $connection->prepare($sql);
	$stmt->bindParam(":location", $location);
	$stmt->bindParam(":street", $street);
	$stmt->bindParam(":city", $city);
	$stmt->bindParam(":state", $state);
	$stmt->bindParam(":zip", $zip);
	$stmt->bindParam(":phone", $phone);
	$stmt->bindParam(":locationid", $locationid);
	$stmt->execute(); 
	$_SESSION['message'] = "Location has been updated.";
	header("Location: https://fruitfound.herokuapp.com/account.php");
	exit;
	}else {
		$_SESSION['message'] = "Location has not been updated.";
		header("Location: https://fruitfound.herokuapp.com/account.php");
		exit;
	}

  ?> 
