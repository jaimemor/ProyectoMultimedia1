


<?php 


error_reporting(0);
$varaibe=$_REQUEST['id'];



 ?>

<?php
 




function GuardarFormu($rutt,$ramo,$periodo,$dia,$semestre,$cod)
{
    require 'conec.php';
    $sql="INSERT INTO solicitud(rut,ramo,periodo,dia,semestre,codsala) VALUES(?,?,?,?,?,?)";
    $smt = $conn->prepare($sql);
    
    $smt->bindParam(1, $rutt);
    $smt->bindParam(2, $ramo);
    $smt->bindParam(3, $periodo);
    $smt->bindParam(4, $dia);
    $smt->bindParam(5, $semestre);
    $smt->bindParam(6, $cod);
    $smt->execute(); 
    $conn=null;

}

if(isset($_REQUEST['formu'])){

$nombre=$_REQUEST['nombre'];
$rutt='18989161';
$ramo=$_REQUEST['ramo'];
$periodo=$_REQUEST['periodo'];
$dia=$_REQUEST['dia'];
$semestre=$_REQUEST['semestre'];
$cod=$_REQUEST['cod'];
GuardarFormu($rutt,$ramo,$periodo,$dia,$semestre,$cod);
echo "<center><h1>Solicitud ingresada con exito!<h1></center>";
 echo "

    <li><a href='http://localhost/ProyectoMultimedia1/vistasec.php?id=$varaibe'>Volver</a></li>         
"; 

}else {

   echo "<center><h1>Problemas para ingresa solicitud, volver a intentar<h1></center>";
}


?>