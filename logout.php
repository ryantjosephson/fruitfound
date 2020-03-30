<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["message"]);
$_SESSION["auth"] = false;
header("Location:index.php");
?>