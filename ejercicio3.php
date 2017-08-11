<!--calcular la paga de un trabajador conociendo el numero de horas trabajadas, la tarifa horaria y la tasa de impuestos-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <h3>Horas trabajadas = 30</h3>
    <h3>Tarifa horaria = 23000</h3>
    <h3>Tasa impuesto = 300000</h3>
    <?php
    
          $numeros['ht']=30;
          $numeros['th']=23000;
          $numeros['ti']=300000;

          $total= ($numeros['ht'] * $numeros['th']-$numeros['ti'] ) ;

          echo "La paga del trabajador es: $total";

     ?>

  </body>
</html>
