<?php
/* 
Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor.
*/
$if;
$jf;
$matriz=array();
$mayor=-1;
for ($i= 0; $i <= 3; $i++){
    for ($j= 0; $j <= 4; $j++){
        $nums= rand(0,20);
        $matriz[$i][$j] = $nums;
        echo"(". $matriz[$i][$j] .") ";
        if($mayor<$matriz[$i][$j]){
            $mayor= $matriz[$i][$j];
            $if= $i;
            $jf= $j;
        }
    }
echo "<br>";
}
echo "<br>";
echo "El número mas grande es el: ".$mayor ." <br>";
echo "Está en la posición: ". $if .", ". $jf;
?>
