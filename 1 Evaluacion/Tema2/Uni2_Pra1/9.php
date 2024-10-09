<?php
/*Escriba un programa a partir de un número entero generado de forma aleatoria
indique si es primo. Un número primo es aquel que es divisible por el mismo y la
unidad.*/
$num= rand(1,100);
$suma=1;
$primo=true;
echo "El número es: ".$num;
for ($i=2; $i<=$num/2; $i++) {
    if ($num % $i == 0) {
      $primo=false;
    }
  }
echo "<br></br>";
if ($primo) {
    echo "el $num es primo";
  } else {
    echo "el $num no es primo";
  }
?>