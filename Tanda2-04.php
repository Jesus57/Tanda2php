<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
            switch($_POST['n'])
            {
                case '1':
                    echo 'Ese día es Lunes';
                break;
                case '2':
                    echo 'Ese día es Martes';
                break;
                case '3':
                    echo 'Ese día es Miercoles';
                break;
                case '4':
                    echo 'Ese día es Jueves';
                break;
                case '5':
                    echo 'Ese día es Viernes';
                break;
                case '6':
                    echo 'Ese día es Sabado';
                break;
                case '7':
                    echo 'Ese día es Domingo';
                break;
                default:
                    echo 'Pon bien el numbero';
            }
        ?>
</html>