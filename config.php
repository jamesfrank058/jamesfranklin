<?php
$servername = "localhost";  // Change it if needed
$username = "root";         // Default username for PHPMyAdmin
$password = "";             // Add password if set
$dbname = "portifolio_db";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $portifolio_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
