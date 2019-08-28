<?php

try{
    $pdo= new PDO('mysql:host=localhost;dbname=CLOTH_ALL', 'root', 'root');
    //echo 'conectado';
}catch(PDOException $e){
    print "¡Error!: " . $e -> getMesagge() . "<br/>";
    die();
}