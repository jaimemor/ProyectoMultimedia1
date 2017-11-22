<?php 


if (isset($_GET['codsala']) ) {
    $rut = (String) $_GET['codsala'];

} else {

    $rut = "sala no existe";
    echo "rut no valido";
}

if ($rut!='distintoderut') {

    

  try{

     // $conn = new PDO('mysql:host=localhost;dbname=basededatos', $usuario, $contra);
    require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare('SELECT * FROM sala WHERE codsala = :codsala');
      $sql->execute(array('codsala' => $rut));
    $resultado = $sql->fetchAll();

   

      foreach ($resultado as $row) {

          
      }

  }catch(PDOException $e){

      echo "ERROR: " . $e->getMessage();

  }
           


        }
          
?>



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
        <div style="height:15em;border:10px solid #fff">
          <h1>salas</h1>
          <div>
 Año:<select name="ano">
        <?php
        for($i=date('o'); $i>=2010; $i--){
            if ($i == date('o'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select></div>


<div>
  Semestre:<br>
  <input type="radio" name="semestre" value="primersemenstre" required="">Primer Semestre <br>
  <input type="radio" name="semestre" value="segundosemestre" required="">Segundo Semestre<br>
    
</div>
<div>
 <?php
echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");
 
 
 ?>

        </div>
        </div></div>


<!--
        aqui se muestran la informacion de las salas + calendario

    -->


<div class="col-md-4 col-md-4 col-lg-10 vcenter" style="background: #F8F8FF ;">
        <div style="height:20em;border:10px solid #fff">
   
         <div class="container-fluid">
    
         <div class="row">
<div class="col-md-9 well" ;">
<?php
  
    include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
   ?>                                                   
     
<table style="border:10px solid "  class="table table-hover">
 
 
 <?php

  include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
  $lunes;
  $martes;
  $miercoles;
  $jueves;
  $viernes;
  $sabado;
 $semana = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");


   echo '<table><tr>';
    foreach ($semana as $dia) {
          echo "<td>$dia</td>";
    }
    echo '</tr></table>';

    for ($i=0; $i < $var; $i++) { 

       

      echo "<table style='border:1px '  class='table table-hover'>

       <tr><th>".$resultado[$i]['codsala']."</th></tr>
       <tr><th>".$resultado[$i]['implemento']."</th></tr>
       <tr><th>".$resultado[$i]['periodo']."</th></tr>
       <tr><th>".$resultado[$i]['dia']."</th></tr>
       
      </table>";
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


tabla prueba










 </body>                                                                 
 
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>



