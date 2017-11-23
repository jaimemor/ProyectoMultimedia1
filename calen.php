
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