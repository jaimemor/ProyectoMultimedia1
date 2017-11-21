

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<title></title>
 	
 </head>
 <body>



  
<div class="col-md-12 " style="background: #4682B4 ;">

  
  <div class="left">SISTEMA SALAS</div>

  <div class="right"><button type="button" class="btn btn-primary">Login</button></div>




</div>

<div class="container-fluid" class="left">
  <div class="row" class="left">




  </div></div>





<div class="row">
  <div class="col-md-9 col-md-push-3"><div class="left"><button type="button" class="btn btn-primary">otro boton</button></div>
  <div class="left"><button type="button" class="btn btn-primary">ejemplo de boton</button></div>

 </div>
  

  <div class="col-md-3 col-md-pull-9">
    

<div>Usuario: <?php // echo $_SESSION['login']; ?></div>
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
</select>
</div>

<div>
  Semestre:<br>
  <input type="radio" name="semestre" value="primersemenstre" required="">Primer Semestre <br>
  <input type="radio" name="semestre" value="segundosemestre" required="">Segundo Semestre<br>
    
</div>
  
  <div>
    

    Seleccione piso:  <select name="piso" id="">
        <option name="" value="piso">piso 1</option>
        <option value="piso">piso 2</option>
      </select>
      

  </div>

  </div>
</div>




<div class="container-fluid">
    
         <div class="row">

       



<div class="col-md-12 " class="center" style="background: #fff ;">

 	
<div>Usuario: <?php // echo $_SESSION['login']; ?></div>
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
</select>
</div>

<div>
	Semestre:<br>
	<input type="radio" name="semestre" value="primersemenstre" required="">Primer Semestre <br>
	<input type="radio" name="semestre" value="segundosemestre" required="">Segundo Semestre<br>
		
</div>
	
	<div>
		

    Seleccione piso:  <select name="piso" id="">
      	<option name="" value="piso">piso 1</option>
      	<option value="piso">piso 2</option>
      </select>
      

  </div>
  </div>
  </div>
	</div>

		 <h1>salas</h1>

<div class="container-fluid">
  
         <div class="row">

          <div class="col-md-1 " style="background: #fff ;"></div>
<div class="col-md-10 " style="background: #fff ;">





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
  


          <div class="col-md-1 " style="background: #fff ;"></div>


     

 </body>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>




