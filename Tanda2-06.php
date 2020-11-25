<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
        $h = $_POST['h'];
        $g= 9.81;
          echo "Tardará ". sqrt(2*$h/$g). " segundos, creo, soy programador no físico"
        ?>
</html>