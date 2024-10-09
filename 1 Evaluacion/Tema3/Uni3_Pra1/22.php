<?php
/*22. Crea un array con los siguientes valores: 5->1, 12->2, 13->56, x->42. Muestra el
contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A
continuación borrar el contenido de posición 5. Vuelve a mostrar el contenido y
por último elimina el array. */

$numeros = array(5=>1, 12=>2, 13=>56, 'x'=>42);
echo '<ol>';

foreach ($numeros as $valor) {
    echo '<li>' . $valor . '</li>';
}
echo '</ol>';

// Ordenar el array de menor a mayor
unset($numeros[5]);
// Mostrar los valores en una lista numerada
echo '<ol>';
foreach ($numeros as $valor) {
    echo '<li>' . $valor . '</li>';
}
echo '</ol>';

unset($numeros);

foreach ($numeros as $valor) {
    echo '<li>' . $valor . '</li>';
}


?>

