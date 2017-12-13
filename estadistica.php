<?php 
$varaibe=$_REQUEST['id'];
          

 ?>


<?php
require "conec.php";

          $smt = $conn->prepare("SELECT COUNT(CODIM) FROM implemento WHERE ESTADO='malo'" ); 
          $smt -> execute(); 
          $result= $smt->fetchall();
          $sm = $conn->prepare("SELECT COUNT(CODIM) FROM implemento WHERE ESTADO='bueno'" ); 
          $sm -> execute(); 
          $resulta= $sm->fetchall();
          $conn=null;
?>



<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <?php  include('vista3.php'); ?>
 
  
  
 
<div class="row" >
<div class="container" style="width: 100%;" >
  


<div class="col-md-12" style="background-color: #2E3D55; height:95px; margin-top:-40px ; ">

  
  <font color="white" class="left" ><h3>SISTEMA GESTION SALAS</h3></font>



  </div>
  </div>
  </div>
</head>



<ol class="breadcrumb">
 
  <?php echo "

    <li><a href='http://localhost/ProyectoMultimedia1/inicios.php'>Volver</a></li>         
";  ?>
</ol>


<body>
  

  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
         
          ['implemento', 'Cantidad implemento malo'],
          ['implemento malo',   <?php echo $result[0][0]; ?>],
          ['implemento bueno',    <?php echo $resulta[0][0]; ?>]
         

         
        ]);

        var options = {
          title: 'Estadistica de implementos buenos y malos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartt'));

        chart.draw(data, options);
      }
    </script>
  
  
    
 


<?php 
require "conec.php";

          $smt = $conn->prepare("SELECT COUNT(CODSOL) FROM Solicitud WHERE semestre='1'" ); 
          $smt -> execute(); 
          $resultado= $smt->fetchall();
          $sm = $conn->prepare("SELECT COUNT(CODSOL) FROM Solicitud WHERE semestre='2'" ); 
          $sm -> execute(); 
          $resultadoo= $sm->fetchall();
          $conn=null;
          //print_r($resultado);
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
         
          ['sala', 'Cantidad Solicitud'],
          ['primer semestre',   <?php echo $resultado[0][0]; ?>],
          ['segundo semestre',    <?php echo $resultadoo[0][0]; ?>]
         

         
        ]);

        var options = {
          title: 'Estadistica uso de salas por semestre'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  

   
  <div class="row" >
<div class="container" style="width: 100%;" >
  

  
    <div class="col-md-6 " id="piechart" style=" height: 500px;">
      
    
      

    </div>
    <div class="col-md-6 " id="piechartt" style=" height: 500px;"></div>
    
    </div>
    </div>
   


    



  </body>



  <footer>

  <div class="row" >
<div class="container" style="width: 100%;" >
  
<div style="background-color: #000; width: 100%; height:75px; margin-top:40px ;">
  
teto para footer

</div>
</div>
</div>

</footer>

</html>