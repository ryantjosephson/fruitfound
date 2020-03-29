<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	$connection = $dao->getConnection();
	
	if(isset($_POST['locationname'])){
	
	$locationid = $_POST['locationid']; //!empty($_POST['firstname']) ? trim($_POST['firstname'] : null;
	$location = $_POST['locationname']; //!empty($_POST['firstname']) ? trim($_POST['firstname'] : null;
	$street = $_POST['street']; //!empty($_POST['lastname']) ? trim($_POST['lastname'] : null;	
	$city = $_POST['city'];//!empty($_POST['username']) ? trim($_POST['username'] : null;
	$state = $_POST['state']; //!empty($_POST['password']) ? trim($_POST['password'] : null;
	$zip = $_POST['zip']; //!empty($_POST['password']) ? trim($_POST['password'] : null;
	$phone = $_POST['phone']; //!empty($_POST['password']) ? trim($_POST['password'] : null;	
	
	$dao->$editLocation($_POST['locationid'],$_POST['locationname'],$_POST['street'],$_POST['city'],$_POST['state'],$_POST['zip'],$_POST['phone']);
	/* $sql = "UPDATE  userlistings SET LocationName = :location, Street = :street, City = :city, State = :state, Zip = :zip, Phone = :phone WHERE LocationID = :locationid"; 
	$stmt = $connection->prepare($sql);
	$stmt->bindParam(":location", $location);
	$stmt->bindParam(":street", $street);
	$stmt->bindParam(":city", $city);
	$stmt->bindParam(":state", $state);
	$stmt->bindParam(":zip", $zip);
	$stmt->bindParam(":phone", $phone);
	$stmt->bindParam(":locationid", $locationid);
	$stmt->execute(); */
	$_SESSION['message'] = "Location has been updated.";
	header("Location: https://fruitfound.herokuapp.com/account.php");
	exit;
	}else {
		$_SESSION['message'] = "Location has not been updated.";
		header("Location: https://fruitfound.herokuapp.com/account.php");
		exit;
	}

  ?> 
