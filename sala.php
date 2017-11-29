
<?php 





  include "conec.php";

  $sql="SELECT * FROM solicitud ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

for ($i=0; $i < $var; $i++) { 
  

       $var3=$resultado[$i]['CODSALA'];
       $var1=$resultado[$i]['CODSOL'];
       $var2=$resultado[$i]['DIA'];
     


    }
 ?>


<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

 
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
 <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>


 <script>
    /******** Load jQuery if not present *********/
    if (window.jQuery === undefined || window.jQuery.fn.jquery !== '3.1.1') {
        console.log("jQuery LOADED");
        var script_tag = document.createElement('script');
        script_tag.setAttribute("type", "text/javascript");
        script_tag.setAttribute("src", "http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");

        // Try to find the head, otherwise default to the documentElement
        (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);

        if (script_tag.readyState) {
            script_tag.onreadystatechange = function () { // For old versions of IE
                if (this.readyState == 'complete' || this.readyState == 'loaded') {
                    console.log(window.jQuery.fn.jquery);
                    scriptLoadHandler();
                }
            };
        } else {
            console.log("ONLOAD STATE");
            script_tag.onload = scriptLoadHandler;
        }
    } else {
        // The jQuery version on the window is the one we want to use
        jQuery = window.jQuery;
        main();
    }

    function scriptLoadHandler() {
        // Restore $ and window.jQuery to their previous values and store the
        // new jQuery in our local jQuery variable
        jQuery = window.jQuery.noConflict(true);
        // Call our main function
        main();
    }

    function main() {
        jQuery(document).ready(function ($) {
        var bootstrap_script = document.createElement('script');
            bootstrap_script.setAttribute("type", "text/javascript");
            bootstrap_script.setAttribute("src",
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");

            (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(bootstrap_script);
        })
    }
  </script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">











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

    
    

<div class="container">
  
  <li><a data-toggle="modal" data-target="#myModal">Solicitar Sala</a></li>
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Enviar Comentario</button>
        </div>
      </div>
    </div>
  </div>
</div>












    <li><a href="#">seleccion de piso</a></li>

<button type="button" class="btn btn-" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close2</button>
    </div>
  </div>
</div>




             
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
         
         <h3>SALA <?php echo $var3; ?></h3><h4>Edificio Facultad</h4>
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
                                                 
         

<?php

include('horario.php');  ?>

</div>


<div class="col-md-3 " style="background: #fff ;">

  <div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >
<?php  
include "conec.php";

  $sql="SELECT implemento,codsala,codim FROM sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

for ($i=0; $i < $var; $i++) { 
  

       $var=$resultado[$i]['implemento'];
       
       
     


    }?>
<div>
  <h4 style="color: #000;">IMPLEMENTOS DE SALA</h4> 


<tr>
  <td><br><?php  echo $var;?></td>

  
</tr>
</div>

</div>
         </div>
         </div>

         
<div class="container-fluid">
    
         <div class="row">

        

<div class="col-md-12 " ;" style="border:10px solid #fff" >
  <div>
    <h4 style="color: #000;">COMENTARIOS</h4>
    
 
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


TABLA PARA MOSTRAR COMENTARIOS
  
  <table>
    
    <tr>otor
      <td>nombre</td>

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



