
  <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<div class="container-fluid">

         <div class="row">
<div class="col-md-6 well" style="background: #fff ;">
  
  <div><h1>vista echo=$sala</h1></div>
</div>
<div class="col-md-6 well" style="background: #fff ;">


<div><h1>mostrar rut de profesor o secretaria o mayordomo</h1></div>


</div>


</div>
</div>





  <div class="container-fluid">
  
    
         <div class="row">
<div class="col-md-2 well" style="background: #fff ;">
IMPLEMENTOS DE SALA

<tr>
  <td>echo=$implemento1=1</td>
  <td>echo=$implemento2=0</td>
  <td>echo=$implemento3=1</td>
</tr>
</div>






<div class="col-md-8 well" style="background: #fff ;">
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

  
  
</div>
<table border="0,5" class="table table-hover">

  
  <div>mostrar en tabla periodos de cada sala</div>
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
 <?php
echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");
 
 
 ?>

 </table>
</div>
  
<div>mostrar informacion de encargado de sala</div>
<div class="col-md-2 well" style="background: #fff ;">
 HACER CAJA DE COMENTARIOS

<tr>
  
   <td>comentario de sala1</td><br>
    <td>comentario de sala2</td><br>
</tr>




</div>
 </body>                                                                 
 
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
 </html>

