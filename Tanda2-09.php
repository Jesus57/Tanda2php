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
          $media =round(($nota1+$nota2+$nota3)/3, $precision =2);
          $str;
          if ($media<5)
          {
            $str = "insuficiente";
          }
          elseif($media<6)
          {
            $str ="suficiente";
          }
          elseif($media<7)
          {
            $str="bien";
          }
          elseif($media<9)
          {
            $str="notable";
          }
          else
          {
            $str="sobresaliente";
          }
          echo "Tu nota media es ". $media. " que es un ".$str;
        ?>
</html>