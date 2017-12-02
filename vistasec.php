


<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>


<?php include('horario.php');  ?>


  <title></title>


<div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;" 

  
  <div class="left" > <font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>

  
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

    
    

   <li><a href="solicitud.php">Solicitar sala</a></li>

         
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

    <li><a href="#">Generar Codigo QR</a></li>        
    <li><a href="#">Ver Estadisticas</a></li>        
  
 
 


  </form>
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
  foreach ($resultado as $row) {
      
            
          
   

      echo "<table class='table table-border' style='border:1px ' >
       
      
       <tr>
       <span style='cursor: pointer;'>

                     <td> ".$row['TIPOIMPLE']."</td>
                    <td >".$row['CANTIDAD']."</td>
                    <td >".$row['ESTADO']."</td>
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

         


<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:5px solid #fff" >
  <div>
    
    <h4><p class="text-primary">COMENTARIOS</p></h4>
    



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ingresar nuevo comentario</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
    <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Ingresa Comentario</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Enviar Comentario</button>
      </div>
    </div>
  </div>
</div>
  
</div>





<table class="table table-bordered" border="0,5" type="text">

  <?php  

  for ($i=0; $i < 2; $i++) { 


      echo "






      <table class='table table-border' style='border:1px ' >
      
       <tr>
       <span style='cursor: pointer;'>

                       <td> ".$resultado[$i]['COMENTARIO']."</td>
                    <td >".$resultado[$i]['FECHACOM']."</td>
                    <td >".$resultado[$i]['HORA']."</td>
        </span>
</th></tr>

      </table>";

 

    }
    

 
   

 ?>



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
   

<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="background:#000000;">
<div style="width: 100%; height:65px ;"></div>infomracion del footer</div>
</div>
</div>
</div>


 </footer>

   
 </html>



