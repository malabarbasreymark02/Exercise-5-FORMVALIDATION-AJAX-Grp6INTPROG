<?php
$severname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "dbprofilewebsite";

$conn = mysqli_connect($severname, $dbusername, $dbpassword, $dbName);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}

/* try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?> */