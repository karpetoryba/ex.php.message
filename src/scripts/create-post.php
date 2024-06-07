<?php
$username = $_POST['username']; 
$email = $_POST['email']; 
$message = $_POST['message']; 
$assessment = $_POST['assessment'];

$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");

$createRequest = $connectDataBase->prepare("INSERT INTO users (username, email, message, assessment) VALUES (:username, :email, :message, :assessment)");
$createRequest->bindParam(':username', $username);
$createRequest->bindParam(':email', $email);
$createRequest->bindParam(':assessment', $assessment);
$createRequest->bindParam(':message', $message);

$createRequest->execute();

header('Location: ../post.php');