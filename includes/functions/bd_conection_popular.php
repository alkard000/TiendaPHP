<?php

try{
    $pdo= new PDO('mysql:host=localhost;dbname=popular', 'root', 'root');
    //echo 'conectado';
}catch(PDOException $e){
    print "¡Error!: " . $e -> getMesagge() . "<br/>";
    die();
}