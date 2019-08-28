<?php 
    $conn= new mysqli('localhost','root', 'root', 'new_event');

    if($conn->connect_error){
        echo $conn -> connect_error;
    }
?>