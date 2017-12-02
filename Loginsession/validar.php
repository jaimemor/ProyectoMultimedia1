<?php
require 'conexion.php';
	session_start();
	error_reporting(0);
	$_SESSION['usuario']=$_REQUEST['rut'];
	
	$clave=$_REQUEST['clave'];
	
	

$smt = $conn->prepare("SELECT* FROM usuario WHERE RUT=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;
 


if ($_SESSION['usuario']==$resultado[0]['RUT'] && $clave==$resultado[0]['PASS'])
 {
 	if ($resultado[0]['TIPOUSUARIO']=='profesor') {
 		
 		header("location:http://localhost/ProyectoMultimedia1/vistaprofe.php.php");
 	} else if ($resultado[0]['TIPOUSUARIO']=='secretaria') {
 		$_SESSION['name']=$resultado[0]['nombre'];
 		header("location:secre.php");
 	} else {
 		header("location:mayordomo.php");
 	}
 	

}else{

 		header("location:login.php? a=1");



}
?>
