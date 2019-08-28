<?php

try{
    $pdo= new PDO('mysql:host=localhost;dbname=clothes', 'root', 'root');
    //echo 'conectado';
}catch (PDOException $ex){
    die($ex->getMessage());
 
}
