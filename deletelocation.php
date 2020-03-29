  
<?php
  require_once 'dao.php';
  $dao = new Dao();
  $logger = new KLogger('log.txt', KLogger::DEBUG);
  $logger->LogInfo("Deleting location with ID: [{$_GET['id']}]");
  $dao->deleteLocation($_GET['id']);
  header("Location: https://fruitfound.herokuapp.com/account.php");
  exit;
  ?>