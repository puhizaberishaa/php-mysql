<?php
session_start();

$user ='root';
$password ='root';
$host ='local_host';
$db ='module_10';

try{
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    //set the PDO error mode to exeption
    $pdo->setAttribute(PDO: :ATTR_ERRMODE, PDO: :ERRMODE_EXEPTION);
}catch (PDOExeption $e) {
    die("Connection falied:" . $e->getMessage());
}
?>