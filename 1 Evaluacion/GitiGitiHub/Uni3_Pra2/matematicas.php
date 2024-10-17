<?php
// Función para resolver una ecuación de segundo grado
function resolverEcuacionSegundoGrado($a, $b, $c) {
    // Verifica si a es cero
    if ($a == 0) {
        return "El valor de 'a' no puede ser cero.";
    }

    // Calcula el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    // Si el discriminante es negativo, no hay soluciones reales
    if ($discriminante < 0) {
        return false;
    }
    // Si el discriminante es cero, hay una única solución real
    elseif ($discriminante == 0) {
        $solucion = -$b / (2 * $a);
        return array($solucion);
    }
    // Si el discriminante es positivo, hay dos soluciones reales
    else {
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return array($solucion1, $solucion2);
    }
}
?>
