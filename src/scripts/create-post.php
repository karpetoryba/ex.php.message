<?php
session_start();

$username = $_POST['username']; 
$email = $_POST['email']; 
$message = $_POST['message']; 

$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");

$createRequest = $connectDataBase->prepare("INSERT INTO users (username, email, message) VALUES (:username, :email, :message)");
$createRequest->bindParam(':username', $username);
$createRequest->bindParam(':email', $email);
$createRequest->bindParam(':message', $message);

$createRequest->execute();

header('Location: ../index.php');
exit();
?>