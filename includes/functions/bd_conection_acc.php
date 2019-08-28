<?php

try{
    $pdo= new PDO('mysql:host=localhost;dbname=Accesory', 'root', 'root');
    //echo 'conectado';
}catch (PDOException $ex){
    die($ex->getMessage());
 
}