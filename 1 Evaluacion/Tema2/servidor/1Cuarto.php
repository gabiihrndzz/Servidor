<?php
/*Dados 2 números asignados dentro del código a variables realizar el siguiente
cálculo: si son iguales que los multiplique, si el primero es mayor que el segundo
que los reste y si no que los sume. Mostrar el resultado en pantalla*/
$num1 = 0;

    $n = count(value: $matriz);
    //n es la length de matriz
    $sumaPrimaria = 0;
    $sumaSecundaria = 0;
    echo "<br></br>" .$n;

    for ($i = 0; $i < $n; $i++) {
        $sumaPrimaria += $matriz[$i][$i]; // Diagonal primaria
        $sumaSecundaria += $matriz[$i][$n - 1 - $i]; // Diagonal secundaria
    }
    echo "<br></br> La suma de la principal da: ". $sumaPrimaria ."<br></br>";
    echo "La suma de la secundaria da: ". $sumaSecundaria ."<br></br>";

// Ejemplo de uso

?>