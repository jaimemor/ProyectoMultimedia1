<?php 


if (isset($_GET['codsala']) ) {
    $codigo = (String) $_GET['codsala'];

} else {

    $codigo = "distintoderut";
    echo "codigo no valido";
}

if ($codigo!='distintoderut') {

      

    try{

       // $conn = new PDO('mysql:host=localhost;dbname=basededatos', $usuario, $contra);
        require "conec.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
        $sql = $conn->prepare('SELECT * FROM datos WHERE codsala = :codsala');
        $sql->execute(array('codsala' => $codsala));
    $resultado = $sql->fetchAll();

     

        foreach ($resultado as $row) {

        

            
        }

    }catch(PDOException $e){

        echo "ERROR: " . $e->getMessage();

    }
           


        }
          
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

    $var=array(
'<td class="asignatura text-center"></td>'
    );



<?php   foreach($usuarios as $periodo => $datos)
{

echo '<tr>';
echo '<td>'.$periodo.'</td>';

     foreach($datos as $disponible){

if ($disponible==$var2) {

                $texto= $var3.'<br>'.$var2.'<br>'.$var1.'<br>';

                
                  $css='style="background:#ccc ;" style="width:5%" ' ;

               }else {
                $texto= "";
                
               }

                  echo '<th style="'.$css.'"';

  echo $texto;

          
       

echo '</th>';


}
echo '</tr>';

}


 ?>



  
</body>

<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
</html>


 <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal1"> CIF 06297 - 1<br>VPC-B412 SALA DE CLASE</span></td>
                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal2"> CIF 06145 - 1<br>VPC-B412 SALA DE CLASE</span></td>
                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal3"> CIF 06297 - 1<br>VPC-B412 SALA DE CLASE</span></td>
                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal4"> CIF 06145 - 1<br>VPC-B411 SALA DE CLASE</span></td>


                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal5"> CIF 06297 - 1<br>VPC-B412 SALA DE CLASE</span></td>









