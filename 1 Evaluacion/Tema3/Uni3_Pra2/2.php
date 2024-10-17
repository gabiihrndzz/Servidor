<?php
// Incluir el archivo matematicas.php
include 'matematicas.php';

// Capturando los valores de a, b y c desde la URL
$a = isset($_GET['a']) ? (float)$_GET['a'] : 0;
$b = isset($_GET['b']) ? (float)$_GET['b'] : 0;
$c = isset($_GET['c']) ? (float)$_GET['c'] : 0;

echo "a: " . $a . "<br>";
echo "b: " . $b . "<br>";
echo "c: " . $c . "<br>";

// Llamando a la función y mostrando el resultado
$soluciones = resolverEcuacionSegundoGrado($a, $b, $c);

if (is_array($soluciones)) {
    echo "Las soluciones son: " . implode(", ", $soluciones);
} elseif ($soluciones === false) {
    echo "No hay soluciones reales.";
} else {
    echo $soluciones; // Mensaje de error si 'a' es cero
}
echo "<br>Para poner valores hay que ponerlos en la URL, por ejemplo http://localhost:8080/Uni3_Pra2/2.php?a=1&b=-3&c=2";
?>
