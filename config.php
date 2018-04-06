<?php

$databaseHost = 'localhost';
$databaseName = 'your mysql database name';
$databaseUsername = 'your mysql username';
$databasePassword = 'your mysql password';

try {
    $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);

    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
