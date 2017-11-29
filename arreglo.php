<?php 

  function selecdia ($DIA,$PERIODO){
 include "conec.php";

 $sql="SELECT * FROM solicitud where DIA=? and PERIODO=?";
  $smt=$conn->prepare($sql);
  $smt->bindParam(1,$DIA);
  $smt->bindParam(2,$PERIODO);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
 

 return $resultado;


 }




$datos=array();

for ($i=0; $i < 6; $i++) { 
	
	$datos['periodo1'][$i]=selecdia(1,$i+1);
}
for ($i=0; $i < 6; $i++) { 
	
	$datos['periodo2'][$i]=selecdia('2',$i+1);
}
for ($i=0; $i < 6; $i++) { 
	
	$datos['3'][$i]=selecdia('3',$i+1);
}
for ($i=0; $i < 6; $i++) { 
	
	$datos['4'][$i]=selecdia('4',$i+1);
}
for ($i=0; $i < 6; $i++) { 
	
	$datos['5'][$i]=selecdia('5',$i+1);
}


for ($i=0; $i < 13; $i++) { 
	
	$datos['lunes'][$i]=selecdia('lunes',$i+1);
}

for ($i=0; $i < 13; $i++) { 
	
	$datos['martes'][$i]=selecdia('martes',$i+1);
}

for ($i=0; $i < 13; $i++) { 
	
	$datos['miercoles'][$i]=selecdia('miercoles',$i+1);
}

for ($i=0; $i < 13; $i++) { 
	
	$datos['jueves'][$i]=selecdia('jueves',$i+1);
}

for ($i=0; $i < 13; $i++) { 
	
	$datos['viernes'][$i]=selecdia('viernes',$i+1);
}

for ($i=0; $i < 13; $i++) { 
	
	$datos['sabado'][$i]=selecdia('sabado',$i+1);
}


/*foreach ($datos['lunes'] as $key => $value) {
	if (!empty($value)) {
		echo $value[0]['RUT'];
		echo '<br>';
	}
}*/


echo "<pre>";
print_r($datos);
echo "</pre>";

 ?>

  <div class="col-md-12">
            <table class="table table-bordered" border="1"><tbody>
                <tr>
                    <th style="width:5%">PERIODO</th>
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>
                </tr>
               
                <tr>
                    <td style="background:#eaf3f9;">08:00 09:15</td>
                   
                    <td class="text-center">

                    <?php if(!empty($datos['lunes'][3][0]['RUT'])) echo $datos['lunes'][3][0]['RUT'] ?>
                    		

                    	</td>


					     
                    	
					<?php //if(!empty($datos['martes'][1][0]['RUT']))
					// echo $datos['martes'][1][0]['RUT'] ?>
						





                    
                    <td class=" text-center">

                    	<?php if(!empty($datos['miercoles'][3][0]['RUT'])) echo $datos['miercoles'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['jueves'][3][0]['RUT'])) echo $datos['jueves'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['viernes'][3][0]['RUT'])) echo $datos['viernes'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['sabado'][3][0]['RUT'])) echo $datos['sabado'][3][0]['RUT'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">09:20 10:35</td>
                   
                    <td class="text-center"><?php if(!empty($datos['lunes'][3][0]['RUT'])) echo $datos['lunes'][3][0]['RUT'] ?></td>
                    <td class="text-center">
                    	
					<?php if(!empty($datos['martes'][3][0]['RUT'])) echo $datos['martes'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	
                    	<?php if(!empty($datos['miercoles'][3][0]['RUT'])) echo $datos['miercoles'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['jueves'][3][0]['RUT'])) echo $datos['jueves'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['viernes'][3][0]['RUT'])) echo $datos['viernes'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['sabado'][3][0]['RUT'])) echo $datos['sabado'][3][0]['RUT'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">10:45 12:05</td>
                   
                    <td class="text-center"><?php if(!empty($datos['lunes'][3][0]['RUT'])) echo $datos['lunes'][3][0]['RUT'] ?></td>
                    <td class="text-center">
                    	
					<?php if(!empty($datos['martes'][3][0]['RUT'])) echo $datos['martes'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	
                    	<?php if(!empty($datos['miercoles'][3][0]['RUT'])) echo $datos['miercoles'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['jueves'][3][0]['RUT'])) echo $datos['jueves'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['viernes'][3][0]['RUT'])) echo $datos['viernes'][3][0]['RUT'] ?>
                    </td>
                    <td class=" text-center">
                    	<?php if(!empty($datos['sabado'][3][0]['RUT'])) echo $datos['sabado'][3][0]['RUT'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">12:05 13:20</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">13:25 14:40</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">14:45 16:00</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">16:05 17:20</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr
                ><tr>
                    <td style="background:#eaf3f9;">17:25 18:40</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">18:40 19:55</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">19:55 21:10</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">21:10 22:25</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">22:25 23:40</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"> </td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
            </tbody>
        </table>    



      

       


        <table style="border:10px solid #e0f2f1"  class="table table-bordered">
   <tr>
  
  
                    <th style="width:5%">PERIODO</th>
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>
 

  </tr>




<?php foreach ($datos as $key => $value): ?>
								
								<tr>
							<?php foreach ($value as $key => $periodo): ?>

							 <td class="text-center"> 

										<?php if (!empty($periodo)) {
											
							  echo $periodo[0]['RUT'].'<br>';

							  echo $periodo[0]['CODSOL'];
										} ?>
								</td>

							<?php endforeach ?>

							</tr>

						<?php endforeach ?>



 </table>