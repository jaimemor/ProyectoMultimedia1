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

  <div class="right"><button type="button" class="btn btn-primary">Login</button></div>
</div>




<div class="row">


	<!--
				botonera

    -->
    <div class="col-xs-6 col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:10px solid #FFF">
        	
<div><h4>ADMINISTRACION</h4></div>
<div class="btn-group-vertical ">



<div class="btn-group">

  <button type="button" class="btn btn-primary">1</button>
  <button type="button" class="btn btn-default">2</button>
  <button type="button" class="btn btn-default">2</button>
  <button type="button" class="btn btn-default">2</button>
  <button type="button" class="btn btn-default">2</button>
 
  <div class="btn-group">

  	 <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn btn-primary dropdown-toggle"
            data-toggle="dropdown">
      Seleccion De Piso
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Enlace #1</a></li>
      <li><a href="#">Enlace #2</a></li>
    </ul>
  </div>
</div>




  </div>


        </div>
    </div><!--
				titulo y otros

    --><div class="col-xs-6 col-md-8 col-lg-10 vcenter">
        <div style="height:6em;border:15px solid #fff">
        	

          <div><h3>salas</h3></div>
          <div><h3>salas</h3></div>




        </div>
    </div>


<!--
				aqui se muestran las salas

    -->

<div class="col-xs-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:30em;border:10px solid #fff">
        	
<?php
  
    include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
   ?>                                                   
     
<table  border-color="#ffffff" border="1" class="table table-hover">
 
 <?php

  include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

    for ($i=0; $i < $var; $i++) { 
      echo "<table 
       border-color='#cccccc' border='1' >
       <tr><th>sala<td>".$resultado[$i]['codsala']."</td></th></tr>
       <tr><th>implemento<td>".$resultado[$i]['implemento']."</td></th></tr>





      </table>";
    }


 ?>
 </table>






        </div>
    </div>

</div>


 	</body>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>


 