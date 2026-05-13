<?php
include 'config.php';

$name=$POST['name'];
$price =$_POST['price'];
$description=$_POST['description'];

$conn->query("INSERT INTO products (name,price,description");
VALUES ('$name', '$price', '$description')");

 header("Location: index.php");
?>