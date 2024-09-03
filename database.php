<?php
$servername = "localhost"; // Usually "localhost" unless your hosting provider specifies otherwise
$username = "edugnajg_superadmin"; // Your MySQL username
$password = "GODofCoding"; // Your MySQL password
$database = "edugnajg_eg_xrst"; // The name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>



