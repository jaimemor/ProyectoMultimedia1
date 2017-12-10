 <?php

 error_reporting(0);
session_start();

$varsesion= $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
  echo 'Usted no tiene autorizacion';
  die();
}

require 'conec.php';
$smt = $conn->prepare("SELECT* FROM usuario WHERE RUT=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;



?>


 <?php 

     $facultad = $_REQUEST['nombre'];
      $piso = $_REQUEST['piso'];
     $nombre= $_SESSION['usuario'];

     


require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare("SELECT S.CODSALA,P.CODPISO,NOMBREED,NOMBREP
 FROM  EDIFICIO E JOIN PISO P ON E.CODED=P.CODED LEFT JOIN SALA S ON S.CODPISO=P.CODPISO
 WHERE E.CODED='$facultad' AND NOMBREP='$piso'");
      $sql->execute();
    $resultado = $sql->fetchAll();
    $conn =null;
    $var= count ($resultado);



  ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <?php  include('vista3.php'); ?>
  
 	<title></title>
 	
 </head>


 <body>




<div class="col-md-12 " style="background:#2E3D55;  height:50px; "> 

  
   <div class="left" ><font color="white"><h3>SISTEMA GESTION SALAS</h3></font>

   </div>

 <a href="Loginsession/cerrar_session.php" class="pull-right">Salir</a>

 

</div>




<div class="row">


  <!--
        botonera

    -->
    <div class="col-md-3 col-lg-2 vcenter">
        <div style="height:30em;border:10px solid #FFF">
          
<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
  
                  
   <ul class="nav nav-pills nav-stacked" role="tablist">

    <a style='cursor: pointer;'>Inicio</a><br>
       
   <a type="button" data-toggle="modal"
   data-target="#exampleModal" data-whatever="@getbootstrap" style='cursor: pointer;'>
     
     Buscar Sala
   </a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleccione Edificio y Piso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inicioprofe.php"  method="POST" enctype="multipart/form-data" accept-charset="utf-8">
          
<input type="radio" name="nombre" value="001" checked>Facultad de Ciencias e Ingenieria

<br>

<input type="radio" name="nombre" value="002" >Facultad de Humanidades

<br>

<input type="radio" name="piso" value="1" checked>Piso 1
              


<input type="radio" name="piso" value="2">Piso 2

<br>

<input type="submit" value="ENVIAR" class="btn btn-primary" ><hr/> 
        </form>
      </div>
      
    </div>
  </div>
</div>
      
  </ul>

  
</div>




</div>




  </div>


      
     </div>
     



<div class="col-md-12   col-lg-10" style="background:#fff;">


  <!--
        aqui se muestran las salas que solicito el profesor

    -->

 <div class="col-md-7  vcenter" style="background:   #fff ;  ">
                <h4 ">Salas solicitadas por <?php echo $nombre; ?></h4>

                <?php  
                 

          require "conec.php";
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
       $sql = $conn->prepare(" SELECT *
 FROM SOLICITUD SOL
   WHERE RUT='$nombre'");
      $sql->execute();
    $resul = $sql->fetchAll();
    $conn =null;
    $var2= count ($resul);



 ?>


            <table class="table table-bordered  pull-right" style='border:1px '>
                <th>Sala</th> 
                <th>Periodo</th>
                      <th>Dia</th>
                      <th>Ramo</th>
                     


                      <?php 

 for ($i=0; $i <$var2; $i++) { 
                      echo "  
<tr>
    <td> ".$resul[$i]['CODSALA']."</td>
    <td>".$resul[$i]['PERIODO']."</td>
    <td>".$resul[$i]['DIA']."</td>
 <td>".$resul[$i]['RAMO']."</td>

 </tr>
 
                      ";} ?>
            
            </table>

          </div>



<!--
        aqui se muestran las salas que se buscaron

    -->



<font color="black"><h4 class="text-center" >Seleccion De Salas</h4></font>
      
    <div class="col-md-5  vcenter" style="background: # ;">
        <div style="height:20em;border:10px solid #fff">
 <h3>Piso <?php echo $piso; ?></h3>
         
      

<table style="border:10px solid #ccc"  class="table table-hover">

  <?php 


 for ($i=0; $i < $var; $i++) { 

      echo "<table class='table table-border' style='border:1px ' >
      
       <tr> <td <style='WIDTH='50px';'>
         
       </style>
       <span style='cursor: pointer;'>
                    
   ".$resultado[$i]['CODSALA']."<a href='vistaprofe.php?id=".$resultado[$i]['CODSALA']."'>ver</a>
        

                    

        </span></td>
</tr>

      </table>";


    }
    
   

 ?>

 

 </table>
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




