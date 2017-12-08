<?php 



$semestre=$_REQUEST['semestre'];


  function selecdia ($DIA,$PERIODO,$varaibe,$semestre){
 include "conec.php";

    

 $sql=("SELECT NOMBRE,DIA,PERIODO,RAMO,SOL.CODSALA,SEMESTRE
 FROM USUARIO U JOIN SOLICITUD SOL ON U.RUT=SOL.RUT
  LEFT JOIN SALA S ON S.CODSALA=SOL.CODSALA
AND DIA=? AND PERIODO=?
 WHERE S.CODSALA='$varaibe' AND SEMESTRE='$semestre'" );
  $smt=$conn->prepare($sql); 
    $smt->bindParam(1,$PERIODO);
  $smt->bindParam(2,$DIA);
  
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
 
 

 return $resultado;


 }




$datos=array();



for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO1'][$i]=selecdia(1,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO2'][$i]=selecdia(2,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO3'][$i]=selecdia(3,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO4'][$i]=selecdia(4,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO5'][$i]=selecdia(5,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO6'][$i]=selecdia(6,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO7'][$i]=selecdia(7,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO8'][$i]=selecdia(8,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO9'][$i]=selecdia(9,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO10'][$i]=selecdia(10,$i+1,$varaibe,$semestre);
}
for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO11'][$i]=selecdia(11,$i+1,$varaibe,$semestre);
}

for ($i=0; $i < 6; $i++) { 
  
  $datos['PERIODO12'][$i]=selecdia(12,$i+1,$varaibe,$semestre);
}



 ?>




