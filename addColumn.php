<?php
require "db.php";

$sql ="ALTER TABLE users ADD email VARCHAR(100)";

$PDO->exec($sql);

echo "Column added successfully";


?>