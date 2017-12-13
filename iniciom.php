
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


$mayor=$_SESSION['usuario'];



?>




<?php 
 require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare("SELECT e.CODED,rut,nombreed
 FROM  USUARIO u join edificio e ON u.CODED = e.CODED
 WHERE  RUT='$mayor'");
      $sql->execute();
    $resultado = $sql->fetchAll();
    $conn =null;
    $var= count ($resultado);

foreach ($resultado as $row) {
  $edificio =$row['CODED'];
  $o =$row['rut'];
  $n =$row['nombreed'];
}

 


 ?>

<?php 

$piso = $_REQUEST['piso'];
 require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare("SELECT e.CODED,p.CODPISO,CODSALA
 FROM  edificio e join piso p ON p.CODED = e.CODED
   JOIN sala s ON p.CODPISO = s.CODPISO
 WHERE  e.CODED='$edificio' AND p.NOMBREP='$piso'");
      $sql->execute();
    $resultado = $sql->fetchAll();
    $conn =null;
    $var= count ($resultado);

for ($i=0; $i <$var; $i++) { 
$sala =$resultado[$i]['CODED'];
$nombre =$resultado[$i]['NOMBREP'];
$p =$resultado[$i]['CODPISO'];
$sala =$resultado[$i]['CODSALA'];
 

 }


 ?>

 


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	

  <?php  include('vista3.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	

  <div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;" >

  
  <div class="left" > <font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>

  
</div>
 	
 </head>



<ol class="breadcrumb">
  <li class="active">Inicio</li>

   <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Selecion de piso
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          

          <form action="<?php echo $_SERVER['iniciom.php'] ?>"   method="POST" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="submit" name="piso" value="1" >Primer Piso<br>
        <input type="submit" name="piso" value="2" >Segundo Piso<br>
      
      </form>
        </ul>
      </li>

 

  <a href="Loginsession/cerrar_session.php" class="pull-right">Salir</a>
</ol>

 <body>







<div class="container" style="width: 100%;" >

<div class="row">


    <div class="col-md-1 vcenter">
        

  </div>




<!--
        aqui se muestran las salas

    -->

<div class="col-md-7  col-lg-5 vcenter" style="background: # ;">
  <h1>Edificio <?php echo $n; ?></h1>
          <h1>Piso <?php echo $piso; ?></h1>
  <div class="col-md-12  vcenter"">

 
        <div style="height:20em;border:10px solid #fff">
   

 	

<table style="border:10px solid #ccc"  class="table table-hover">

  <?php 



   
 for ($i=0; $i < $var; $i++) { 

      echo "<table class='table table-border' style='border:1px ' >
      
       <th> 
       <span style='cursor: pointer;'>
                    ".$resultado[$i]['CODSALA']."<a href='vistamay.php?id=".$resultado[$i]['CODSALA']."'>ver</a>
        </span></th>

      </table>";

    }
    
   

 ?>

 

 </table>
</div>
  


          


     </div>
     </div>







<div class="col-md-3 " style="background:#fff ; float: right;">

  <div class="col-md-12 " style="background:#fff ; ">


<h4>Buscar salas por profesor</h4>
<form action="iniciom.php" class="navbar-form navbar-left" role="search">
       
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
 <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="background:#000000;">
<div style="width: 100%; height:65px ;"></div>infomracion del footer
</div>
</div>
</div>

 </footer>
 </html>




