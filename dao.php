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


public function getLocations() {
	$conn = $this->getConnection();
	if(is_null($conn)){
		return;
		}
	try {
		return $conn->query("SELECT LocationID, LocationName, Street, City, State, Zip, Phone FROM userlistings");
	} catch(Exception $e) {
		echo print_r ($e,1);
		exit;
	}
}
}
  ?>