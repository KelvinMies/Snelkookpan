<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


require_once 'conn.php';

$query = "INSERT INTO users (username, password) VALUES (:username, :password)";   

$statement = $conn->prepare($query);
$statement->execute([
    
    ":username" => $username,
    ":password" => password_hash($password, PASSWORD_DEFAULT)
]);

header("location: ../logout.php");
?>