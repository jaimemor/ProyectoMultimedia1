 <?php 
require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare(' SELECT NOMBREED,P.CODPISO,NOMBREP
 FROM  EDIFICIO E JOIN PISO P ON E.CODED=P.CODED
 WHERE E.CODED="001" AND NOMBREP="1";');
      $sql->execute();
    $resultado = $sql->fetchAll();
    $conn =null;
    $var= count ($resultado);

foreach ($resultado as $row) {
        
          
        }

  ?>

<?php 
 require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare(' SELECT S.CODSALA,P.CODPISO
 FROM  EDIFICIO E JOIN PISO P ON E.CODED=P.CODED LEFT JOIN SALA S ON S.CODPISO=P.CODPISO
 WHERE E.CODED="002" AND NOMBREP="1";');
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




<div class="col-md-12 " style="background:#103C70  ;"> 

  
   <div class="left" ><font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>

  <div class="pull-right">
    <a type="button" class="btn btn-primary" href="Loginsession/login.php">LOGIN</a>

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
    <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Edificio</a></li>
    <li><a href="#">Piso</a></li> 
    <li><a href=vistasec.php>visata secretaria</a></li>
    <li><a href=vistapro.php>vista profe</a></li>
       
  </ul>

  
</div>




</div>




  </div>


      
     </div>




<div class="col-md-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:10em;border:10px solid #fff">
          <h1>Edificio <?php echo $row['NOMBREED'];?></h1>
          <h1>Piso <?php echo $row['NOMBREP']; ?></h1>
         
        </div>
        </div>
<!--
        aqui se muestran las salas

    -->

<div class="col-md-6 col-md-8 col-lg-10 vcenter" style="background: #e0f2f1 ;">
        <div style="height:20em;border:10px solid #fff">
   

 	

<table style="border:10px solid #ccc"  class="table table-hover">

  <?php 



   
 for ($i=0; $i < $var; $i++) { 

      echo "<table class='table table-bordered' style='border:1px ' >
      
       <tr><th> 
       <span style='cursor: pointer;'>
                    ".'<a href=http://localhost/ProyectoMultimedia1/vistasec.php?codsala=><u>Sala </u></a>'.$resultado[$i]['CODSALA']."
        </span></td>
</th></tr>

      </table>";

    $varlink="http://localhost/ProyectoMultimedia1/vistasec.php?codsala=CODSALA";

    }
    
   

 ?>

 

 </table>
</div>
  


          


     </div>
    </div>

</div>










 </body>

 <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="background:#000000;">
<div style="width: 100%; height:65px ;"></div>infomracion del footer
</div>
</div>
</div>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>




