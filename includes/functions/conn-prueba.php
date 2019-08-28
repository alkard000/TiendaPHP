<?php 
    $conn= new mysqli('localhost','root', 'root', 'CLOTH_ALL');

    if($conn->connect_error){
        echo $conn -> connect_error;
    }
?>