<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-09-02</title>
  </head>
  <body>
        <?php
          $hora = $_POST['hora'];
          $minuto = $_POST['minuto'];
          echo "Faltan ". (24-$hora) . " horas y ". (60-$minuto) . " minutos para las 00:00";          
        ?>
        <br><br>
  </body>
</html>