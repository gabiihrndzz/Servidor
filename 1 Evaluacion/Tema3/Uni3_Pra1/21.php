<?php
/*21. Implementa un array asociativo con los siguientes valores y ordénalo de menor a
mayor. Muestra los valores en una tabla.
$numeros=array(3,2,8,123,5,1) */

$numeros = array(3, 2, 8, 123, 5, 1);

// Ordenar el array de menor a mayor
sort($numeros);

// Mostrar los valores en una lista numerada
echo '<ol>';
foreach ($numeros as $valor) {
    echo '<li>' . $valor . '</li>';
}
echo '</ol>';
?>

