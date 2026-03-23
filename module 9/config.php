<?php

$server ='localhost';
$username ='root';
$password ='root'; //''
$dbname = "method";

try{
$connect = new PDD("mysql:host=$server; dbname=sdbname", $username, $password);
}
catch(Exeption $c){
echo "Something went wrong";
}


?>