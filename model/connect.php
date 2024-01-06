<?php 
// Connection à la base de données
    $dbhost     = "mysql:host=127.0.1.1";
    $dbname     = ";dbname=ecommerce";
    $charset   = ";charset=UTF8";
    $dbuser     = "root";
    $dbpassword = "";

$pdo = new PDO($dbhost.$dbname.$charset, $dbuser, $dbpassword) ;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs