
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>

 	<title></title>
 	
 </head>
 <body>
 	
<div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;">

  
   <div class="left" ><font color="white"><h3>SISTEMA GESTION SALAS</h3></font>
</div>
  <div class="pull-right" style="background:  #2D7C79  ;">
<a href='inicio.php' type="button" class="btn btn-primary">Inicio</a>

  </div>

</div>



<div class="container">
 
<h3><p class="text-center">Formulario Solicitud sala codsala</p></h3>
	<div class="row">
		
		

<div class="col-md-5 ">

<form action="operaciones.php"  method="POST" enctype="multipart/form-data" accept-charset="utf-8">
Nombre Porfesor:<input name="nombre" type="text" value="" class="form-control" required />
Rut Porfesor:<input name="rut" type="text"  maxlength="8" value="" class="form-control" required/>
Sala:<input name="sala" type="text"  value="" class="form-control" required/>
Asignatura:<input  name="ramo" type="text"  value="" class="form-control" required/>
Semestre:<input name="semestre"  type="text"  value="1,2,3,4,5..." class="form-control" required/>
Periodo:<input name="periodo"  type="text"  value="1,2,3,4,5..." class="form-control" required/>
Dia:<input name="dia" type="text"  value="" class="form-control" required/>

<input type="submit" value="ENVIAR" class="btn btn-primary" ><hr/> 
</div>


</form>

<div class="col-md-7">

	<h4>Horario disponible</h4>
	<?php include('t.php');  ?>

</div>
</div>

</div>






 </body>



 

 </html>