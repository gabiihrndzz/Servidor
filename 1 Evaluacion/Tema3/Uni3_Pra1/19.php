<?php
/*19. Muestra el array del ejercicio anterior pero en orden inverso */
$animal = array('Lagartija', 'Araña', 'Perro', 'Gato', 'Raton');
$altura = array(12, 34, 45, 52, 12);
$cualidad = array('Sauce', 'Pino', 'Naranjo', 'Chopo', 'Perro', '34');

// Agregar elementos de $altura y $cualidad a $animal
foreach ($altura as $a) {
    array_push($cualidad, $a);
}

foreach ($animal as $c) {
    array_push($cualidad, $c);
}

// Mostrar el resultado
for ($i = 0; $i < count($cualidad); $i++) {
    echo $cualidad[$i] . '<br>';
}
?>
