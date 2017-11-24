
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <title></title>


<div class="col-md-12 " style="background:     #bedddb         ;">

  
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
        <div style="height:5em;">
         <h3>INFORMACION SALA <?php echo $var3; ?></h3>
          <div>
 

        </div>
        </div></div>


<!--
        aqui se muestran la informacion de las salas + calendario

    -->


<div class="col-md-4 col-md-4 col-lg-10 vcenter" >
        <div style="height:20em">
   
         <div class="container-fluid">
    
         <div class="row">
<div class="col-md-9 " style="background:   #e0f2f1   ;">
                                                 
     
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

      
' 1.-(08:00 -09:20)' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'2.-(09:25-10:45)' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
$periodo='09:25-10:45' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 4' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 5' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 6' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 7' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 8' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 9' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 10' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 11' =>array('lunes','martes','miercoles','jueves','viernes','sabado'),
'periodo 12' =>array('lunes','martes','miercoles','jueves','viernes','sabado')



);



    
 ?>

 <table style="border:10px solid #e0f2f1"  class="table table-hover">
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

if ($disponible==$var2) {

                $texto= $var3.'<br>'.$var2.'<br>'.$var1.'<br>';

                
                  $css='color:  #000 ';

               }else {
                $texto= "";
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
IMPLEMENTOS DE SALA

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
       border-color='#e0f2f1 ' border='1' >
       
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



