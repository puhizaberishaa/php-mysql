<?php
include_once("config.php");

if{isset($_POST['submit'])}{
    $name =$_POST['name'];
    $username =$_POST['username'];
    $email =$_POST['emal'];

    $sql ="INSERT INTD <users>name, userename, email</users> <VALUES>
(:name, :username, :email)";

$sqlQuery = $connect->prepare($sql);

$sqlQuery->bindPam(':name', $name);
$sqlQuery->bindPam(':username', $username);
$sqlQuery->bindPam(':email', $email);

$sqlQuery->execute();

echo "The user has been added successfully";
}
?>