 <?php 

   function selecdia ($DIA,$PERIODO){
 include "conec.php";

 $sql='SELECT NOMBRE,DIA,PERIODO,RAMO,SOL.CODSALA
 FROM USUARIO U JOIN SOLICITUD SOL ON U.RUT=U.RUT
  LEFT JOIN SALA S ON S.CODSALA=SOL.CODSALA
AND DIA=? AND PERIODO=?
 WHERE S.CODSALA="B404";';
  $smt=$conn->prepare($sql);
  
  $smt->bindParam(1,$PERIODO);
  $smt->bindParam(2,$DIA);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
 

 return $resultado;


 }




$datos=array();

for ($i=0; $i < 13; $i++) { 
  
  $datos[$i]['DIA']='8000';
  
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO1'][$i]=selecdia(1,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO2'][$i]=selecdia(2,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO3'][$i]=selecdia(3,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO4'][$i]=selecdia(4,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO5'][$i]=selecdia(5,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO6'][$i]=selecdia(6,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO7'][$i]=selecdia(7,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO8'][$i]=selecdia(8,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO9'][$i]=selecdia(9,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO10'][$i]=selecdia(10,$i);
}
for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO11'][$i]=selecdia(11,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO12'][$i]=selecdia(12,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO13'][$i]=selecdia(13,$i);
}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

 <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">




    <table class="table table-bordered" border="1" >
            
                   
                    <th style="width:15%"> PERIODO</th>
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>



            <?php foreach ($datos as $key => $value): ?>
                                
                                <tr >
                            <?php foreach ($value as $key => $periodo): ?>

                             <td class="text-center" WIDTH="50" HEIGHT="50"> 

                                        <?php if (!empty($periodo)) {
                                            
                              echo $periodo[0]['NOMBRE'].'<br>';

                              echo $periodo[0]['RAMO'];
                                        }else {

                                          echo "
                                                <p class='text-success'>Disponible</p>
                                          " ;
                                        }



                                        ?>
                                </td>
                           
                            <?php endforeach ?>

                            </tr>

                        <?php endforeach ?>


        </table>

