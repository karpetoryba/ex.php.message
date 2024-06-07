<?php
session_start();

$username = $_POST['username']; 
$email = $_POST['email']; 
$message = $_POST['message']; 


$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");


$createRequest = $connectDataBase->prepare("INSERT INTO users (username, email, id, message) VALUES (:username, :email,:id,:message)");
$createRequest->bindParam(':username', $username);
$createRequest->bindParam(':email', $email);

$createRequest->bindParam(':message', $message);

$createRequest->bindParam(':id', $_SESSION['id']);

$createRequest->execute();

header('Location: ../post.php');