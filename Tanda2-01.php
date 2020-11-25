<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
            switch($_POST['dia'])
            {
                case 'lunes':
                    echo 'Ese día tenemos Cliente';
                break;
                case 'martes':
                    echo 'Ese día tenemos Empresa';
                break;
                case 'miercoles':
                    echo 'Ese día tenemos Servidor';
                break;
                case 'jueves':
                    echo 'Ese día tenemos Despliegue';
                break;
                case 'viernes':
                    echo 'Ese día tenemos Interfaces';
                break;
                case 'sabado':
                    echo 'Ese día tenemos dormir';
                break;
                case 'domingo':
                    echo 'Ese día no tenemos telecole';
                break;
                default:
                    echo 'Pon bien el día';
            }
        ?>
</html>