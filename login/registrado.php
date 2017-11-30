<?php 

function GuardarFormu($rutt,$nombree,$correoo,$clavee)
{
    require 'conexion.php';
    $sql="INSERT INTO profe(rut, nombre, correo, clave) VALUES(?,?,?,?)";
    $smt = $conn->prepare($sql);
    $smt->bindParam(1, $rutt);
    $smt->bindParam(2, $nombree);
    $smt->bindParam(3, $correoo);
    $smt->bindParam(4, $clavee);
    $smt->execute(); 
    $conn=null;

}

if(isset($_REQUEST['formulario'])){
$nombree= $_REQUEST['nombre'];
$rutt=$_REQUEST['rut'];
$correoo=$_REQUEST['correo'];
$clavee=$_REQUEST['clave'];

GuardarFormu($rutt,$nombree,$correoo,$clavee);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrado</title>
</head>
<body>
	<center>
	<h1>¡No Olvidar Rut es Su Usuario, Ademas Recordar Clave!</h1>
	<table  border="1" width="50%" height="30" bordercolor="#000000">
	<div>
		<tr>
<th><center>nombre</center></th>
<th><center>correo</center></th>
<th><center>clave</center></th>
</tr>
</div>
<div>
<td><center><?php echo $nombree?></center></td>
<td><center><?php echo $correoo?></center></td>
<td><center><?php echo $clavee?></center></td>
</div>
</table>
<form action="index.php">
<label><button>Para ir al login haz click</button>
</label>
</form>
</center>


</body>
</html>