<?php


error_reporting(0);
session_start();

$varsesion= $_SESSION['usuario'];

if($varsesion == null || $varsesion=''){
  echo 'Usted no tiene autorizacion';
  die();
}

require 'conec.php';
$smt = $conn->prepare("SELECT * FROM usuario WHERE RUT=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;


$secre=$_SESSION['usuario'];

?>




<?php 
 require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare("SELECT S.CODSALA,P.CODPISO,RUT,NOMBRE
 FROM  USUARIO U JOIN PISO P ON U.CODPISO=P.CODPISO JOIN SALA S ON S.CODPISO=P.CODPISO
 WHERE RUT='$secre'");
      $sql->execute();
    $resultado = $sql->fetchAll();
    $conn =null;
    $var= count ($resultado);

for ($i=0; $i <$var; $i++) { 
  $sala1= $resultado[$i]['CODSALA'];
   $codigop=$resultado[$i]['CODPISO'];
   $nombre =$resultado[$i]['NOMBRE'];
   $r =$resultado[$i]['RUT'];
  
   
 }


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
 	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <?php 

  header("Content-Type: text/html;charset=utf-8");

    ?>

  <?php  include('vista3.php'); ?>

 
 <div class="container" style="width: 100%;" >
 	<div class="row" >

  


<div class="col-md-12" style="background-color: #2E3D55; height:95px; margin-top:-20px ; ">

  
  <font color="white" class="left" ><h3>SISTEMA GESTION SALAS</h3></font>


  </div>
  </div>
  </div> 	
 </head>


 <body>

<!--
        botonera

    -->
<ol class="breadcrumb">
  <li class="active">Inicio</li>
  <a href="Loginsession/cerrar_session.php" class="pull-right">Salir</a>
</ol>





<div class="container" style="width: 100%;" >
<div class="row">

 <div class="col-md-1 vcenter">
       

  </div>




<div class="col-md-8   col-lg-5 vcenter" style="background:   #fff ;">

    <h1>Secretaria <?php echo $nombre; ?></h1>
          
  

<div class="col-md-12  vcenter" style="margin-top:10px" ;">
        <div style="height:20em;border:10px solid #fff">
   

 	

<table style="border:10px solid #ccc"  class="table table-hover">

  <?php 

   
 for ($i=0; $i < $var; $i++) { 

      echo "<table class='table table-border' style='border:1px ' >
      
       <th> 
       <span style='cursor: pointer;'>
                    ".$resultado[$i]['CODSALA']."<a href='vistasec.php?id=".$resultado[$i]['CODSALA']."'>ver</a>
        </span></th>

      </table>

";

    }
 

 ?>

 
 </table>
</div>
  
     </div>
     </div>
    




<div class="col-md-3 " style="background:#fff ; float: right;">
  <div class="col-md-12 " style="background:#fff ; ">


<h4>Buscar salas por profesor</h4>
<form action="inicios.php" class="navbar-form navbar-left" role="search">
       
        <div class="form-group">
          <input name='nombre' type="text" value"" maxlength="20" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      
      </form>
                

                <?php  
                 
 $nombre = $_REQUEST['nombre'];

          require "conec.php";
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
       $sql = $conn->prepare(" SELECT CODSALA,PERIODO,DIA,RAMO, NOMBRE
 FROM SOLICITUD SOL join USUARIO U ON SOL.RUT=U.RUT
   WHERE  NOMBRE='$nombre'");
      $sql->execute();
    $resultado = $sql->fetchAll();
    $conn =null;
    $var= count ($resultado);

 foreach ($variable as $row) {
   $nombre=$row['nombre'];
 }
 


 ?>

<h4>Salas solicitadas por <?php echo $nombre; ?></h4>
                
            <table class="table table-bordered" style='border:1px '>
                <th>Sala</th> 
                <th>Periodo</th>
                      <th>Dia</th>
                      <th>Ramo</th>
<?php  
                      for ($i=0; $i < $var; $i++) { 
 



              echo "

            <tr>
              <td>".$resultado[$i]['CODSALA']."</td>
              <td>".$resultado[$i]['PERIODO']."</td>
              <td>".$resultado[$i]['DIA']."</td>
              <td>".$resultado[$i]['RAMO']."</td>
            </tr>
            
"; 
          }?>
</table>
          </div>
          </div>
      
   












    </div>
    </div>
    </div>
    </div>
   












 </body>


<footer>

  <div class="row" >
<div class="container" style="width: 100%;" >
  
<div style="background-color: #000; width: 100%; height:75px; margin-top:40px ;">
  
teto para footer

</div>
</div>
</div>

</footer>
 </html>




