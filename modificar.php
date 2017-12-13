<?php 
$varaibe=$_REQUEST['id'];
					

 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <?php  include('vista3.php'); ?>
 
 	<title></title>
 	
 
<div class="row" >
<div class="container" style="width: 100%;" >
  


<div class="col-md-12" style="background-color: #2E3D55; height:95px; margin-top:-20px ; ">

  
  <font color="white" class="left" ><h3>SISTEMA GESTION SALAS</h3></font>



  </div>
  </div>
  </div>
</head>


<ol class="breadcrumb">
 
  <?php echo "

    <li><a href='http://localhost/ProyectoMultimedia1/solicitud.php?id=".$varaibe."'>Volver</a></li>         
";  ?>
</ol>
<body>
	<div class="row" >
<div class="container" style="width: 100%;" >
  


<div class="col-md-12" style="background-color: #fff; height:195px; margin-top:20px ; ">





<?php
error_reporting(0);	





require "conec.php";


                $modificar=$_REQUEST['codsala'];
                	
                	$smtt = $conn->prepare("SELECT * FROM SOLICITUD WHERE CODSOL=$modificar"); 
					$smtt -> execute(); 
					$resultadoo= $smtt->fetchall();
					$conn=null;
				
					$variable= count($resultadoo);

                	for ($i=0; $i < $variable ; $i++) {
                		$dia=$resultadoo[$i]['DIA'];
                	$ramo=$resultadoo[$i]['RAMO'];
                	$periodo=$resultadoo[$i]['PERIODO'];
                	$semestre=$resultadoo[$i]['SEMESTRE'];
                		echo " 
                		
					<!DOCTYPE html>
					<html>
					<head>
						
					</head>
					<body>
					<form action='modificar.php?id=$varaibe' method='POST'>
					 <input type='text' value=".$modificar." name='cod'>
					Dia <input type='text' value=".$dia." name='dia'>
					Asignatura <input type='text' value=".$ramo." name='ramo'>
					Periodo <input type='text' value=".$periodo." name='periodo'>
					Semestre <input type='text' value=".$semestre." name='semestre'>
					 <button >Actualizar</button>
					</form>
					</body>
					</html>";

				}
				?>

				<?php
				require "conec.php";
					$dia=$_REQUEST['dia'];
					$ramo=$_REQUEST['ramo'];
					$periodo=$_REQUEST['periodo'];
					$semestre=$_REQUEST['semestre'];
					$codi=$_REQUEST['cod'];
					

	$sm = $conn->prepare("UPDATE solicitud SET DIA='$dia', RAMO='$ramo' , PERIODO='$periodo' , SEMESTRE= '$semestre' WHERE CODSOL =".$codi); 
					$sm -> execute(); 
					$resulta= $sm->fetchall();
					$conn=null;


	


					
				?>                		


</div>
</div>
</div>
</body>


<footer>

  <div class="row" >
<div class="container" style="width: 100%;" >
  
<div style="background-color: #000; width: 100%; height:75px; margin-top:180px ;">
  
teto para footer

</div>
</div>
</div>

</footer>
</html>