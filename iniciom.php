
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
 	<title></title>
 	
 </head>


 <body>




<div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;" >

  
  <div class="left" > <font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>
<a href="Loginsession/cerrar_session.php" class="pull-right">Salir</a>
  
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
    <li ><a >Inicio</a></li>
       
  
  <form action="<?php echo $_SERVER['iniciom.php'] ?>"   method="POST" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="radio" name="piso" value="1" checked value="1">Primer Piso<br>
        <input type="radio" name="piso" value="2" >Segundo Piso<br>
      <input type="submit" value="Enviar" class="btn btn-primary" ><hr/>
      </form>


       
  </ul>

  
</div>




</div>




  </div>


      
     </div>




<div class="col-md-6  col-lg-10 vcenter" style="border-top: 50px;" >
        <div style="height:10em;border:10px solid #fff">
          <h1>Edificio <?php echo $n; ?></h1>
          <h1>Piso <?php echo $piso; ?></h1>
         
        

         
        </div>
        </div>
<!--
        aqui se muestran las salas

    -->

<div class="col-md-6 col-md-8 col-lg-10 vcenter" style="background: # ;">
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




