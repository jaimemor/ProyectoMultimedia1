<?php

$usuario = "root";
$clave= "";
$bd_nombre= "bd";
$host = "localhost";

$conn = new PDO("mysql:host=$host;dbname=$bd_nombre", $usuario, $clave);
 
    

?>