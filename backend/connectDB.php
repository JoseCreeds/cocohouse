<?php

function connectMe(){
    $pdo = 'mysql:host=localhost; dbname=cocohouse';   
    $username = 'root';
    $password = ''; 

    try{
        $dbConn = new PDO($pdo, $username, $password);
        //Configurer les options PDo si nécessaire
        $dbConn->exec("SET NAMES utf8");

        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbConn;
    }catch (PDOException $e){
        echo "Erreur de connexion";
        $e->getMessage();
        return null;

    }
}

$dbConn = connectMe();

?>