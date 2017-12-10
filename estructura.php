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
	

<div style="background-color: #000; width: 100%; height:100px; ">


	</div>

</head>


	
<body>
	
<div class="row" >
<div class="container" style="width: 100%;" >


	<div style="background-color: #ccc; width: 20%; height:1000px; float: left;">
		
          
 <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href=inicio.php>Inicio</a></li>
   



        <form action="<?php echo $_SERVER['proceso.php'] ?>"   method="POST" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="radio" name="semestre" value="1" checked value="1">Primer Semestre<br>
        <input type="radio" name="semestre" value="2" >Segundo Semestre<br>
      <input type="submit" value="Enviar" class="btn btn-primary" ><hr/>
      </form>
      </ul>
	</div>

	<div style="background-color: #020; width: 60%; height:1000px; float: left;" >


		<div style="background-color: #ff2; width: 100%; height:100px; float: center;">

			<h3 ><p class="text-primary">SALA: <?php echo $varaibe;?></p></h3>

		</div>


		<div style="background-color: #f22; width: 100%; height:800px; float: left;">
		
			
            
<table class='table table-border' border="0.5" 
style="background-color: #ff5; width: 20%; height:600px; float: left;" >

            <th style="width:15%">periodo</th>
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

		<div style="background-color: #f72; width: 80%; height:800px; float: right;">


<table class="table table-bordered" border="1" 
style="background-color: #ff5; width: 100%; height:600px;" >
            
                   
                    
                    
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>

     
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

	<div style="background-color: #cc2; width: 20%; height:1000px; float: left;">
		


	</div>

		
	

	</div>
	</div>




</body>

<footer>

	<div class="row" >
<div class="container" style="width: 100%;" >
	
<div style="background-color: #c22; width: 100%; height:75px;"></div>
</div>
</div>

</footer>
</html>