

<?php 



    include "conec.php";

  $sql="select * from sala ";
  $smt=$conn->prepare($sql);
  $smt->execute();
  $resultado=$smt->fetchall ();
  $conn =null;
  $var= count ($resultado);
 

  	for ($i=0; $i < $var; $i++) { 
  		echo "<table  border-color='#cccccc' border='1' ><tr><td>".$resultado[$i]['id']."</td></tr></table>";
  	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>test arreglos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
			


</body>
</html>









<?php 

echo "mostrar salas que tiene pedidas un profesor en particular";
echo "mostrar cuadro con salas solicitadas";
echo "se debe mostrar por año y semestre";
echo "secretaria y mayordomo pueden ver info de cualquier profe";
echo "profesor puede ver solo su info";

 ?>
