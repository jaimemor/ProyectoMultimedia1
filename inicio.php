


<?php 
 
  /*
  session_start();
  error_reporting(0);  
  $varsesion=$_SESSION['login'];

  if ($varsesion == null || $varsesion = '') { //para que la pagina tenga acceso solo quien inicio session
    echo "acceso denegado";
    die();
  }
  
*/

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


<div class="container-fluid">
  
    <h1>VISTA echo=$secretaria o mayordomo </h1>
         <div class="row">
<div class="col-md-12 " style="background: #fff ;">

 	
<div>Usuario: <?php // echo $_SESSION['login']; ?></div>
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
      	<option name="" value="piso">piso 1</option>
      	<option value="piso">piso 2</option>
      </select>
      

  </div>
  </div>
  </div>
	</div>

		 <h1>salas</h1>

<div class="container-fluid">
  
         <div class="row">

          <div class="col-md-1 " style="background: #fff ;"></div>
<div class="col-md-10 " style="background: #fff ;">





<?php
  //Creamos los parametros iniciales
  //estos podrían proceder de un formulario, sql, etc...
  $filas = 5;
  $columnas = 5;
  $texto = "texto";
  $mostrar = true;
  
  ?>                                                   
     
 

  
  
<!-- Creamos el inicio de la tabla manualmente-->
<table  border-color="#ffffff" border="12" class="table table-hover">
 
 <?php

 //Iniciamos el bucle de las filas
 for($t=0;$t<$filas;$t++){
  
  echo "<tr>";
  //Iniciamos el bucle de las columnas
  for($y=0;$y<$columnas;$y++){
   
   if($mostrar){
    //Pintamos el cuadro
             echo "<td style=padding:10px; 

        background-color:#000000;>".$texto."</td>";
    //El próximo no será pintado
    $mostrar=false;
    $texto++;
   }else{
    //Dejamos cuadro en blanco


    echo "<td style=padding:10px;>".$texto."</td>";
    //El próximo será pintado
    $grey=true;
    $texto++;
    }
   }
   //Cerramos columna
   echo "</tr>";
  }
 ?>
 <!-- Cerramos tabla -->
 </table>
</div>
  


          <div class="col-md-1 " style="background: #fff ;"></div>


 

 </body>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>




