 <!DOCTYPE html>
 <html>
 <head>
 	<title>Logeo</title>
 	
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 </head>
<body style="background: lightblue;">
<div class="container">
					
					<div class="col-md-8 well" style="background:#ccc;">
<CENTER>
		<h1>Login</h1>
 					<form action="validar.php" method="POST">
 					<br>Rut<input type="text" name="rut" required="" maxlength="8"></br>
 					<br>Clave<input type="password" name="clave" required=""></br>
 					<button class="button" style="background: lightblue;">ingresar</button>
 					</form>
 </CENTER>
 					
 					

 					<form action="registrar.php">
					<label><button>Registrar</button></label>
					</form>

					</div>
				
</div>
 </body>
 </html>
