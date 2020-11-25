<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
        $dinero = 0;
        $horas = $_POST['horasTrabajadas'];

        if ($horas>=40)
        {
          $dinero = $dinero + 1680;
          $dinero = $dinero + (($horas-40)*16);
        }
        else
        {
          $dinero = $dinero + ($horas*12);
        }
        
        echo "El sueldo semanal, con ". $horas. " horas trabajadas son: ". $dinero;
        ?>
</html>