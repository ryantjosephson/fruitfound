<?php
require_once ('KLogger.php');

class Dao {

  private $host = 'us-cdbr-iron-east-04.cleardb.net';
  private $dbname = 'heroku_a416b59d1326088';
  private $username = 'b6e186ca6a829b';
  private $password = '80469f78';
  private $logger;

public function __construct() {
    $this->logger = new KLogger("log.txt", KLogger::WARN);
}

public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      $this->logger->LogError("Could not connect to the database: " . $e->getMessage());
      return null;
    }
    return $connection;
  }

//returns list of locations associated with a user
public function getLocations() {
	$conn = $this->getConnection();
	if(is_null($conn)){
		return;
		}
	try {
	return $conn->query("SELECT LocationID, LocationName, Street, City, State, Zip, Phone FROM userlistings WHERE userID = {$_SESSION['userID']}");
	} catch(Exception $e) {
		echo print_r ($e,1);
		exit;
	}
}

//returns locations matching zip codes.
public function search($zip) {
	$conn = $this->getConnection();
	if(is_null($conn)){
		return;
		}
	try {
	return $conn->query("SELECT LocationID, LocationName, Street, City, State, Zip, Phone FROM userlistings WHERE Zip = {$zip}");
	} catch(Exception $e) {
		echo print_r ($e,1);
		exit;
	}
}

//returns single location for editing purposes.
public function getLocation($ID) {
	$conn = $this->getConnection();
	if(is_null($conn)){
		return;
		}
	try {
	$locationquery = "SELECT LocationID, LocationName, Street, City, State, Zip, Phone FROM userlistings WHERE LocationID = :locationid";
	$q = $conn->prepare($locationquery);
	$q->bindParam(":locationid, $ID");
	$loc = $q->execute();
	return $loc;
	} catch(Exception $e) {
		echo print_r ($e,1);
		exit;
	}
}


//I can't get this function to work, I have it working in the editlocationhandler, but am unsure as to why when I copy the code here that it won't work.
//Any suggestions?
  public function editLocation($id, $location, $street, $city, $state, $zip, $phone) {
		$conn = $this->getConnection();
 	if(is_null($conn)){
		return;
		}
	try { 
		$sql = "UPDATE userlistings SET LocationName =:location, Street =:street, City =:city, State =:state, Zip =:zip, Phone =:phone WHERE LocationID =:locationid"; 
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":locationid", $id);
		$stmt->bindParam(":location", $location);
		$stmt->bindParam(":street", $street);
		$stmt->bindParam(":city", $city);
		$stmt->bindParam(":state", $state);
		$stmt->bindParam(":zip", $zip);
		$stmt->bindParam(":phone", $phone);
		$stmt->execute();
 	} catch(Exception $e) {
		echo print_r ($e,1);
		exit;
	} 
}
	  

  public function deleteLocation ($id) {
    $conn = $this->getConnection();
    $deleteQuery = "delete from userlistings where LocationID = :id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }
  

}
  ?>