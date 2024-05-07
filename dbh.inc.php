<?php

$dsn = "mysql:host=db;dbname=team_data";
$dbusername = "fouad";
$dbpassword = "password";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}