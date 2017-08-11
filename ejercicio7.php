<!--Realice un algoritmo que convierta una hora a minutos y luego a segundos y los muestre en pantalla-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <?php
    
        $tiempo['hora']=1;
        $tiempo['min']=60;

        $minutos = $tiempo ['hora'] * $tiempo ['min'];
        $segundos = $minutos * $tiempo['min'];

        echo "Los minutos de la hora es: $minutos <br/> <br/> ";
        echo "Los segundos de la hora es: $segundos";



     ?>

  </body>
</html>
