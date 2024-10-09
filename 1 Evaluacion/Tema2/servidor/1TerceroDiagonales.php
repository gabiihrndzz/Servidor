
<?php
//matrices diagonales Suma
$matriz = [
    [15, 2,  4,  8],
    [3,  2,  1,  1],
    [4, 25, 10,  1],
    [9,  8,  2, 13]];

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
