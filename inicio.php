secretaria
->mostrar
listado de salas con su informacion correspondiente

(capacidad, implementos,profesores que la ocupan, agregar comentarios y mostrar)
desplegar horarios de salas en otra pestaña



<?php 
 
  session_start();
  error_reporting(0);  
  $varsesion=$_SESSION['login'];

  if ($varsesion == null || $varsesion = '') { //para que la pagina tenga acceso solo quien inicio session
    echo "acceso denegado";
    die();
  }
  


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<title></title>
 	
 </head>
 <body>
 	<h1>SISTEMA DE ACCESO</h1>
<div>Usuario: <?php echo $_SESSION['login']; ?></div>
<div>
	
	Año:<select name="ano">
        <?php
        for($i=date('o'); $i>=2010; $i--){
            if ($i == date('o'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select>
</div>

<div>
	Semestre:<br>
	<input type="radio" name="semestre" value="primersemenstre" required="">Primer Semestre <br>
	<input type="radio" name="semestre" value="segundosemestre" required="">Segundo Semestre<br>
		
</div>
	
	<div>
		

    Seleccione piso:  <select name="piso" id="">
      	<option value="piso1">piso 1</option>
      	<option value="piso2">piso 2</option>
      </select>
      

	</div>

		 





<table class="table table-hover">
  <tr>
  	
    <td>lunes</td>
    <td>martes</td>
  	<td>miercos</td>
  </tr><td></td>
</table>










 </body>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>



