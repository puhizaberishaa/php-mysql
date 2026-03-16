<?php
$host = "localhost";
$db ="my_database1";
$user ="root";
$pass ="root";

try{
    $pdo = new PDO("mysql:$host, dbname:$db, $user, $pass")
    $sql ="CREATE TABLE users (id INT(6) NOT NULL AUTO_INCREAMT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR (50) NOT NULL";

    $pdo->exec($sql);
    echo "Table created succesfully";
}catch(Exeptiom $e){
    echo "Error creating table: ".$e->getMessage();
}
?>