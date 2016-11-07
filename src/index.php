<?php

$pdo = new PDO('mysql:host=docker-mariadb.local', 'root', 'my-secret-pw');

$statement = $pdo->prepare("show databases");
$statement->execute();

echo 'databases:<br>';
while ($row = $statement->fetch()) {
    echo $row['Database'] . '<br>';
}

?>
