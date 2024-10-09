<?php
// Crear un array llamado deportes
$deportes = array('futbol', 'baloncesto', 'natación', 'tenis');

// Mostrar los valores usando un bucle for
echo '<ul>';
for ($i = 0; $i < count($deportes); $i++) {
    echo '<li>' . $deportes[$i] . '</li>';
}
echo '</ul>';

// Mostrar el total de valores que contiene
$totalValores = count($deportes);
echo 'Total de valores: ' . $totalValores . '<br>';

// Sitúa el puntero en el primer elemento y muestra el valor actual
$current = reset($deportes);
echo 'Primer elemento: ' . $current . '<br>';

// Avanza una posición y muestra el valor actual
next($deportes);
$current = current($deportes);
echo 'Segundo elemento: ' . $current . '<br>';

// Coloca el puntero en la última posición y muestra su valor
end($deportes);
$current = current($deportes);
echo 'Último elemento: ' . $current . '<br>';

// Retrocede una posición y muestra este valor
prev($deportes);
$current = current($deportes);
echo 'Elemento anterior al último: ' . $current . '<br>';
?>
