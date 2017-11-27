<?php 

CREATE TABLE IF NOT EXISTS `calendar_events` (
`id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `cod_equipo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `calendar_events` (`id`, `descripcion`, `fecha_inicio`, `fecha_fin`, `cod_equipo`) VALUES
(1, 'hello world', '2015-02-19 08:00:00', '2015-02-19 23:00:00', 1),
(2, 'lorem ipsum dolor sit amet', '2015-02-25 12:15:00', '2015-02-25 21:30:00', 1),
(3, 'otro evento cualquiera', '2015-02-14 09:00:00', '2015-02-14 12:00:00', 1),
(4, 'nombre evento', '2015-02-19 07:00:00', '2015-02-19 08:00:00', 1);

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calendario</title>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <style type="text/css">body{margin:0;font-family:Lato;}ul,li{list-style-type:none;margin:0;padding:0;}.calendar{padding:30px;}.calendar .day{background:#ecf0f1;border-bottom:2px solid #bdc3c7;float:left;margin:3px;position:relative;height:120px;width:120px;}.day.marked{background:#3498db;border-color:#2980b9;}.day .day-number{color:#7f8c8d;left:5px;position:absolute;top:5px;}.day.marked .day-number{color:white;}.day .events{color:white;margin:29px 7px 7px;height:78px;overflow-x:hidden;overflow-y:hidden;}.day .events h5{margin:0 0 5px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:100%;}.day .events strong,.day .events span{display:block;font-size:11px;}.day .events ul{}.day .events li{}</style>
    </head>
    <body>
    <div class="calendar">
    
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
     
        $sql = $conn->prepare('SELECT * FROM solicitud WHERE codsala = :codsala');
        $sql->execute(array('codsala' => $codsala));
    $resultado = $sql->fetchAll();

     
$solicitud=array();
        foreach ($resultado as $row) {

       $var=$row['codsala'];

            
        }

    }catch(PDOException $e){

        echo "ERROR: " . $e->getMessage();

    }
           


        }




        $mysqli = new mysqli('localhost', 'root', 'tupassword', 'basededatos');

        if ( $mysqli->connect_errno )
        {
            die( $mysqli->mysqli_connect_error() );
        }

        $result = $mysqli->query('SELECT * FROM calendar_events');

        if( !$result )
            die( $mysqli->error );

        $events = array();

        while($row = $result->fetch_assoc())
        {
            $start_date = new DateTime($row['fecha_inicio']);
            $end_date = new DateTime($row['fecha_fin']);
            $day = $start_date->format('j');

            $events[$day][] = array(
                'start_hour' => $start_date->format('G:i a'),
                'end_hour' => $end_date->format('G:i a'),
                'team_code' => $row['cod_equipo'],
                'description' => $row['descripcion']
            );
        }

        $datetime = new DateTime();

        // mes en texto
        $txt_months = array(
            'Enero', 'Febrero', 'Marzo',
            'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        );

        $month_txt = $txt_months[$datetime->format('n')-1];

        // ultimo dia del mes
        $month_days = date('j', strtotime("last day of"));

        echo '<h1>' . $month_txt . '</h1>';

        foreach(range(1, $month_days) as $day)
        {
            $marked = false;
            $events_list = array();

            foreach($events as $event_day => $event)
            {
                // si el dia del evento coincide lo marcamos y guardamos la informacion
                if($event_day == $day)
                {
                    $marked = true;
                    $events_list = $event;
                    break;
                }
            }

            echo '
            <div class="day' . ($marked ? ' marked' : '') . '">
                <strong class="day-number">' . $day . '</strong>
                <div class="events"><ul>';

                    foreach($events_list as $event)
                    {
                        echo '<li>
                            <h5>' . $event['description'] . '</h5>
                            <div>
                                <strong>Inicio:</strong>
                                <span>' . $event['start_hour'] . '</span>
                            </div>

                            <div>
                                <strong>Fin:</strong>
                                <span>' . $event['end_hour'] . '</span>
                            </div>
                        </li>';
                    }

                echo '</ul></div>
            </div>';
        }
        ?>
    </div>
    </body>
    </html>




echo "
<table class='table table-bordered' border='1'><tbody>
                <tr>
                    <th style='width:5%''>Per.</th>
                    <th style='width:15%'> LUNES</th>
                    <th style='width:15%'> MARTES</th>
                    <th style='width:15%'> MIÉRCOLES</th>
                    <th style='width:15%'> JUEVES</th>
                    <th style='width:15%'> VIERNES</th>
                    <th style='width:15%'> SÁBADO</th>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>08:00 09:15</td>
                   
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>09:20 10:35</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>10:45 12:00</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>12:05 13:20</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>13:25 14:40</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>14:45 16:00</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>16:05 17:20</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr
                ><tr>
                    <td style='background:#eaf3f9;'>17:25 18:40</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>18:40 19:55</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>19:55 21:10</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>21:10 22:25</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
                <tr>
                    <td style='background:#eaf3f9;'>22:25 23:40</td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                    <td class='asignatura text-center'></td>
                </tr>
            </tbody>
        </table>    

";
 ?>