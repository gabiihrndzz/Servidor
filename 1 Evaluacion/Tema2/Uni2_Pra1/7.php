<?php
/*Hacer un programa que calcule todos los números primos entre 1 y 50 y los
muestre por pantalla. Un número primo es un número entero que sólo es
divisible por 1 y por sí mismo..*/

for ($num=2; $num<=50; $num++) {
	$primo=true;
    for ($i=2; $i<=$num/2; $i++) {
      if ($num % $i == 0) $primo=false;
    }
    if ($primo==true) echo "$num<br>";
  }
?>