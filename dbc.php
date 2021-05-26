<?php

$dsn = 'mysql:host=localhost;dbname=zoo_management;charset=utf8mb4';
$user = 'zoo_user';
$pass = 'sana813SANA';

try {
    $dbh = new PDO($dsn, $user, $pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo 'Successful connection';
    $dbh = null;
} catch(PDOException $e) {
    echo 'Failed connection'. $e->getMessage();
    exit();
};    

?>