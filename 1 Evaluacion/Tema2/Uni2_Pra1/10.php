<?php
/*Generar todos los pares de números formados por combinaciones de dígitos del 1
al 9, siendo además los dos componentes del par distinto.*/
for ($i=1; $i<10; $i++) {
    for ($j=1; $j<10; $j++) {
      if ($i!=$j) {
      echo "($i,$j)";}
    }
  }

?>