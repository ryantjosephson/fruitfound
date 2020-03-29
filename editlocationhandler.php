<?php
	session_start();
	require_once ('dao.php');
	$dao = new Dao();
	
	if(isset($_POST['locationname'])){
		$locationid = $_POST['locationid']; 
		$location = $_POST['locationname']; 
		$street = $_POST['street']; 
		$city = $_POST['city'];
		$state = $_POST['state']; 
		$zip = $_POST['zip']; 
		$phone = $_POST['phone'];
		
		//$dao->$updateLocation($locationid, $location, $street, $city, $state, $zip, $phone);
		  $dao->$updateLocation($_POST['locationid'],$_POST['locationname'],$_POST['street'],$_POST['city'],$_POST['state'],$_POST['zip'],$_POST['phone']);
		header("Location: https://fruitfound.herokuapp.com/account.php");
		exit;
	}else {
		$_SESSION['message'] = "Location has not been updated.";
		header("Location: https://fruitfound.herokuapp.com/account.php");
		exit;
	}

  ?> 
