<?php
// Database connection settings
$servername = "localhost";   // server name
$username   = "root";        // default username
$password   = "";            // default password
$dbname     = "students_db"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
