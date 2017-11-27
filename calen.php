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


<?php
  include "conec.php";
  $sql="SELECT * FROM sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 
    for ($i=0; $i < $var; $i++) { 
      echo "<table 
       border-color='#cccccc' border='1' >
       
       <tr><th>COMENTARIO<td>".$resultado[$i]['implemento']."</td></th></tr>
      
      </table>";
    }
 


require "conec.php";

$rut="404";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare('SELECT * FROM sala');
      $sql->execute(array('codsala' => $rut));
    $resultado = $sql->fetchAll();

   

      foreach ($resultado as $row) {

          
      }

 ?>
 

 <table style="border:1px solid "  class="table table-hover" >
  <tr>
    <th>Periodo</th>
    <th>Lunes=1</th>
    <th>Martes=2</th>
    <th>Miercoles=3</th>
    <th>Jueves=4</th>
    <th>Viernes=5</th>
    <th>Sábado=6</th>
  </tr>

  <tr>
    <td>1</td> 
    <td>1.1 <?php echo$row["implemento"].$row["codsala"] ?></td>
    <td>1.2</td>
    <td>1.3</td>
    <td>1.4</td>
    <td>1.5</td>
    <td>1.6 <?php echo$row["implemento"].$row["codsala"] ?></td>
    <td>1.7</td>
    
  </tr>

  <tr>
    <td>2</td>
    <td>2.1</td>
    <td>2.2</td>
    <td>2.3</td>
    <td>2.4</td>
    <td>2.5</td>
    <td>2.6</td>
    <td>2.7</td>
  </tr>
	
	<tr>
    <td>3</td>
    <td>3.1</td>
    <td>3.2</td>
    <td>3.3</td>
    <td>3.4</td>
    <td>3.5</td>
    <td>3.6</td>
    <td>3.7</td>
  </tr>
	
		<tr>
    <td>4</td>
    <td>4.1</td>
    <td>4.2</td>
    <td>4.3</td>
    <td>4.4</td>
    <td>4.5</td>
    <td>4.6</td>
    <td>4.7</td>
  </tr>
	
</table>

  

<?php 

$usuarios=array(

'periodo 1' =>array(true,false,true,false,true,true,false),

'periodo 2' =>array(false,false,true,false,true,true,false),

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

foreach($usuarios as $periodo => $dias)
{

echo '<tr>';
echo '<td>'.$periodo.'</td>';
echo '</tr>';

}

 ?>

 </table>