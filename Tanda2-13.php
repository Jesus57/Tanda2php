<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-09-02</title>
  </head>
  <body>
        <?php
          $a=$_POST['a'];
          $b=$_POST['b'];
          $c=$_POST['c'];
          if($a<$b && $a<$c)
          {
            if($b<$c)
            {
              echo "El orden es ". $a. $b. $c; 
            }
            else
            {
              echo "El orden es ". $a. $c. $b;
            }
          } 
          elseif($b<$a && $b<$c)
          {
            if($a<$c)
            {
              echo "El orden es ". $b. $a. $c; 
            }
            else
            {
              echo "El orden es ". $b. $c. $a;
            }
          }
          elseif ($a<$b)
          {
            echo "El orden es ". $c. $a. $b;
          }
          else
          {
            echo "El orden es ". $c. $b. $a;
          }
        ?>
        <br><br>
  </body>
</html>