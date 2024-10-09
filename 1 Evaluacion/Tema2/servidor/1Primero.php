<?php
//print la matriz
$contador=1;
for($i=0;$i<=1;$i++){
    for($j=0;$j<=2;$j++){
        $M[$i][$j]=$contador;
        $contador++;
        echo" [";
        echo$M[$i][$j];
        echo"] ";
    }
}
echo "<br><br>";
echo __FILE__;
echo "<br><br>";

var_dump(value: $M);
?>