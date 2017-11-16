
<?php 
  //require_once "conec.php";
  

 // $sql="SELECT codigo FROM piso  where ";
  //$smt=$conn->prepare($sql);
    //$smt->execute();
    //$resultado= $smt->fetchall();
    //$conn=null;

  //if () {
    //  }
  
 ?>
  <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<div class="container-fluid">

         <div class="row">
<div class="col-md-6 well" style="background: #fff ;">
  
  <div><h1>vista echo=$sala</h1></div>
</div>
<div class="col-md-6 well" style="background: #fff ;">


<div><h1>mostrar rut de profesor o secretaria o mayordomo</h1></div>


</div>


</div>
</div>





  <div class="container-fluid">
  
    
         <div class="row">
<div class="col-md-2 well" style="background: #fff ;">
IMPLEMENTOS DE SALA

<tr>
  <td>echo=$implemento1=1</td>
  <td>echo=$implemento2=0</td>
  <td>echo=$implemento3=1</td>
</tr>
</div>






<div class="col-md-8 well" style="background: #fff ;">
 <?php
  //Creamos los parametros iniciales
  //estos podrían proceder de un formulario, sql, etc...
  $filas = 12;
  $columnas = 7;
  $texto = "texto".'<br>'.'$codigosala';
  $grey = true;
  $codigosala="b404";
  ?>                                                   
     
 

  
  
<!-- Creamos el inicio de la tabla manualmente-->
<table border="0,5" class="table table-hover">
 
 <?php

 //Iniciamos el bucle de las filas
 for($t=0;$t<$filas;$t++){
  
  echo "<tr>";
  //Iniciamos el bucle de las columnas
  for($y=0;$y<$columnas;$y++){

   if($grey){
    //Pintamos el cuadro

             echo "<td style=padding:3px; 

        background-color:#000000;>".$texto."</td>";
    //El próximo no será pintado
    $grey=false;
    $texto++;
   }else{
    //Dejamos cuadro en blanco


    echo "<td style=padding:3px;>".$texto."</td>";
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
  

<div class="col-md-2 well" style="background: #fff ;">
 HACER CAJA DE COMENTARIOS

<tr>
  
   <td>comentario de sala1</td><br>
    <td>comentario de sala2</td><br>
</tr>




</div>
 </body>                                                                 
 
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>

