<?php
require 'conexion.php';
	$rut=$_REQUEST['rut'];
	$clave=$_REQUEST['clave'];
	session_start();
	error_reporting(0);
	$_SESSION['usuario']=$rut;
	$_SESSION['clave']=$clave;

$smt = $conn->prepare("SELECT* FROM profe WHERE rut=$rut AND clave=$clave"); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;
 


if ($rut==$resultado[0]['rut'] && $clave==$resultado[0]['clave'])
 {

header("location:panel.php");
} else {
echo "Usuario o clave invalida";



}
?>