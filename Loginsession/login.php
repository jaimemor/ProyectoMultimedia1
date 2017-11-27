
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	
 <link rel="stylesheet" type="text/css" href="estilo.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">

 </head>
<body >
	<div class="col-md-12" >
					<div class="row" >
						<div class="col-md-4 col-md-offset-4 well">
								<CENTER>
									
 									<form action="validar.php" method="POST">
 									<br><input type="text" name="rut" required="" maxlength="8" placeholder="Rut"></br>
 									<br><input type="password" name="clave" required="" placeholder="Clave"></br>

 									<br><button class="btn btn-secundary btn-lg btn-block" style="width: 120px;">ingresar</button>
 									</form>
 								</CENTER>
 					
 									<br>
 									<form action="recu.php">
 									<label><button class="btn btn-primary btn-lg btn-block" >Restaurar clave</button></label>
 									</form>
 									 <h3><?php 
 									 error_reporting(0); 
 									$error=$_GET['a'];
 										if ($error==1) {
 											echo "Error, Usuario o Clave invalidas";
 	
 											}
 											?>
 									</h3>
 									
 									
 								
									</div>
								
								
							
						</div>
						
					</div>
				</div>
 </body>
 </html>

							
							