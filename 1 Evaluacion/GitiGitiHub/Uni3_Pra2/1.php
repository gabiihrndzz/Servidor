<?php
/*Crea una función para resolver la ecuación de segundo grado. Esta función recibe
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay
soluciones reales, devuelve FALSE */
echo "a: ".$_GET['a'];
echo '<br>';
echo "b: ".$_GET['b'];
echo '<br>';
echo "b: ".$_GET['c'];
echo '<br>';

function resolverEcuacionSegundoGrado($a, $b, $c) {
    // Calcula el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    // Si el discriminante es negativo, no hay soluciones reales

if ($discriminante < 0) {
    return false; // No hay soluciones reales
} elseif ($discriminante == 0) {
    $solucion = -$b / (2 * $a);
    return array($solucion); // Una solución real
} else {
    $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
    return array($solucion1, $solucion2); // Dos soluciones reales
}}
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$soluciones = resolverEcuacionSegundoGrado($a, $b, $c);

if ($soluciones === false) {
    echo "No hay soluciones reales.";
} else {
    echo "Las soluciones son: ".implode(", ", $soluciones);
}

?>
