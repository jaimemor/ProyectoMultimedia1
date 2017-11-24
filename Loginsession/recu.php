<?php 

					echo"<form action='recu.php' method='POST'>
 					<br>Correo<input type='text' name='rut' required='' ></br>
 					<button class='button' style='background: lightblue;''>ingresar</button>
 					</form>";
$cod="123";
$n=1; 					
$cod=wordwrap($cod,70);
$texto="Codigo validar";
//$correo=$_REQUEST['rut'];
if ($n==1) {
	mail('jaime.morales@alumnos.upla.cl',$texto, $cod);
echo "listo";
	}else{
	echo "no funca";
}
?>