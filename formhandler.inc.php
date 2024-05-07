<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $cgpa = $_POST["cgpa"];

    try {
        require_once "dbh.inc.php";
        
        $query = "INSERT INTO students () VALUES (?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$id, $name, $age, $cgpa]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}