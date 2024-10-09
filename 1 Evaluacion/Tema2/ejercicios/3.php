<?php
$horas =57; // Cambia este valor según las horas trabajadas
$tarifaNormal = 20; // Tarifa por hora normal
$tarifaExtraDoble = $tarifaNormal * 2; // Tarifa por hora extra (doble)
$tarifaExtraTriple = $tarifaNormal * 3; // Tarifa por hora extra (triple)

$dinero = 0;

if ($horas > 40) {
    $horasNormales = 40;
    $horasExtras = $horas - $horasNormales;

    // Calcular el pago por las primeras 40 horas
    $dinero += $horasNormales * $tarifaNormal;

    // Calcular las horas extras
    if ($horasExtras <= 8) {
        $dinero += $horasExtras * $tarifaExtraDoble;
    } else {
        // Primeras 8 horas extras al doble
        $dinero += 8 * $tarifaExtraDoble;
        // El resto de las horas extras al triple €
        $horasExtras -= 8;
        $dinero += $horasExtras * $tarifaExtraTriple;
    }
} else {
    // Si no hay horas extras, solo se paga por horas normales
    $dinero += $horas * $tarifaNormal;
}

echo "El total de dinero generado esta semana es de: " . $dinero . "€";
?>
