<?php
/* 
9. Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e
imprimir la columna que tuvo la máxima suma y la suma de esa columna.*/
$jf;
$matriz=array();
$mayor=array(-1);
$sumac=0;
for ($i= 0; $i <= 4; $i++){
$sumac=0;

    for ($j= 0; $j <= 4; $j++){
        $matriz[$i][$j]= rand(0,1000);
        $sumac=$sumac+$matriz[$i][$j];
        echo"(". $matriz[$i][$j] .") ";
        echo "El número mas grande es el: ".$sumac ." <br>";

        if($mayor<$matriz[$i][$j]){ 
            $mayor[$i][$j]= $matriz[$i][$j];
            $sumac=$mayor[$i][$j];
        }
    }
echo "<br>";
}
echo "<br>";
echo "El número mas grande es el: ".$sumac ." <br>";
?>
