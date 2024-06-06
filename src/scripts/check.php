<?php
$username = $_POST['username'];
// Connect to db with PDO
$connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
// Prepare request
$request = $connectDataBase->prepare("SELECT * FROM users WHERE username = :username");
// Bind params
$request->bindParam(':username', $username);
// Execute request
$request->execute();
// Fetch data from the result
$result = $request->fetch(PDO::FETCH_ASSOC);