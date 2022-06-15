<?php

session_start();

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbNam = 'ecoos';

global $pdo;

try{

        
$pdo = new PDO("mysql:dbname=".$dbNam."; host=".$dbHost, $dbUser, $dbPass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}



?>