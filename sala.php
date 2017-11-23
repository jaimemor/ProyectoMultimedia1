



<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <title></title>


<div class="col-md-12 " style="background: #87CEEB ;">

  
  <div class="left">SISTEMA SALAS</div>

  <div class="pull-right"><button type="button" class="btn btn-primary">Login</button></div>
</div>




<div class="row">


  <!--
        botonera

    -->
    <div class="col-md-6 col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:10px solid #FFF">
          
<div><h4>ADMINISTRACION</h4></div>
<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
  <h2>menu</h2>
                  
  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href=inicio.php>Inicio</a></li>
    <li><a href=sala.php>sala</a></li>
    <li><a href="#">Solicitar Sala</a></li>
    <li><a href="#">About</a></li>        
  </ul>
</div>

</div>
 </div>
 </div>



<!--
       informacion que esta sobre el calendario de la sala

    -->
<div class="col-md-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:5em;border:10px solid #fff">
          <h1>salas</h1>
          <div>
 

        </div>
        </div></div>


<!--
        aqui se muestran la informacion de las salas + calendario

    -->


<div class="col-md-4 col-md-4 col-lg-10 vcenter" style="background: #F8F8FF ;">
        <div style="height:20em;border:10px solid #fff">
   
         <div class="container-fluid">
    
         <div class="row">
<div class="col-md-9 " ;">
                                                 
     
 <?php 

$usuarios=array(

' 1.-(08:00 -09:20)' =>array(true,false,true,false,true,true,false),
'2.-(09:25-10:45)' =>array(false,false,true,false,true,true,false),
'periodo 3' =>array(false,false,true,false,true,true,false),
'periodo 4' =>array(false,false,true,false,true,true,false),
'periodo 5' =>array(false,false,false,false,true,true,false),
'periodo 6' =>array(false,false,true,false,false,true,false),
'periodo 7' =>array(false,false,true,false,true,true,false),
'periodo 8' =>array(false,true,true,false,true,true,false),
'periodo 9' =>array(false,false,true,false,true,true,false),
'periodo 10' =>array(true,false,true,false,true,false,false),
'periodo 11' =>array(false,false,true,false,true,true,false),
'periodo 12' =>array(false,false,true,false,true,true,true)


);


    
 ?>

 <table style="border:10px solid #ccc"  class="table table-hover">
   <tr>
  <th>periodo</th>
  <th>Lunes</th>
  <th>Martes</th>
  <th>Miercoles</th>
  <th>Jueves</th>
  <th>Viernes</th>
  <th>Sábado</th>
  <th>Domingo</th>

  </tr>
<?php 

foreach($usuarios as $periodo => $datos)
{

echo '<tr>';
echo '<td>'.$periodo.'</td>';

     foreach($datos as $disponible){

if ($disponible==true) {
                 $texto= "horario disponile";
                  $css='color:  #58d68d ';

               }else {
                $texto= "no disponible";
                $css='color:  #e74c3c ';
               }

                  echo '<th style="'.$css.'" >';

          echo $texto;     

echo '</th>';


}
echo '</tr>';

}

 ?>

 </table>
 
 
 
</div>


<div class="col-md-3 well" style="background: #fff ;">

  <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 well" ;">


<div>
IMPLEMENTOS DE SALA

<tr>
  <td>echo=$implemento1=1</td>
  <td>echo=$implemento2=0</td>
  <td>echo=$implemento3=1</td>
</tr>
</div>

</div>
         </div>
         </div>

         
<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 well" ;">
  <div>
    HACER CAJA DE COMENTARIOS

<?php

  include "conec.php";

  $sql="SELECT * FROM sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

    for ($i=0; $i < $var; $i++) { 
      echo "<table 
       border-color='#cccccc' border='1' >
       
       <tr><th>COMENTARIO<td>".$resultado[$i]['implemento']."</td></th></tr>
      
      </table>";
    }


 ?>

  
</div>

 </div>
         </div>
         </div>
</div>---


</div>
 

  
  
</div>



</div>
</div>
</div>













 </body>                                                                 
 
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>



