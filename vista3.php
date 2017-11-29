

<?php 



    include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

  	for ($i=0; $i < $var; $i++) { 
  		echo "<table  border-color='#cccccc' border='1' ><tr><td>".$resultado[$i]['id']."</td></tr></table>";
  	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>test arreglos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
			


</body>
</html>






   echo "<pre>";
                        print_r($resultado);
                      echo "</pre>";


<?php 

echo "mostrar salas que tiene pedidas un profesor en particular";
echo "mostrar cuadro con salas solicitadas";
echo "se debe mostrar por año y semestre";
echo "secretaria y mayordomo pueden ver info de cualquier profe";
echo "profesor puede ver solo su info";

 ?>



echo "
<table class='table table-bordered' border='1'><tbody>
                <tr>
                    <th style='width:5%''>Periodo</th>
                    <th style='width:15%'> LUNES</th>
                    <th style='width:15%'> MARTES</th>
                    <th style='width:15%'> MIÉRCOLES</th>
                    <th style='width:15%'> JUEVES</th>
                    <th style='width:15%'> VIERNES</th>
                    <th style='width:15%'> SÁBADO</th>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>08:00 09:15</td>
                   
                    <td class='text-center' ><?php 
                      echo $var2,$var3,'<br>',$var1; ?></td> 


                     <td class="text-center"></td>


                    <td class='text-center'></td>
                    <td class='text-center'></td>
                    <td class='text-center'></td>
                    <td class='text-center'></td>
                    <td class='text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>09:20 10:35</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>10:45 12:00</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>12:05 13:20</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>13:25 14:40</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>14:45 16:00</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>16:05 17:20</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr
                ><tr>
                    <td style='background:#eaf3f9;'>17:25 18:40</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>18:40 19:55</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>19:55 21:10</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>21:10 22:25</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>22:25 23:40</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
            </tbody>
        </table>    

";