<?php

// Connection
$conn = new mysqli("localhost", "root", "", "user_login");

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>