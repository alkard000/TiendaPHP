<?php

try{
    $pdo= new PDO('mysql:host=localhost;dbname=info_clothes2', 'root', 'root');
    //echo 'conectado';
}catch(PDOException $e){
    print "¡Error!: " . $e -> getMesagge() . "<br/>";
    die();
}