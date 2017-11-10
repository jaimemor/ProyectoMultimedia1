<html>
<head>
	<title>Login</title>
</head>
<body>

<div>
<form action="registrado.php" method="POST">
			<label>
			<center><h1>Registrar</h1></center>
			<br>Nombre<input type="text" name="nombre" required=""></br>
			<br>Rut<input type="text" name="rut" required="" maxlength="9"></br>
			<br>Correo<input type="text" name="correo" required=""></br>
			<br>Clave<input type="password" name="clave" required="" ></br>
			<input type="hidden" name="formulario">
			<button >Enviar</button>
			</label>
</form>
</div>
<div>
	<form action="index.php">
<label><button>Para ir al login haz click</button>
</label>
</form>
</div>

</body>
</html>
		

