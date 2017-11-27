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



    <div class="col-md-12">
            <table class="table table-bordered" border="1"><tbody>
                <tr>
                    <th style="width:5%">Per.</th>
                    <th style="width:15%"> LUNES</th>
                    <th style="width:15%"> MARTES</th>
                    <th style="width:15%"> MIÉRCOLES</th>
                    <th style="width:15%"> JUEVES</th>
                    <th style="width:15%"> VIERNES</th>
                    <th style="width:15%"> SÁBADO</th>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">08:00 09:15</td>
                   
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">09:20 10:35</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">10:45 12:00</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">12:05 13:20</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">13:25 14:40</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">14:45 16:00</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">16:05 17:20</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr
                ><tr>
                    <td style="background:#eaf3f9;">17:25 18:40</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">18:40 19:55</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">19:55 21:10</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">21:10 22:25</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
                <tr>
                    <td style="background:#eaf3f9;">22:25 23:40</td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                    <td class="asignatura text-center"></td>
                </tr>
            </tbody>
        </table>    
</body>

<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
</html>


 <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal1"> CIF 06297 - 1<br>VPC-B412 SALA DE CLASE</span></td>
                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal2"> CIF 06145 - 1<br>VPC-B412 SALA DE CLASE</span></td>
                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal3"> CIF 06297 - 1<br>VPC-B412 SALA DE CLASE</span></td>
                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal4"> CIF 06145 - 1<br>VPC-B411 SALA DE CLASE</span></td>


                    <td class="asignatura text-center"><span style="cursor: pointer;" data-toggle="modal" data-target="#myModal5"> CIF 06297 - 1<br>VPC-B412 SALA DE CLASE</span></td>









