<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php 

$usuarios=array(

'periodo 1' =>array(true,false,true,false,true,true,false),

'periodo 2' =>array(false,false,true,false,true,true,false),
'periodo 3' =>array(false,false,true,false,true,true,false),
'periodo 4' =>array(false,false,true,false,true,true,false),
'periodo 5' =>array(false,false,false,false,true,true,false),
'periodo 6' =>array(false,false,true,false,false,true,false),
'periodo 7' =>array(false,false,true,false,true,true,false),
'periodo 8' =>array(false,true,true,false,true,true,false),
'periodo 9' =>array(false,false,true,false,true,true,false),
'periodo 10' =>array(true,false,true,false,true,false,false),
'periodo 11' =>array(false,false,true,false,true,true,false),
'periodo 12' =>array(false,false,true,false,true,true,true)


);


    
 ?>

 <table style="border:10px solid #ccc"  class="table table-hover">
   <tr>
  <th>periodo</th>
  <th>L</th>
  <th>M</th>
  <th>X</th>
  <th>J</th>
  <th>V</th>
  <th>S</th>
  <th>D</th>

  </tr>
<?php 

foreach($usuarios as $periodo => $datos)
{

echo '<tr>';
echo '<td>'.$periodo.'</td>';

     foreach($datos as $disponible){
echo '<th>';

               if ($disponible==true) {
                 echo "horario disponile";
               }else {
                echo "no disponible";
               }

echo '</th>';


}
echo '</tr>';

}

 ?>

 </table>

 <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>




texto 

Año:<select name="ano">
        <?php
        for($i=date('o'); $i>=2010; $i--){
            if ($i == date('o'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select></div>


<div>
  Semestre:<br>
  <input type="radio" name="semestre" value="primersemenstre" required="">Primer Semestre <br>
  <input type="radio" name="semestre" value="segundosemestre" required="">Segundo Semestre<br>
    
</div>
<div>
 <?php
echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");
 
 
 ?>