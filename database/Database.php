<?php

class Database
{
    protected string $servername;
    protected string $username;
    protected $conn;
    protected $sql;

    static function connectDatabase(string $servername, string $username)
    {
        $conn = new mysqli($servername, $username);
        if ($conn->connect_error)
        {
            die("Connection to database failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }

    static function createDatabase(string $dbname, $conn)
    {
        $sql = "CREATE DATABASE IF NOT EXISTS libraryManager";
        if ($conn->query($sql) === TRUE)
        {
            Database::createUserTable($conn);
        } else {
            echo "Database creation failed: " . $conn->error;
        };
    }

    static function createUserTable($conn)
    {
        $database = $conn->select_db("libraryManager");
        $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(50) NOT NULL UNIQUE,
                password VARCHAR(50) NOT NULL,
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
        if ($conn->error)
        {
            echo "User table creation failed: " . $conn->error;
        } 
    }
}