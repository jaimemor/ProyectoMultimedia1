<?php
session_start();

$varsesion= $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
	echo 'Usted no tiene autorizacion';
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
<h1>panel</h1>
<h2>bienvenido:<?php echo $_SESSION['usuario'] ?></h2>


<a href="cerrar_session.php">cerrar sesion</a>

</body>
</html>