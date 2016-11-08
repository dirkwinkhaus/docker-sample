<?php

$pdo = new PDO('mysql:host=docker-mariadb.local', 'docker', 'sample');

$statement = $pdo->prepare("show databases");
$statement->execute();

echo 'databases:<br>';
while ($row = $statement->fetch()) {
    echo $row['Database'] . '<br>';
}


