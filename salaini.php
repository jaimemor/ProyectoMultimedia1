  <?php 

error_reporting(0);
$varaibe=$_REQUEST['id'];


 ?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <?php  include('vista3.php'); ?>
<?php include ('proceso.php');?>
	<title></title>
	
	

	<div class="row" >
<div class="container" style="width: 100%;" >
	


<div class="col-md-12" style="background-color: #2E3D55; height:95px; margin-top:-20px ; ">

  
 <h3  style=" margin-top:20px; color:#fff; " >SISTEMA GESTION SALAS</h3>

 
 
	</div>
	</div>
	</div>

</head>

<ol class="breadcrumb">
  <li class="active"><a href=inicio.php>Inicio</a></li>
  
 
  
   <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Semestre
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          

          <form action="<?php echo $_SERVER['proceso.php'] ?>"  
 method="POST" enctype="multipart/form-data" accept-charset="utf-8">
       <li> <input type="submit" name="semestre" value="1" >Primer Semestre<br> </li> 
        <input type="submit" name="semestre" value="2" >Segundo Semestre<br>  

      </form>
        </ul>
      </li>
  


    <a class="pull-right" href="Loginsession/login.php">Ingresar</a>
 
</ol>
	
  

<body>






	<div class="container" style="width: 100%;" >
<div class="row" >

<div class="col-md-1" style="background-color: #fff;" ></div>



	<div class="col-md-8" style="background-color: #fff; float: left;" >


		<div class="col-md-12" style="background-color: #fff; height:90px ; float: center;">

			<h3 ><p class="text-primary">SALA: <?php echo $varaibe;?></p></h3>

		</div>


		<div class="col-md-12" style="background-color: #fff;  float: left;">
		
			
            
<table class='table table-border' border="0.5" 
style="background-color: #fff; width: 15%; height:600px; float: left;" >

            <th style="width: 15%;">periodo</th>
            <tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">08:00<br>9:20</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">09:20<br>10:35</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">10:45<br>12:05</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">12:05<br>13:20</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">13:25<br>14:40</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">14:45<br>16:00</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">16:05<br>17:20</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">17:25<br>18:40</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">18:40<br>19:55</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">19:55<br>21:10</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">21:10<br>22:25</th>
              
              
           </tr><tr>
              <th class="text-center" WIDTH="50" HEIGHT="50">22:25<br>23:40</th>
              
              
           </tr>
          
          </table>

		<div style="background-color: #fff; width: 85%; height:800px; float: right;">


<table class="table table-bordered" border="1" 
style="background-color: #fff; width: 100%; height:600px;" >
            
                   
                    
                    
                    <th style="width: 15%; "> LUNES</th>
                    <th style="width: 15%;"> MARTES</th>
                    <th style="width: 15%; "> MIÉRCOLES</th>
                    <th style="width: 15%; "> JUEVES</th>
                    <th style="width: 15%;"> VIERNES</th>
                    <th style="width: 15%;"> SÁBADO</th>

     
            <?php foreach ($datos as $key => $value): ?>
                                
                                <tr >
                            <?php foreach ($value as $key => $periodo): ?>

                             <td  class="text-center"  HEIGHT="57"> 

                                        <?php if (!empty($periodo)) {
                                    
                                      echo $periodo[0]['NOMBRE'].'<br>'.$periodo[0]['RAMO'];
                                     
                                        }else{


                                          echo "
                                                <p class='text-success'>Disponible</p>
                                          " ;
                                        }


                                         ?>
                                </td>
                           
                            <?php endforeach ?>

                            </tr>

                        <?php endforeach ?>


        </table>

	</div>
		</div>

	</div>

	<div class="col-md-3" style="background-color: #fff; margin-top:80px ; float: left;">
		
<h4 ><p class="text-primary">IMPLEMENTOS</p></h4> 
  <th>Nombre</th>
  <th>Cantidad</th>
  <th>Estado</th>
  
<table class="table table-bordered" border="0,5">


  <?php  
  
  
include "conec.php";

  $sql=( "SELECT ESTADO,CANTIDAD,TIPOIMPLE,S.CODSALA
        FROM  SALA S JOIN IMPLEMENTO I ON I.CODSALA=S.CODSALA
 WHERE S.CODSALA='".$_REQUEST['id']."'");

  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();

  
$var= count ($resultado);

    
   


  for ($i=0; $i < $var; $i++) { 

      echo "<table class='table table-border' style='border:1px ' >
       
      
       <tr>
       <span style='cursor: pointer;'>

                     <td class='text-center'  HEIGHT='40'> ".$resultado[$i]['TIPOIMPLE']."</td>
                    <td class='text-center'  HEIGHT='40'>".$resultado[$i]['CANTIDAD']."</td>
                    <td class='text-center'  HEIGHT='40'>".$resultado[$i]['ESTADO']."</td>
        </span>
</th></tr>

      </table>";

 

    }
 ?>

</table>

	</div>

		
	<div class="col-md-1" style="background-color: #fff;" ></div>

	</div>
	</div>




</body>

<footer>

	<div class="row" >
<div class="container" style="width: 100%;" >
	
<div  class="col-md-12" style="background-color: #000; height:75px;">
	
texto para footer

</div>
</div>
</div>

</footer>
</html>