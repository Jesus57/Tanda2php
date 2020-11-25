<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-18-02</title>
  </head>
  <body>
        <?php
          $n = $_POST['n'];
          if($n==strrev($n))
          {
            echo "Su número es capicua";
          }
          else
          {
            echo "Su número no es capicua";
          }
        ?>
        <br><br>
  </body>
</html>