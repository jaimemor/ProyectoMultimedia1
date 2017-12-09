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
					<form action='modificar.php' method='POST'>
					 <input type='text' value=".$modificar." name='cod'>
					 <input type='text' value=".$dia." name='dia'>
					 <input type='text' value=".$ramo." name='ramo'>
					 <input type='text' value=".$periodo." name='periodo'>
					 <input type='text' value=".$semestre." name='semestre'>
					 <button>Actualizar	</button>
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

					
					echo "<form action='solicitud.php'><button>Volver solicitud</button></form>";


					
				?>                		

