<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01-01.php</title>
  </head>
  <body>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($a==0)
        {
          echo "No tiene solucion real";
        }
        else
        {
         echo "La solución es 'x= ". -$b/$a. "'";
        }
        ?>
</html>