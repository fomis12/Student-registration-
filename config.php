<?php
$servername = "sql101.infinityfree.com";   // InfinityFree SQL server
$username   = "if0_41174335";              // Your InfinityFree username
$password   = "your_db_password";          // Copy from MySQL Databases page
$dbname     = "if0_41174335_students_db";  // Your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
