<?php
// Show PHP errors to debug connection issues
ini_set('display_errors', 1);
error_reporting(E_ALL);

// MAMP default MySQL settings:
$host = 'localhost';
$user = 'root';
$password = 'root';  // MAMP default password
$dbname = 'demo';
$port = 8889;         // MAMP MySQL port

// Connect to MySQL using MAMP settings
$connection = mysqli_connect($host, $user, $password, $dbname, $port);

// Check for connection success
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
