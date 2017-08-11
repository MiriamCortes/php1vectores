<!--realice un algoritmo que calcule el area y el perimetro de un deltoide y lo muestre en pantalla-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <?php
    
      $diagonal['db']=5;
      $diagonal['da']=2;
      $lado['ls']=6;
      $lado['li']=9;

      $area= ($diagonal ['db'] * $diagonal['da'])/2;
      $perimetro=2*($lado['ls'] +$lado ['li']);

      echo "El área del deltoide es: $area <br/> <br/>";


      echo "El perimetro de el deltoide es: $perimetro";


     ?>

  </body>
</html>
