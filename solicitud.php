<?php 


error_reporting(0);
$varaibe=$_REQUEST['id'];



 ?>

<?php


error_reporting(0);
session_start();

$varsesion= $_SESSION['usuario'];

if($varsesion == null || $varsesion=''){
  echo 'Usted no tiene autorizacion';
  die();
}

require 'conec.php';
$smt = $conn->prepare("SELECT * FROM usuario WHERE RUT=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;


$secre=$_SESSION['usuario'];

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>

 	  
<div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;">

  
   <div class="left" ><font color="white"><h3>SISTEMA GESTION SALAS</h3></font>
</div>
  

</div>
 	
 </head>



<ol class="breadcrumb">
 
  <?php echo "

    <li><a href='http://localhost/ProyectoMultimedia1/vistasec.php?id=".$varaibe."'>Volver</a></li>         
";  ?>
</ol>
 <body>





<div class="container">
 
<h3><p class="left">Formulario Solicitud sala <?php echo $varaibe;?></p></h3>
	<div class="row">
		
		

<div class="col-md-5 ">

<form action="operaciones.php?id=<?php echo $varaibe; ?>"
    method="POST" enctype="multipart/form-data" accept-charset="utf-8">

Nombre Porfesor:<input name="nombre" type="text" value="" class="form-control" required />
Rut Porfesor:<input name="rut" type="text"  maxlength="8" value="" class="form-control" required/>
Asignatura:<input  name="ramo" type="text"  value="" class="form-control" required/>
<label>
Periodo:<select name="periodo" >

  
    <optgroup label="Periodo">
    <option value="1">08:00-09:20</option>
    <option value="2">09:20-1035</option>
    <option value="3">10:45-12:05</option>
    <option value="4">12:05-13:20</option>
    <option value="5">13:25-14:40</option>
    </optgroup> 
   </label>
   </select>

<label>
Dia:<select name="dia" >

    <optgroup label="Día">
    <option value="1">Lunes</option>
    <option value="2">Martes</option>
    <option value="3">Miercoles</option>
    <option value="4">Jueves</option>
    <option value="5">Viernes</option>
    <option value="6">Sabado</option>
    </optgroup> 
   </label>
   </select>

   <label> Semestre:<select name="semestre" >
    <optgroup label="Semestre">
    <option value="1">1° Semestre</option>
    <option value="2">2° Semestre</option>
    </label>
    </optgroup> 
   </select>

Cod sala:<input type="text" name="cod" value="<?php echo $varaibe; ?>">
    
    </optgroup> 
   </select>

<input type="hidden" name="formu">

<input type="submit" value="ENVIAR" class="btn btn-primary" ><hr/> 
</div>




</form>

<div class="col-md-7">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
    .panel-title .glyphicon{
        font-size: 14px;
    }
</style>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
            $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
            $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>
</head>
<body>
<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-plus"></span>Modificar Solicitud</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>
                    	<?php

                    	error_reporting(0);
                	require 'conec.php';
					$smttt = $conn->prepare("SELECT * FROM Solicitud WHERE CODSALA='$varaibe'" ); 
					$smttt -> execute(); 
					$resultadoo= $smttt->fetchall();
					$conn=null;
                    	
                	$variablee= count($resultadoo);
                	echo "<table class='table table-border' style='border:1px ' >
                	<th>Codigo Solicitud</th>
						<th>Dia</th>
						<th>Rut</th>
						<th>Periodo</th>
						<th>Ramo</th>
						<th>semestre</th>
						";
                	for ($i=0; $i < $variablee ; $i++) {
                		echo " 
       <tr>
       

                      
                    <td >".$resultadoo[$i]['CODSOL']."</td> 
                    <td >".$resultadoo[$i]['DIA']."</td>
                    <td >".$resultadoo[$i]['RUT']."</td>
                     <td >".$resultadoo[$i]['PERIODO']."</td>
                      
                      <td >".$resultadoo[$i]['RAMO']."</td>
                      <td >".$resultadoo[$i]['SEMESTRE']."</td>
                      
</tr>

     ";

                		 
                		
                	}

               echo"<form action='modificar.php?id=$varaibe' method='POST'>
                <input type='text' name='codsala'  value='Ingrese Cod Solicitud' required=''>
                <button class='btn btn-primary'>Modificar</button>
                </form>";
echo " </table>";

                    	?>


                    </p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span>Eliminar</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="panel-body">
                <p>	<?php 
                error_reporting(0);
                	require 'conec.php';
					$smt = $conn->prepare("SELECT * FROM Solicitud WHERE CODSALA='$varaibe'" ); 
					$smt -> execute(); 
					$resultado= $smt->fetchall();
					$conn=null;
					

                	$variable= count($resultado);
                	echo "<table class='table table-border' style='border:1px ' >
                	<th>Codigo Sala</th>
						<th>Codigo Solicitud</th>
						<th>Dia</th>
						<th>Periodo</th>
						<th>Rut</th>";
                	for ($i=0; $i < $variable ; $i++) {
                		echo " 
       
       <tr>
       

                       <td> ".$resultado[$i]['CODSALA']."</td>
                    <td >".$resultado[$i]['CODSOL']."</td>
                    <td >".$resultado[$i]['DIA']."</td>
                     <td >".$resultado[$i]['PERIODO']."</td>
                      <td >".$resultado[$i]['RUT']."</td>
        
</tr>";

      

                		
                		
                	}
                	echo"</table>";
                	?>
                	<?php
                		require 'conec.php';
                		$cod=$_REQUEST['codsala'];
					$smt = $conn->prepare("DELETE FROM `solicitud` WHERE `CODSOL`=$cod"); //consulta a la bd
					$smt -> execute(); //ejecuta

					$resultado= $smt->fetchall();
					$conn=null;
					


                echo "<!DOCTYPE html>
                <html>
                <head>
                	<title></title>
                </head>
                <body>
                <form action='solicitud.php?id=$varaibe' method='POST'>
                <input type='text' name='codsala' value='Ingrese Cod Solicitud' required=''>
                <button class='btn btn-primary'>Eliminar</button>
                </form>
                </body>
                </html>";
                echo "<form action='solicitud.php?id=$varaibe' method='POST'>
                
                <button class='btn btn-primary'>Actualizar lista</button>
                <form>";

                
                	
                

                	?>	


                	</p>

            </div>
        </div>

        </div>
    </div>




        </div>
        
    </div>
    
</div>
</div>
</div>
</div>






 </body>



 <footer>

  <div class="row" >
<div class="container" style="width: 100%;" >
  
<div style="background-color: #000; width: 100%; height:75px; margin-top:40px ;">
  
teto para footer

</div>
</div>
</div>

</footer>

 </html>