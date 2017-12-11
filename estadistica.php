


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
<html>
  <head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;" 

  
  <div class="left" > <font color="white"><h2>Estadisticas</h2></font></div>

  
</div>
</head>

  
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
  
  
    <center>
    <div class="col-md-12 " id="piechartt" style=" height: 500px;"></div>
    </center>
  </body>
</html>


<?php 
require "conec.php";

          $smt = $conn->prepare("SELECT COUNT(CODSOL) FROM Solicitud WHERE CODSALA='A406'" ); 
          $smt -> execute(); 
          $resultado= $smt->fetchall();
          $sm = $conn->prepare("SELECT COUNT(CODSOL) FROM Solicitud WHERE CODSALA='B404'" ); 
          $sm -> execute(); 
          $resultadoo= $sm->fetchall();
          $conn=null;
          //print_r($resultado);
?>
<html>
  <head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <div class="left" > <font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  
  </head>

  <body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
         
          ['sala', 'Cantidad Solicitud'],
          ['A406',   <?php echo $resultado[0][0]; ?>],
          ['B404',    <?php echo $resultadoo[0][0]; ?>]
         

         
        ]);

        var options = {
          title: 'Estadistica uso de sala por semestre'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
    <center>
    <div class="col-md-12 " id="piechart" style=" height: 500px;"></div>
    </center>
    <div class="col-md-12 " ;" style="background:#000000;">
<div style="width: 100%; height:65px ;"></div>infomracion del footer</div>
</div>
  </body>
</html>