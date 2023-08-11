<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'emp';

// Create a connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully!";
}
?>