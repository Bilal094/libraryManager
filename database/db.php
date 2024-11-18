<?php

$servername = 'localhost';
$username = 'root';

$conn = new mysqli($servername, $username);

if ($conn->connect_error) 
{
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE libraryManager";

if ($conn->query($sql) === TRUE)
{
    echo "Database created succesfully";    
} else {
    echo "Database creation failed: " . $conn->error;
}

$conn->close();