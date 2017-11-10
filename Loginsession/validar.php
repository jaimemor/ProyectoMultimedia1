<?php
require 'conexion.php';
	session_start();
	$_SESSION['usuario']=$_REQUEST['rut'];
	$clave=$_REQUEST['clave'];
	
	

$smt = $conn->prepare("SELECT* FROM profe WHERE rut=".$_SESSION['usuario']); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;
 


if ($_SESSION['usuario']==$resultado[0]['rut'] && $clave==$resultado[0]['clave'])
 {

header("location:panel.php");
} else {
echo "Usuario o clave invalida";



}
?>