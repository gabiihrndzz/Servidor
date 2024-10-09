<?php
// 25. Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. 

$Ciudad=array('Ciudad'=>'Madrid','Barcelona','Toledo');
$Nombre=array('Nombre'=>'Pedro','Susana','Toledo');
$Edad=array('edad'=>32,34,42);
$Telefono=array('Telefono'=>'91-999','93-000','925-09');


foreach ($Ciudad as $a) {
    array_push($Nombre, $a);
}

foreach ($Edad as $c) {
    array_push($Nombre, $c);
}

foreach ($Telefono as $b) {
    array_push($Nombre, $b);
}

// Mostrar el resultado
for ($i = 0; $i < count($Nombre); $i++) {
    echo $Nombre[$i] ,  '<br>';
}

?>
