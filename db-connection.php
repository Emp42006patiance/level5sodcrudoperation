<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "level5sodoperation";

// Create connection
$db_connection = new mysqli($host, $user, $password, $database);

// Check connection
if ($db_connection->connect_error) {
    echo "❌ Unit testing failed: " . $db_connection->connect_error;
} 
?>
