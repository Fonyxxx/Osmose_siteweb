<?php

require_once "config.php";
function getDatabaseConnection(): PDO
{
    $dsn = 'mysql:host=' . DB_HOST . ';dbname='. DB_NAME . ';charset=utf8';

    try { 
        $databaseConnection = new PDO($dsn, DB_USER, DB_PASSWORD);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
    return $databaseConnection;
}   
