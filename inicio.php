


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<title></title>
 	
 </head>
 <body>




<div class="col-md-12 " style="background:    #bedddb     ;"> 

  
  <div class="left"><p class="lead"><h3>SISTEMA GESTION SALAS</h3></div>

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
    <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Edificio</a></li>
    <li><a href="#">Piso</a></li> 
    <li><a href=sala.php>sala</a></li>
       
  </ul>

  
</div>




</div>




  </div>


      
     </div>




<div class="col-md-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:10em;border:10px solid #fff">
          <h1>salas</h1>
        </div>
        </div>
<!--
        aqui se muestran las salas

    -->

<div class="col-md-6 col-md-8 col-lg-10 vcenter" style="background: #e0f2f1 ;">
        <div style="height:20em;border:10px solid #fff">
   

 	

<?php
  
    include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);


 
   ?>                                                   
     
<table style="border:10px solid #ccc"  class="table table-hover">
 
 <?php

  include "conec.php";

  $sql="SELECT * FROM sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);


  
   // $varlink="http://localhost/ProyectoMultimedia1/sala.php?codsala=". $_REQUEST['codsala'];

    for ($i=0; $i < $var; $i++) { 
      echo "<table class='table table-bordered' style='border:1px solid #ccc'  class='table table-hover' >
      
       <tr><th> 
       <span style='cursor: pointer;' data-toggle='modal' data-target='#myModal1'>
                    ".'<a href=#><u>Sala </u></a>'.$resultado[$i]['CODSALA']."
        </span></td>
</th></tr>

      </table>";

    

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




