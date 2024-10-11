<?php

# Bdd

$host = 'localhost';
$db_name = 'languages';
$username ='root';
$password = '';

try {
   $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $conn->exec("set names utf8");
   
}
 catch (PDOException $e) {
   die("Connection impossible : " . $e->getMessage());
}
