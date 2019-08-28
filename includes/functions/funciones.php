<?php

$conn = new mysqli('localhost', 'root', 'root', 'ussers');

if($conn->connect_error){
    echo $error -> $conn->connect_error;
}

?>