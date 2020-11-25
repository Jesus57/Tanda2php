<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
            $hora = $_POST['hora'];
            switch($hora)
            {
                case ($hora>=6 && $hora<12):
                    echo 'Buenos días señor presidente';
                break;
                case ($hora>=12 && $hora<20):
                    echo 'Buenas tardes señor presidente';
                break;
                case ($hora>=20 && $hora<=24):
                    echo 'Buenas noches señor presidente';
                break;
                case ($hora>0 && $hora<6):
                    echo 'Buenas noches señor presidente';
                break;
                default:
                    echo 'No esta bien ponido';
                break;
            }
        ?>
</html>