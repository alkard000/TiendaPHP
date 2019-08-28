<?php

$link = mysqli_connect("localhost", "root", "root", "ussers") or die ("<h2>No se ha encontrado el Servidor</h2");
$db = mysqli_select_db($link, "ussers" ) or die ("<h2>Error de coneccion</h2>");


?>