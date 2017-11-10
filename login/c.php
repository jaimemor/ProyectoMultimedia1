<?php
   require 'conexion.php';
 session_start();
//error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
	echo 'Usted no tiene autorizacion';
	die();
$rt=$_REQUEST['rut'];
$cl=$_REQUEST['clave'];
$smt = $conn->prepare("SELECT* FROM profe WHERE rut=$rt AND clave=$cl"); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;
 


if ($rt==$resultado[0]['rut'] && $cl==$resultado[0]['clave'])
 {
echo "<pre>";
print_r($resultado);
echo "</pre>";

}


?>
