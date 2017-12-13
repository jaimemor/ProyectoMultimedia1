
<?php 


error_reporting(0);
$varaibe=$_REQUEST['id'];



 ?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <?php  include('../vista3.php'); ?>
 
    <title></title>
    
 
<div class="row" >
<div class="container" style="width: 100%;" >
  


<div class="col-md-12" style="background-color: #2E3D55; height:95px; margin-top:-20px ; ">

  
  <font color="white" class="left" ><h3>SISTEMA GESTION SALAS</h3></font>



  </div>
  </div>
  </div>
</head>


<ol class="breadcrumb">
 

  <?php 

 echo "<li><a href='/proyectoMultimedia1/tcpdf/examples/example_021.php?id=".$_REQUEST['id']."'>Generar pdf</a></li> 
  "; ?>
<?php 

 echo "<li><a href='http://localhost/ProyectoMultimedia1/vistasec.php?id=".$_REQUEST['id']."'>Volver</a></li> 
  "; ?>

  
</ol>
 <body>


<div class="container" style="width: 100%;" >

<div class="row">
    <div class=" col-md-12  vcenter">


        <h3>QR Horario <?php echo $varaibe;?></h3>



<?php    

    $varaibe=$_REQUEST['id'];
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.$varaibe.'.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'H';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 10;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 10), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.$varaibe.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 10);    
        
    } else {    
    
        //aqui poner link!!!!
        
       
        QRcode::png('http://192.168.1.132/proyectoMultimedia1/salaini.php?id='.$_REQUEST['id'], $filename, $errorCorrectionLevel, $matrixPointSize, 10);    
        
    }    
        

    echo '<center><img src="'.$PNG_WEB_DIR.basename($filename).'" /></center>'; 

  
 
    ?> 



</div>
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