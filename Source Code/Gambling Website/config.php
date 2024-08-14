<?php
// config.php
$servername = "localhost";
$username = "root";
$password = "Cybersheild!23"; // Use the new password here
$dbname = "gambling_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
