<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


require_once 'conn.php';

$query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";   

$statement = $conn->prepare($query);
$statement->execute([
    
    ":username" => $username,
    ":email" => $email,
    ":password" => password_hash($password, PASSWORD_DEFAULT)
]);

header("location: ../logout.php");
?>