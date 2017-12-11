
<!DOCTYPE html>
<html>
<head>
   
   <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
 
    <title></title>
    
 </head>
<body>
    















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

  
  echo "
  
    
 <li><a href='/proyectoMultimedia1/tcpdf/examples/example_021.php?id=".$_REQUEST['id']."'>Generar pdf</a></li> 
  ";

       
    echo "<form action='../vistasec.php?id=".$_REQUEST['id']."' method='POST'><button>Volver</button></form>" ;
    ?> 




    </body>
</html>