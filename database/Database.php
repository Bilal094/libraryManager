<?php

class Database
{
    protected string $servername, $username;
    protected $conn, $sql;

    static function connectDatabase(string $servername, string $username)
    {
        try {
            $conn = new PDO("mysql:host=$servername", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS libraryManager";
            $conn->exec($sql);
            Database::createUserTable($conn);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    static function createUserTable($conn)
    {
        try {
            $conn->query("USE libraryManager");
            $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(50) UNIQUE NOT NULL,
            password VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            $conn->exec($sql);
            $conn = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}