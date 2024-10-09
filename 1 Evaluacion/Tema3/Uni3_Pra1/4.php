<?php
/* 
4. Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados
mostrar en un renglón los elementos almacenados en la diagonal principal y en el
siguiente los de la diagonal secundaria.*/

$matriz=array();

for ($i= 0; $i <= 3; $i++){
    for ($j= 0; $j <= 3; $j++){
        $nums= rand(0,20);
        $matriz[$i][$j] = $nums;
        echo"(". $matriz[$i][$j] .") ";
    }
echo "<br>";
}
echo "Diagonal principal <br>";
//0,0/ 1,1/ 2,2/3,3
for ($i= 0; $i <= 3; $i++){
    for ($j= 0; $j <= 3; $j++){
        if($i==$j)
        echo"(". $matriz[$i][$j] .") ";
    }
}
$n = count(value: $matriz);

echo "<br>";
echo "Diagonal secundaria <br>";
//0,3/ 1,2/ 2,1/3,0
for ($i= 3; $i >= 0; $i--){
        echo"(". $matriz[$i][$n - 1 - $i] .") ";
    }
 ?>
