<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-09-02</title>
  </head>
  <body>
        <?php
          $dia = $_POST['dia'];
          $mes = $_POST['mes'];

          switch ($mes)
          {
            case '1':
              if($dia<21)
              {
                echo "Eres capricornio primo";
              }
              else
              {
                echo "Eres acuario pescanova";
              }
            break;
            case '2':
              if($dia<20)
              {
                echo "Eres acuario primo";
              }
              else
              {
                echo "Eres Piscis pescanova";
              }
            break;
            case '3':
              if($dia<21)
              {
                echo "Eres Piscis primo";
              }
              else
              {
                echo "Eres Aries pescanova";
              }
            break;
            case '4':
              if($dia<21)
              {
                echo "Eres Aries primo";
              }
              else
              {
                echo "Eres Tauro pescanova";
              }
            break;
            case '5':
              if($dia<22)
              {
                echo "Eres Tauro primo";
              }
              else
              {
                echo "Eres Géminis pescanova";
              }
            break;
            case '6':
              if($dia<22)
              {
                echo "Eres Géminis primo";
              }
              else
              {
                echo "Eres Cancer pescanova";
              }
            break;
            case '7':
              if($dia<24)
              {
                echo "Eres Cancer primo";
              }
              else
              {
                echo "Eres Leo pescanova";
              }
            break;
            case '8':
              if($dia<24)
              {
                echo "Eres Leo primo";
              }
              else
              {
                echo "Eres Virgo pescanova";
              }
            break;
            case '9':
              if($dia<24)
              {
                echo "Eres Virgo primo";
              }
              else
              {
                echo "Eres Libra pescanova";
              }
            break;
            case '10':
              if($dia<24)
              {
                echo "Eres Libra primo";
              }
              else
              {
                echo "Eres Escorpio pescanova";
              }
            break;
            case '11':
              if($dia<24)
              {
                echo "Eres Escorpio primo";
              }
              else
              {
                echo "Eres Sagitario pescanova";
              }
            break;
            case '12':
              if($dia<21)
              {
                echo "Eres Sagitario primo";
              }
              else
              {
                echo "Eres Capricornio pescanova";
              }
            break;
          }
        ?>
        <br><br>
  </body>
</html>