<?php
// Database configuration
$dbHost     = "127.0.0.1";
//$dbUsername = "staaucgg_tncon28";
$dbUsername = "root";
//$dbPassword = "Newdawn1";
$dbPassword = "";
$dbName     = "negbeneborAdministr";

// Create database connection
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>