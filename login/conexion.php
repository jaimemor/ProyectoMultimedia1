<?php

$usuario = "root";
$clave= "";
$bd_nombre= "multimedia";
$host = "localhost";

$conn = new PDO("mysql:host=$host;dbname=$bd_nombre", $usuario, $clave);
    //$conn=null;//cerrar conexion
    

?>