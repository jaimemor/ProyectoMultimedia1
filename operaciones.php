<?php
function GuardarFormu($rutt,$codsala)
{
   require 'conec.php';
   $sql="INSERT INTO solicitud(rut,CODSALA) VALUES(?,?)";
   $smt = $conn->prepare($sql);
   $smt->bindParam(1, $rutt);
   $smt->bindParam(2, $codsala);
   //$smt->bindParam(2, $nombree);
   //$smt->bindParam(3, $correoo);
   //$smt->bindParam(4, $clavee);
   $smt->execute();
   $conn=null;

}

if(isset($_REQUEST['form'])){

$rutt=$_REQUEST['rut'];
$codsala=$_REQUEST['sala'];

GuardarFormu($rutt,$codsala);
}
?>
