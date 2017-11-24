<?php
session_start();

$varsesion= $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
	echo 'Usted no tiene autorizacion';
	die();
}

require 'conexion.php';
$smt = $conn->prepare("SELECT* FROM usuario WHERE rut=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;

?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
<h1>Vista mayordomo</h1>
<h2>bienvenido(a): <?php echo $resultado[0]['nombre'];?></h2>
<h2>Rut: <?php echo $_SESSION['usuario']."-".$resultado[0]['dv']; ?></h2>


<a href="cerrar_session.php">cerrar sesion</a>

</body>
</html>