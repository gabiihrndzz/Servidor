<?php
/*Calcular si un número entero generado de forma aleatoria entre 1 y 1000 es
perfecto. Un número perfecto es aquel que la suma de sus divisores es él mismo,
por ejemplo el 6, sus divisores son 1,2,3 la suma de los mismos es 6*/
$num= rand(1,100);
$suma=1;
echo "Sus divisores son: ";
for ($i=2; $i<$num; $i++) {
    if ($num % $i==0) { 
        $suma += $i;
        echo "<br></br>" .$i;
}   
  }
echo "<br></br>";
if ($suma == $num) {
    echo "el $num es perfecto";
  } else {
    echo "el $num no es perfecto";
  }
?>