<?php
/*18. Realiza el ejercicio anterior pero con la funicón array_push( */
$animal = array('Lagartija', 'Araña', 'Perro', 'Gato', 'Raton');
$altura = array(12, 34, 45, 52, 12);
$cualidad = array('Sauce', 'Pino', 'Naranjo', 'Chopo', 'Perro', '34');

// Agregar elementos de $altura y $cualidad a $animal
foreach ($altura as $a) {
    array_push($animal, $a);
}

foreach ($cualidad as $c) {
    array_push($animal, $c);
}

// Mostrar el resultado
for ($i = 0; $i < count($animal); $i++) {
    echo $animal[$i] . '<br>';
}
?>
