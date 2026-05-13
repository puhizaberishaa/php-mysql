<?php$host ="localhost";
$host ="root";
$pass ="root";
$db ="crud_project";

$cann = new mysql($host, $user, $db);

if ($comm->connect_error){
    die("Connection failed:".$cann->connect_error);
}
?>