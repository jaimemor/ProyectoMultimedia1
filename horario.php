<?php 

try{

    
    require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare(' SELECT DIA,RAMO,U.NOMBRE,PERIODO,SOL.CODSALA,NOMBREED,
 FROM SOLICITUD SOL  LEFT JOIN  SALA S ON S.CODSALA=SOL.CODSALA
   JOIN PISO P ON S.CODSALA=P.CODSALA  JOIN EDIFICIO E ON E.CODED=P.CODED
 WHERE S.CODSALA="A406";');
      $sql->execute();
    $resultado = $sql->fetchAll();

   

      foreach ($resultado as $row) {

          echo $row["DIA"] ;
          echo $row["RAMO"] ;
         
          echo $row["PERIODO"] ;
          echo $row["CODSALA"] ;
          echo $row["NOMBREED"] ;
         
      }

  }catch(PDOException $e){

      echo "ERROR: " . $e->getMessage();

  }

 ?>

<?php 

    

  try{

   
    require "conec.php";
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $sql = $conn->prepare(' SELECT FECHACOM,HORA,COMENTARIO,ESTADO,CANTIDAD,TIPOIMPLE 
        FROM COMENTARIO C LEFT JOIN SALA S
 ON S.CODSALA=C.CODSALA INNER JOIN IMPLEMENTO ON C.CODSALA=S.CODSALA
 WHERE S.CODSALA="B404";');
      $sql->execute();
    $resultado = $sql->fetchAll();

   

      foreach ($resultado as $row) {

         
      }

  }catch(PDOException $e){

      echo "ERROR: " . $e->getMessage();

  }
           


        
          
?>




<?php 

  function selecdia ($DIA,$PERIODO){
 include "conec.php";

 $sql='SELECT NOMBRE,DIA,PERIODO,RAMO,SOL.CODSALA
 FROM USUARIO U JOIN
      SOLICITUD SOL ON U.RUT=U.RUT LEFT JOIN SALA S ON S.CODSALA=SOL.CODSALA
AND DIA=? AND PERIODO=?
 WHERE S.CODSALA="B404";';
  $smt=$conn->prepare($sql);
  
  $smt->bindParam(1,$PERIODO);
  $smt->bindParam(2,$DIA);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
 

 return $resultado;


 }




$datos=array();



for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO1'][$i]=selecdia(1,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO2'][$i]=selecdia(2,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO3'][$i]=selecdia(3,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO4'][$i]=selecdia(4,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO5'][$i]=selecdia(5,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO6'][$i]=selecdia(6,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO7'][$i]=selecdia(7,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO8'][$i]=selecdia(8,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO9'][$i]=selecdia(9,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO10'][$i]=selecdia(10,$i);
}
for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO11'][$i]=selecdia(11,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO12'][$i]=selecdia(12,$i);
}

for ($i=0; $i < 7; $i++) { 
  
  $datos['PERIODO13'][$i]=selecdia(13,$i);
}

 ?>






   
