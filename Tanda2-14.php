<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-09-02</title>
  </head>
  <body>
        <?php
          $n = $_POST['n'];
          if($n%2==0)
          {
            echo "Tu numero es par";
            if($n%5==0)
            {
              echo " y es divisible entre 5";
            }
          }
          elseif($n%5==0)
          {
            echo "Tu numero es divisible entre 5";
          }
          else
          {
            echo "Su numero no es ni par ni divisible entre 5";
          }
        ?>
        <br><br>
  </body>
</html>