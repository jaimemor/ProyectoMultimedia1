
<?php 

error_reporting(0);
$varaibe=$_REQUEST['id'];

 ?>

<?php



session_start();

$varsesion= $_SESSION['usuario'];

if($varsesion == null || $varsesion=''){
  echo 'Usted no tiene autorizacion';
  die();
}

require 'conec.php';
$smt = $conn->prepare("SELECT * FROM usuario WHERE RUT=".$_SESSION['usuario'] ); 
$smt -> execute(); 
$resultado= $smt->fetchall();
$conn=null;


$secre=$_SESSION['usuario'];

?>

<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>


<?php include('proceso.php');  ?>


  <title></title>


<div class="col-md-12 "  style="background-color: #2E3D55;  height:50px;" >

  
  <div class="left" > <font color="white"><h3>SISTEMA GESTION SALAS</h3></font></div>
<a href="Loginsession/cerrar_session.php" class="pull-right">Salir</a>
  
</div>




<div class="row">


  <!--
        botonera

    -->
    <div class="col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:5px solid #FFF">
          

<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
 
                 

  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href=inicioprofe.php>Inicio</a></li>

   <form action="<?php echo $_SERVER['proceso.php'] ?>"   method="POST" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="radio" name="semestre" value="1" checked value="1">Primer Semestre<br>
        <input type="radio" name="semestre" value="2" >Segundo Semestre<br>
      <input type="submit" value="Enviar" class="btn btn-primary" ><hr/>
      </form>

     <li><a>Solicitar a:</a></li> 
<?php 

  
  
  
include "conec.php";

  $sql=( "SELECT NOMBRE,CODSALA,CORREO,TELEFONO
FROM USUARIO JOIN piso p ON usuario.CODPISO = p.CODPISO
JOIN sala s ON p.CODPISO = s.CODPISO
WHERE  CODSALA='$varaibe' and TIPOUSUARIO='secretaria'");

  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall();

  
$var= count ($resultado);

    foreach ($resultado as $row) {
   $nn=$row['NOMBRE'];
    $c=$row['CORREO'];
    $t=$row['TELEFONO'];
    }

 ?>

           <table>
  
   <tr>
     
<?php echo $nn."<br>";?>
telefono: <?php echo $t."<br>"; ?>
<?php echo $c."<br>"; ?>

   </tr>

 </table>
    


</div>

</div>
 </div>
 </div>



<!--
       informacion que esta sobre el calendario de la sala

    -->
<div class="col-md-4 col-lg-5 vcenter" >
        <div style="height:7em;">
         
         <h4 ><p class="text-primary">EDIFICIO<?php ?> 
<h4 ><p class="text-primary">PISO<?php  ?></p></h4></p></h4> <h4 ><p class="text-primary">SALA<?php ?></p></h4>
          
         
        

          <div>
 

        </div>
        </div></div>






<!--
        aqui se muestran la informacion de las salas + horario

    -->


<div class="col-md-4 col-lg-10 vcenter" style="border:5px solid #fff">
        <div style="height:20em">
   
         <div class="container-fluid">
    
         <div class="row">

          <div class="col-md-1 " style="background:   #fff ;">
<table class='table table-border'  border="0.5" >

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
          </div>
<div class="col-md-8 " style="background:   #fff ;">
                                                 
         

 <table class="table table-bordered" border="1" >
            
                   
                    
                    
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


<div class="col-md-3 " style="background: #fff ;">

  <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:5px solid #fff" >

<div>
  <h4 ><p class="text-primary">IMPLEMENTOS</p></h4> 
  <th>Nombre</th>
  <th>Cantidad</th>
  <th>Estado</th>
  <?php  
  
  
include "conec.php";

  $sql=( "SELECT ESTADO,CANTIDAD,TIPOIMPLE,S.CODSALA
        FROM  SALA S JOIN IMPLEMENTO I ON I.CODSALA=S.CODSALA
 WHERE S.CODSALA='".$_REQUEST['id']."'");

  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall();

  
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









</div>


         </div>
         </div>

         


<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:5px solid #fff" >
  <div>
    
    <h4><p class="text-primary">COMENTARIOS</p></h4>

</div>


<?php 

  
include "conec.php";

  $sql=( "SELECT COMENTARIO,HORA,FECHACOM,NOMBRE
FROM SALA S JOIN COMENTARIO C  ON C.CODSALA=S.CODSALA
  JOIN USUARIO U ON C.RUT=U.RUT
WHERE S.CODSALA='".$_REQUEST['id']."' ORDER BY FECHACOM ");

  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall();

$var= count ($resultado);


 ?>


 

  <?php  
 echo "<textarea class='form-control' rows='24'>";

  for ($i=0; $i <$var ; $i++) { 



echo  $resultado[$i]['NOMBRE'].":  "
.$resultado[$i]['COMENTARIO']."   ".$resultado[$i]['FECHACOM']."  ".$resultado[$i]['HORA']."    ";
              
 
    }
    

 
   echo "</textarea>";

 ?>





 



 </div>
         </div>
         </div>
</div>


</div>
 
</div>

</div>
</div>
</div>





 </body>                                                                 
 <footer>
   

<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="background:#000000;">
<div style="width: 100%; height:65px ;"></div>infomracion del footer</div>
</div>
</div>
</div>


 </footer>

   
 </html>



