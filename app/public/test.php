<?php

$host = "mariadb";
$dbName = 'app';
$username = "userapp";
$password = "password";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = 'SELECT NOW() AS time';
$result = $pdo->query($sql);
foreach ($result as $row) {
    echo $row['time'] . '<br>';
}
