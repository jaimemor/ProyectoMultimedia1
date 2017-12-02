
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	
 <link rel="stylesheet" type="text/css" href="estilo.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">

 </head>
<body style="background-color:#fff " >
	<div class="col-md-12">
					<div class="row" >
						<div class="col-md-4 col-md-offset-4 " style="width: 500px; height: 300px;margin-top: 100px; background-color: #103C70;">

								
									
 									<form action="validar.php" method="POST">
 									<br><p class="">Rut usuario</p>

 								     <input name="rut" maxlength="8"  class="form-control text-center"
 									 placeholder="12345678" autocomplete="off" type="text" required=""><br>

 									  <input type="password" name="clave"  class="form-control text-center"
 									 placeholder="Clave" autocomplete="off" required="" >



 									

 									<br><button class="btn btn-primary btn-lg btn-block" style="width: 220px;">ingresar</button>
 									</form>
 								
 					
 									<br>
 									<form action="recu.php">
 									<label><button  class="btn btn-secondary btn-lg btn-block" >Restaurar clave</button></label>
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

							
							