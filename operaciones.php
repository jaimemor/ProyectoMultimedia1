<<<<<<< HEAD
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
=======
 <?php
     // $nombre = $_REQUEST['nombre'];
			$rut = $_REQUEST['rut'];
			$sala = $_REQUEST['sala'];
      $ramo = $_REQUEST['ramo'];
        $semestre = $_REQUEST['semestre'];
        $periodo = $_REQUEST['periodo'];
			$dia = $_REQUEST['dia'];
        
      



        function guardar_form($dia,$rut,$sala,$ramo,$semestre,$periodo,$dia){

			require "conec.php";
        	$sql = "INSERT INTO solicitud(DIA,RAMO,PERIODO,SEMESTRE,RUT,CODSALA) 
            VALUES (?,?,?,?,?,?,?)";
        	 $smt = $conn->prepare($sql);
        	 $smt->bindParam(1,$dia);
        	 $smt->bindParam(2,$ramo);
             $smt->bindParam(3,$periodo);
             $smt->bindParam(4,$semestre);
             $smt->bindParam(5,$rut);
             $smt->bindParam(6,$sala);
            

        	 $smt ->execute();
        	 
        	 $conn = null;
        	 

        }

		
	
guardar_form($dia,$rut,$sala,$ramo,$semestre,$periodo,$dia);     

//echo $dia.$nombre.$rut;   

>>>>>>> cda1aaddd4be55c9113a58f0bcffd3632778e716
?>
