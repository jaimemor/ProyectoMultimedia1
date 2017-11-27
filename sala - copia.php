
<?php 





  include "conec.php";

  $sql="SELECT * FROM solicitud ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

for ($i=0; $i < $var; $i++) { 
  

       $var3=$resultado[$i]['codsala'];
       $var1=$resultado[$i]['CODSOL'];
       $var2=$resultado[$i]['DIA'];
     


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






  <title></title>


<div class="col-md-12 " style="background:#bedddb;">

  
  <div class="left" ><p class="lead"><h3>SISTEMA GESTION SALAS</h3></div>

  <div class="pull-right" style="background:  #e0f2f1  ;">
<button type="button" class="btn btn-primary">Login</button>

  </div>
</div>




<div class="row">


  <!--
        botonera

    -->
    <div class="col-md-6 col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:10px solid #FFF">
          

<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
 
                 

  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href=inicio.php>Inicio</a></li>

    
    <li><a href="#">Solicitar Sala</a></li>
    <li><a href="#">seleccion de piso</a></li>
             
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
  
 
 <li><a href="#">Buscar Por Profesor</a></li> </ul>
  <nav class="navbar navbar-light bg-faded">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


  </form>
</nav>












</div>

</div>
 </div>
 </div>



<!--
       informacion que esta sobre el calendario de la sala

    -->
<div class="col-md-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:7em;">
         
         <h3>SALA <?php echo $var3; ?></h3><h4>Edificio Facultad</h4>
         <h4>Año 2017</h4>

          <div>
 

        </div>
        </div></div>






<!--
        aqui se muestran la informacion de las salas + horario

    -->


<div class="col-md-4 col-md-4 col-lg-10 vcenter" style="border:10px solid #fff">
        <div style="height:20em">
   
         <div class="container-fluid">
    
         <div class="row">
<div class="col-md-9 " style="background:   #e0f2f1 ;">
                                                 
     
 <?php 
  



  include "conec.php";

  $sql="SELECT * FROM solicitud ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

for ($i=0; $i < $var; $i++) { 
  

       $var3=$resultado[$i]['codsala'];
       $var1=$resultado[$i]['CODSOL'];
       $var2=$resultado[$i]['DIA'];
       
     


    }




$usuarios=array(

      
'08:00-09:20' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'09:25-10:45' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'09:25-10:35' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'10:45-12:00' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'12:05-13:20' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'13:25-14:45' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'14:45-16:00' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'16:05-17:20' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'17:25-18:40' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'18:40-19:55' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'19:55-21:10' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'21:10-22:25' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'22:25-23:40' =>array('lunes','martes','miercoles','jueves','viernes','sabado')




);


    
 ?>

 <table style="border:10px solid #e0f2f1"  class="table table-bordered">
   <tr>
  
  
                    <th style="width:5%">Periodo</th>
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>
 

  </tr>
<?php 




foreach($usuarios as $periodo => $datos)
{

echo '<tr>';
echo '<td>'.$periodo.'</td>';

     foreach($datos as $disponible){

if ($disponible==$var2) {

                $texto= $var3.'<br>'.$var2.'<br>'.$var1.'<br>';

                
                 // $css= ;

               }else {
                $texto= "";
                
               }

                  echo '<th style="style="background:#ccc ; color:#3498db " style="width:5%" "';

  echo $texto;


          
       

echo '</th>';


}
echo '</tr>';

}


 ?>




 </table>
 
 
  

</div>


<div class="col-md-3 " style="background: #fff ;">

  <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >
<?php  
include "conec.php";

  $sql="SELECT implemento,codsala,codim FROM sala inner join implemento on 'implemento.codim'='sala.codim'";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

for ($i=0; $i < $var; $i++) { 
  

       $var=$resultado[$i]['implemento'];
       
       
     


    }?>
<div>
  <h4 style="color: #000;">IMPLEMENTOS DE SALA</h4> 


<tr>
  <td><br><?php  echo $var;?></td>

  
</tr>
</div>

</div>
         </div>
         </div>

         
<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >
  <div>
    <h4 style="color: #000;">COMENTARIOS</h4>
    
 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ingresar nuevo comentario</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
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
 

  
  
</div>



</div>
</div>
</div>













 </body>                                                                 
 <footer>
   

<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="background:#000000;">
<div style="width: 100%; height:65px ;"></div>infomracion del footer
</div>
</div>
</div>

 </footer>

   
 </html>



