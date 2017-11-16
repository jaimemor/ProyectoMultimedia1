<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background: lightblue;">
<div class="container">

	<div class="col-md-8 well" style="background:#ccc;">
<center>
<h1>
		<?php
error_reporting(0);
function formu($rut,$clavee,$dvv)
{
	
$r=$_REQUEST['rut'];
$s=1;
     for($m=0;$r!=0;$r/=10)
         $s=($s+$r%10*(9-$m++%6))%11;
     //echo 'El digito verificador es: '.chr($s?$s+47:75);
     $dvv=chr($s?$s+47:75);
     //echo "div dv:".$dv;
     

	require 'conexion.php';
	$sql="INSERT INTO profe (rut,clave,dv) VALUES(?,?,?)";
	$smt = $conn->prepare($sql);
	$smt->bindParam(1, $rut);
	$smt->bindParam(2, $clavee);
	$smt->bindParam(3,$dvv);
	$smt->execute(); 
	$conn=null;
}
	if(isset($_REQUEST['formu'])){

$rut=$_REQUEST['rut'];
$clave=$_REQUEST['clave'];

formu($rut,$clave,$dvv);
echo "Señor(a):"." ".$_REQUEST['nombre'].". "."Usted fue registrado exitosamente!";
}else{
echo "Error al Registrar";
}

?>
</h1>
</center>
<h2>No olvidar clave!</h2>
<table  border="1" width="100%" height="30" bordercolor="#000000">

<tr>
<th><center>Nombre</center></th>
<th><center>Rut</center></th>
<th><center>Clave</center></th> 



  	</tr> 
	<tr> 
      
    
<tr>
    
    <th><center><?php echo $_REQUEST['nombre']?></center></th>
    <th><center><?php echo $_REQUEST['rut']?></center></th>
    <th><center><?php echo $_REQUEST['clave']?></center></th>

    </tr>

	</tr>
	
	</table>
	<label>
	</label>
	<center>
		<label>
<form action="index.php">
	<button style="background: lightblue;">Regresar a Login</button>
</form>
</label>
</center>
</div>
</body>
</html>