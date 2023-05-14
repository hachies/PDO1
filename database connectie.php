<?php

$host = '127.0.0.1';
$db = 'winkel';
$user = 'root';
$pass = 'Hangho12!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=winkel", $user, $pass);
    echo "verbonden met ($db).";
} catch (PDOException $e) {
    echo "verbinding mislukt: " . $e->getMessage();
 
}


?>