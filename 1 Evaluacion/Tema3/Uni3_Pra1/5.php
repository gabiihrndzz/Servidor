<?php
/* 
4.Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.
*/

$matriz=array();

for ($i= 0; $i <= 4; $i++){
    for ($j= 0; $j <= 2; $j++){
        $nums= rand(0,20);
        $matriz[$i][$j] = $nums;
        echo"(". $matriz[$i][$j] .") ";
    }
echo "<br>";
}
echo "<br>";
echo "Por filas <br>";
//0,0/ 1,1/ 2,2/3,3
for($i= 0; $i <= 2; $i++){
    echo "Fila ".$i . " -->";
    for ($j= 0; $j <= 4; $j++){
    echo " ". $matriz[$j][$i] ." | ";}
    echo "<br>";
}
echo "<br>";
echo "Por columnas <br>";
//0,3/ 1,2/ 2,1/3,0
for($i= 0; $i <= 4; $i++){
    echo "Columna ".$i. " -->";
    for ($j= 0; $j <= 2; $j++){
    echo" ". $matriz[$i][$j] ." |";}
    echo "<br>";
    }

?>
