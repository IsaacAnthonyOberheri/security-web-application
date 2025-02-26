<?php
// Database configuration
$dbHost     = "127.0.0.1";
//$dbUsername = "blocmulr_crypt";
$dbUsername = "root";
//$dbPassword = "encrypt2021";
$dbPassword = "";
$dbName     = "protect_secure_tech";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$con=mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName) or die ('sorry it cannot connect to database');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
