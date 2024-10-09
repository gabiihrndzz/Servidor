<?php
/* 
8. Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y
determine la posición [fila, columna] del número mayor almacenado en la matriz..*/
$if;
$jf;
$matriz=array();
$mayor=-1;
for ($i= 0; $i <= 9; $i++){
    for ($j= 0; $j <= 9; $j++){
        $nums= rand(0,1000);
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
