<?php
$host = getenv("MYSQLHOST");
$username = getenv("MYSQLUSER");
$password = getenv("MYSQLPASSWORD");
$dbname = getenv("MYSQLDATABASE");
$port = getenv("MYSQLPORT");

// Create connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
