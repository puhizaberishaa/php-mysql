<?php
include 'config.php';

$id=$_POST['id'];
$name= $_POST['name'];
$price= $_POST['price'];
$description= $_POST['description'];

$conn->query("UPDATE products SET
name='$name', price='$price', description='$description'
WHERE id=$id");

header("Location: index.php");
?>