<!--Realizar el teorema pitagora en php-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 6</title>
  </head>
  <body>
    <?php
    
        $valor['a']=6;
        $valor['b']=4;

        $c2= ($valor ['a'] *$valor ['a'] ) + ($valor['b'] * $valor['b']);
        $c=sqrt($c2);

       echo "El valor de la hipotenusa es: $c";




     ?>

  </body>
</html>
