<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
          $nota1 = $_POST['nota1'];
          $nota2 = $_POST['nota2'];
          $nota3 = $_POST['nota3'];
          echo "Tu nota media es ". round(($nota1+$nota2+$nota3)/3, $precision =2);
        ?>
</html>