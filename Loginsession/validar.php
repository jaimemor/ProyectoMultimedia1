<?php
require 'conexion.php';
	session_start();
	error_reporting(0);
	$_SESSION['usuario']=$_REQUEST['rut'];
	
	$clave=$_REQUEST['clave'];
	
	

$smt = $conn->prepare("SELECT* FROM usuario WHERE rut=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;
 


if ($_SESSION['usuario']==$resultado[0]['rut'] && $clave==$resultado[0]['clave'])
 {
 	if ($resultado[0]['tipousuario']=='profesor') {
 		
 		header("location:profe.php");
 	} else if ($resultado[0]['tipousuario']=='secretaria') {
 		$_SESSION['name']=$resultado[0]['nombre'];
 		header("location:secre.php");
 	} else {
 		header("location:mayordomo.php");
 	}
 	

}else{

 		header("location:index.php? a=1");



}
?>
