<!DOCTYPE html>
<html>
<head>
	<title>Regitrar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background: lightblue;">
<div class="container">
	
		<div class="col-md-8 well" style="background:#ccc;">
			<center>
				<h1>Registrar</h1>
			<form action="registrado.php" method="POST">
			<br>Nombre<input type="text" name="nombre" required=""></br>
			<br>Rut<input type="text" name="rut" maxlength="8" required=""></br>
			<br>Clave<input type="text" name="clave" required=""></br>
			<br>Pregunta para restablecer clave<input type="text" name="pregunta" required=""></br>
			<input type="hidden" name="formu">
			<br><button type="submit" class="btn-success" required="">Entrar</button></br>
			</center>
			</form> 
		</div>

</div>
</div>
		
</body>
</html>
