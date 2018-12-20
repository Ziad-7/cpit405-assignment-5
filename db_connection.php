<?php

$servername = "localhost";
$username = "ziad7";
$password = "";
$database = "images";

$conn = new mysqli($servername, $username, $password, $database);

// check the connection
if ($conn->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ");
}

?>
