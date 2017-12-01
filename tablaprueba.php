 <?php

  include "conec.php";

  $sql="SELECT * FROM PISO  ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);


  echo "<pre>";
print_r($resultado);
echo "</pre>";






    
    ?>


  <?php foreach ($resultado as $key => $value): ?>
                                
                                <tr>
                            <?php foreach ($value as $key => $periodo): ?>

                             <td class="text-center"> 

                                        <?php if (!empty($periodo)) {
                                            
                              echo $periodo[0]['CODPISO'].'<br>';

                              echo $periodo[0]['CODED'];
                                        } ?>
                                </td>

                            <?php endforeach ?>

                            </tr>

                        <?php endforeach ?>









 <?php 

  function selecdia ($DIA,$PERIODO){
 include "conec.php";

 $sql="SELECT * FROM solicitud where DIA=? and PERIODO=?";
  $smt=$conn->prepare($sql);
  $smt->bindParam(1,$DIA);
  $smt->bindParam(2,$PERIODO);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
 

 return $resultado;


 }




$datos=array();

for ($i=0; $i < 6; $i++) { 
  
  $datos['periodo1'][$i]=selecdia(1,$i+1);
}
for ($i=0; $i < 6; $i++) { 
  
  $datos['periodo2'][$i]=selecdia('2',$i+1);
}
for ($i=0; $i < 6; $i++) { 
  
  $datos['3'][$i]=selecdia('3',$i+1);
}
for ($i=0; $i < 6; $i++) { 
  
  $datos['4'][$i]=selecdia('4',$i+1);
}
for ($i=0; $i < 6; $i++) { 
  
  $datos['5'][$i]=selecdia('5',$i+1);
}


for ($i=0; $i < 13; $i++) { 
  
  $datos['lunes'][$i]=selecdia('lunes',$i+1);
}

for ($i=0; $i < 13; $i++) { 
  
  $datos['martes'][$i]=selecdia('martes',$i+1);
}

for ($i=0; $i < 13; $i++) { 
  
  $datos['miercoles'][$i]=selecdia('miercoles',$i+1);
}

for ($i=0; $i < 13; $i++) { 
  
  $datos['jueves'][$i]=selecdia('jueves',$i+1);
}

for ($i=0; $i < 13; $i++) { 
  
  $datos['viernes'][$i]=selecdia('viernes',$i+1);
}

for ($i=0; $i < 13; $i++) { 
  
  $datos['sabado'][$i]=selecdia('sabado',$i+1);
}


/*foreach ($datos['lunes'] as $key => $value) {
  if (!empty($value)) {
    echo $value[0]['RUT'];
    echo '<br>';
  }
}*/


echo "<pre>";
print_r($datos);
echo "</pre>";

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
            
             <th style="width:5%">PERIODO</th>
                    <th style="width:15%"> 08:00-09:20</th>
                    <th style="width:15%"> 09:20 10:35</th>
                    <th style="width:15%"> 10:45 12:05</th>
                    <th style="width:15%">  12:05 13:20</th>
                    <th style="width:15%"> 13:25 14:40</th>
                    <th style="width:15%"> 14:45 16:00</th>
                    <th style="width:15%"> 16:05 17:20</th>
                    <th style="width:15%"> 17:25 18:40</th>
                    <th style="width:15%"> 18:40 19:55</th>
                    <th style="width:15%"> 19:55 21:10</th>
                    <th style="width:15%"> 21:10 22:25</th>
                    <th style="width:15%"> 22:25 23:40</th>



            <tr>

            <?php foreach ($datos as $key => $value): ?>
                                
                                <tr>
                            <?php foreach ($value as $key => $periodo): ?>

                             <td class="text-center"> 

                                        <?php if (!empty($periodo)) {
                                            
                              echo $periodo[0]['RUT'].'<br>';

                              echo $periodo[0]['CODSOL'];
                                        } ?>
                                </td>

                            <?php endforeach ?>

                            </tr>

                        <?php endforeach ?>
</tr>

        </table>

