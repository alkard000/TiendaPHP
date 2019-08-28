<?php

$conn = new mysqli('localhost', 'root', 'root', 'CLOTH_ALL');

if($conn->connect_error){
    echo $error -> $conn->connect_error;
}

?>