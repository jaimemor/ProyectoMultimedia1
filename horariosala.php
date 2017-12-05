


<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>



<?php 

$link=$_GET['id'];
$var='b404';

  function selecdia ($DIA,$PERIODO){
 include "conec.php";

 $sql=('SELECT NOMBRE,DIA,PERIODO,RAMO,SOL.CODSALA
 FROM USUARIO U JOIN SOLICITUD SOL ON U.RUT=SOL.RUT
  LEFT JOIN SALA S ON S.CODSALA=SOL.CODSALA

 WHERE S.CODSALA="b404" AND DIA=? AND PERIODO=? ');
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

  <title></title>


<div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;" 

  
  <div class="left" > <font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>
 <div class="pull-right">
    <a  class="btn btn-primary" href="Loginsession/login.php">LOGIN</a>

  </div>

  
</div>



<div class="row">


  <!--
        botonera

    -->
    <div class="col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:5px solid #FFF">
          

<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
 
                 

  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href=inicio.php>Inicio</a></li>
   

    
    

  

         
<div class="radio">


  <label>
    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
   <a href="">Primer Semestre </a>
   
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
    <a href="">Segundo Semestre </a>
  </label>
</div>

  
</nav>



</div>

</div>
 </div>
 </div>



<!--
       informacion que esta sobre el calendario de la sala

    -->
<div class="col-md-4 col-lg-5 vcenter" >
        <div style="height:7em;">
         
         <h4 ><p class="text-primary">EDIFICIO<?php ?> 
<h4 ><p class="text-primary">PISO<?php  ?></p></h4></p></h4> <h4 ><p class="text-primary">SALA<?php ?></p></h4>
          
         
        

          <div>
 

        </div>
        </div></div>






<!--
        aqui se muestran la informacion de las salas + horario

    -->


<div class="col-md-4 col-lg-10 vcenter" style="border:5px solid #fff">
        <div style="height:20em">
   
         <div class="container-fluid">
    
         <div class="row">

          <div class="col-md-1 " style="background:   #fff ;">
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
<div class="col-md-8 " style="background:   #fff ;">
                                                 
         

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


<div class="col-md-3 " style="background: #fff ;">

  <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:5px solid #fff" >

<div>
  <h4 ><p class="text-primary">IMPLEMENTOS</p></h4> 
  <th>Nombre</th>
  <th>Cantidad</th>
  <th>Estado</th>
  <?php

  include "conec.php";

  $sql=( 'SELECT FECHACOM,HORA,COMENTARIO,ESTADO,CANTIDAD,TIPOIMPLE,S.CODSALA
        FROM COMENTARIO C LEFT JOIN SALA S
 ON S.CODSALA=C.CODSALA INNER JOIN IMPLEMENTO I ON I.CODSALA=S.CODSALA
 WHERE S.CODSALA="B404";');
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);




 ?>
<table class="table table-bordered" border="0,5">

  <?php  
  for ($i=0; $i < $var; $i++) { 

      echo "<table class='table table-border' style='border:1px ' >
       
      
       <tr>
       <span style='cursor: pointer;'>

                     <td> ".$resultado[$i]['TIPOIMPLE']."</td>
                    <td >".$resultado[$i]['CANTIDAD']."</td>
                    <td >".$resultado[$i]['ESTADO']."</td>
        </span>
</th></tr>

      </table>";

 

    }
    
   

 ?>

</table>


</div>

</div>


         </div>
         </div>

         










 </body>                                                                 
 

   
 </html>



