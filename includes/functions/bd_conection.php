<?php 
    $conn= new mysqli('localhost','root', 'root', 'Eventos');

    if($conn->connect_error){
        echo $conn -> connect_error;
    }
?>