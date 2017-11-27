<?php

$usuario = "root";
$clave= "";
$bd_nombre= "bd_sistem";
$host = "localhost";

$conn = new PDO("mysql:host=$host;dbname=$bd_nombre", $usuario, $clave);
 
    

?>