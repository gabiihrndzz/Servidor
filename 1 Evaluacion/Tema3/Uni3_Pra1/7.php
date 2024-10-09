<?php
/* 
7. Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón.*/
$promedio=array();
$matriz=array();
$mayormatriz=array();
$mayor=-1;
for ($i= 0; $i <= 2; $i++){
    for ($j= 0; $j <= 3; $j++){
        $nums= rand(0,20);
        $matriz[$i][$j] = $nums;
        echo"(". $matriz[$i][$j] .") ";
        $promedio=$matriz[$i][$j];
        if($mayor<$matriz[$i][$j]){
            $mayormatriz[]= $matriz[$i][$j];
        }
    }
echo "<br>";
}
echo "<br>";
for( $j= 0; $j <= 2; $j++){
echo "El número mas grande de la fila ".$j." es el: ".$mayormatriz[$j] ." <br>";
}
?>
