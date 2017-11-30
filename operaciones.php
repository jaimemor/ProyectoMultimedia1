 <?php
          $nombre = $_REQUEST['nombre'];
			$rut = $_REQUEST['rut'];
			$sala = $_REQUEST['sala'];
    
        $ramo = $_REQUEST['ramo'];
        $semestre = $_REQUEST['semestre'];
        $periodo = $_REQUEST['periodo'];
			$dia = $_REQUEST['dia'];
        
      



        function guardar_form($nombre,$rut,$sala,$ramo,$semestre,$periodo,$dia){

			require "conec.php";
        	$sql = "INSERT INTO solicitud(DIA,RAMO,PERIODO,SEMESTRE,RUT,CODSALA,NOMBRE) 
            VALUES (?,?,?,?,?,?,?)";
        	 $smt = $conn->prepare($sql);
        	 $smt->bindParam(1,$dia);
        	 $smt->bindParam(2,$ramo);
             $smt->bindParam(3,$periodo);
             $smt->bindParam(4,$semestre);
             $smt->bindParam(5,$rut);
             $smt->bindParam(6,$sala);
            $smt->bindParam(7,$nombre);
            

        	 $smt ->execute();
        	 
        	 $conn = null;
        	 

        }

		
	
guardar_form($nombre,$rut,$sala,$ramo,$semestre,$periodo,$dia);     

echo $dia.$nombre.$rut;   

?>
