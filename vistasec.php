

<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>






  <title>SISTEMA SOLICITD DE SALA</title>


<div class="col-md-12 " style="background:#bedddb;">

  
  <div class="left" ><p class="lead"><h3>SISTEMA GESTION SALAS</h3></div>

  <div class="pull-right" style="background:  #2D7C79  ;">
<button type="button" class="btn btn-primary">Login</button>

  </div>
</div>




<div class="row">


  <!--
        botonera

    -->
    <div class="col-md-6 col-md-4 col-lg-2 vcenter">
        <div style="height:30em;border:10px solid #FFF">
          

<div class="btn-group-vertical " style="border:0px solid #fff" >




<div class="container" style="width: 200px" >
 
                 

  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href=inicio.php>Inicio</a></li>

    
    

   <li><a href="solicitud.php">Solicitar sala</a></li>




    <li><a href="#">seleccion de piso</a></li>

         
<div class="radio">


  <label>
    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
   <a href="">Primer Semestre </a>
   
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
    <a href="">Segundo Semestre </a>
  </label>
</div>

    <li><a href="#">Generar Codigo QR</a></li>        
    <li><a href="#">Ver Estadisticas</a></li>        
  
 
 <li><a href="#">Buscar Por Profesor</a></li> </ul>
  <nav class="navbar navbar-light bg-faded">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


  </form>
</nav>












</div>

</div>
 </div>
 </div>



<!--
       informacion que esta sobre el calendario de la sala

    -->
<div class="col-md-6 col-md-8 col-lg-10 vcenter" >
        <div style="height:7em;">
         
         <h3>SALA <?php echo 'CODSALA'; ?></h3><h4>Edificio Facultad</h4>
         <h4>Año 2017</h4>

          <div>
 

        </div>
        </div></div>






<!--
        aqui se muestran la informacion de las salas + horario

    -->


<div class="col-md-4 col-md-4 col-lg-10 vcenter" style="border:10px solid #fff">
        <div style="height:20em">
   
         <div class="container-fluid">
    
         <div class="row">
<div class="col-md-9 " style="background:   #fff ;">
                                                 
         

<?php include('horario.php');  ?>

 <table class="table table-bordered" border="1" >
            
                   
                    <th style="width:15%"> PERIODO</th>
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>



            <?php foreach ($datos as $key => $value): ?>
                                
                                <tr >
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

</div>


<div class="col-md-3 " style="background: #fff ;">

  <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >

<div>
  <h4 style="color: #000;">IMPLEMENTOS DE SALA</h4> 



</div>

</div>


         </div>
         </div>

         


<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >
  <div>
    <h4 style="color: #000;">COMENTARIOS</h4>
    
<?php 

    

  try{

     // $conn = new PDO('mysql:host=localhost;dbname=basededatos', $usuario, $contra);
    require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare('SELECT * FROM COMENTARIO WHERE CODSALA ="B404"');
      $sql->execute();
    $resultado = $sql->fetchAll();

   

      foreach ($resultado as $row) {

         
      }

  }catch(PDOException $e){

      echo "ERROR: " . $e->getMessage();

  }
           


        
          
?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ingresar nuevo comentario</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
    <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Ingresa Comentario</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Enviar Comentario</button>
      </div>
    </div>
  </div>
</div>
  
</div>

  
  <table>
    <br>
   <?php  echo $row["COMENTARIO"] ; ?>

    </tr>
  </table>

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
<div style="width: 100%; height:65px ;"></div>infomracion del footer
</div>
</div>
</div>

 </footer>

   
 </html>


