 <?php 

try{

    
    require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare('SELECT DIA,RAMO,PERIODO,SOL.CODSALA,E.NOMBREED,S.CODSALA
 FROM SOLICITUD SOL  LEFT JOIN  SALA S ON S.CODSALA=SOL.CODSALA
   JOIN PISO P ON S.CODPISO=P.CODPISO  JOIN EDIFICIO E ON E.CODED=P.CODED
 WHERE S.CODSALA="A406";');
      $sql->execute();
    $resultado = $sql->fetchAll();
$var= count ($resultado);
   

      foreach ($resultado as $row) {

          
         
      }

  }catch(PDOException $e){

      echo "ERROR: " . $e->getMessage();

  }

 ?>

<?php 

    

  try{

   
    require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare(' SELECT FECHACOM,HORA,COMENTARIO,ESTADO,CANTIDAD,TIPOIMPLE,S.CODSALA
        FROM COMENTARIO C LEFT JOIN SALA S
 ON S.CODSALA=C.CODSALA INNER JOIN IMPLEMENTO I ON I.CODSALA=S.CODSALA
 WHERE S.CODSALA="B404";');
      $sql->execute();
    $resultado = $sql->fetchAll();

   

      foreach ($resultado as $row) {

   
         
      }

  }catch(PDOException $e){

      echo "ERROR: " . $e->getMessage();

  }
           


        
          
?>




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



for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO1'][$i]=selecdia(1,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO2'][$i]=selecdia(2,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO3'][$i]=selecdia(3,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO4'][$i]=selecdia(4,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO5'][$i]=selecdia(5,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO6'][$i]=selecdia(6,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO7'][$i]=selecdia(7,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO8'][$i]=selecdia(8,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO9'][$i]=selecdia(9,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO10'][$i]=selecdia(10,$i+1);
}
for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO11'][$i]=selecdia(11,$i+1);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO12'][$i]=selecdia(12,$i+1);
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




  <div class="col-md-4 col-md-4 col-lg-10 vcenter" style="border:5px solid #fff">
        <div style="height:20em">
   
         <div class="container-fluid">
    
         <div class="row">

          <div class="col-md-3 " style="background:   #fff ;">
<table class='table table-border'  border="0.5" >

            <th style="width:15%">periodo</th>
            <tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">08:00<br>9:20</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">09:20<br>10:35</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">10:45<br>12:05</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">12:05<br>13:20</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">13:25<br>14:40</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">14:45<br>16:00</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">16:05<br>17:20</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">17:25<br>18:40</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">18:40<br>19:55</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">19:55<br>21:10</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">21:10<br>22:25</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">22:25<br>23:40</th>
              
              
           </tr>
          
          </table>
          </div>
<div class="col-md-6 " style="background:   #fff ;">
                                                 
         

 <table class="table table-bordered" border="1" >
            
                   
                    
                    
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>

     
            <?php foreach ($datos as $key => $value): ?>
                                
                                <tr >
                            <?php foreach ($value as $key => $periodo): ?>

                             <td  class="text-center"  HEIGHT="57"> 

                                        <?php if (!empty($periodo)) {
                                    
                                      echo $periodo[0]['NOMBRE'].'<br>'.$periodo[0]['RAMO'];
                                     
                                        }else{


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

</div>