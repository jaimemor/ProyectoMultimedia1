

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<title></title>
 	
 </head>
 <body>




<div class="col-md-12 " style="background: #87CEEB ;">

  
  <div class="left">SISTEMA SALAS</div>

  <div class="pull-right"><button type="button" class="btn btn-primary">Login</button></div>
</div>




<div class="row">


  <!--
        botonera

    -->
    <div class="col-xs-6 col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:10px solid #FFF">
          
<div><h4>ADMINISTRACION</h4></div>
<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
  <h2>menu</h2>
                  
  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href="#">Inicio</a></li>
    <li><a href=sala.php>sala</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">About</a></li>        
  </ul>
</div>




</div>




  </div>


      
     </div>




<div class="col-xs-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:10em;border:10px solid #fff">
          <h1>salas</h1>
        </div>
        </div>
<!--
        aqui se muestran las salas

    -->

<div class="col-xs-6 col-md-8 col-lg-10 vcenter" style="background: #F8F8FF ;">
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

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

    for ($i=0; $i < $var; $i++) { 
      echo "<table style='border:1px solid #ccc'  class='table table-hover'>

       <tr><th>".$resultado[$i]['codsala']."</th></tr>
       





      </table>";
    }


 ?>
 </table>
</div>
  


          


     </div>
    </div>

</div>










 </body>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>




