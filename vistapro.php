


<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <?php  include('vista3.php'); ?>


<?php include('horario.php');  ?>


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
         
         <h3>SALA <?php  ?></h3><h4><?php  ?></h4>
         <h4><?php    
        echo date("Y");?></h4>

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

                             <td  class="text-center" WIDTH="50" HEIGHT="50"> 

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

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >

<div>
  <h4 style="color: #000;">IMPLEMENTOS DE SALA</h4> 

<?php  
   echo $row["TIPOIMPLE"].'<br>';
   echo $row["ESTADO"].'<br>' ;
   echo $row["CANTIDAD"] ;
   
    ?>

</div>

</div>


         </div>
         </div>

         


<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >
  <div>
    <h4 style="color: #000;">COMENTARIOS</h4>
    



</div>

  
  <table>
    <br>
   <?php  
   echo $row["COMENTARIO"].'<br>';
   echo $row["FECHACOM"].'<br>' ;
   echo $row["HORA"] ;
   
    ?>


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



