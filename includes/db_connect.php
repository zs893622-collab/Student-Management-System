<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "student_management";

// Create Connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check Connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Uncomment the line below if you want to test the connection
// echo "Database Connected Successfully!";

?>