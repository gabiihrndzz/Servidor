<?php
/*20. Implementa un array asociativo con los siguientes valores:
 Muestra los valores del array en una tabla, has de mostrar el índice y el valor
asociado.
 Elimina el estadio asociado al Real Madrid.
 Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta
vez en una lista numerada */
$estadios=array('Barcelona'=>'Camp nou','Madrid'=>'Bernaleo','Valencia'=>'Mestalla','Sporting'=>'Molinon');

foreach($estadios as $k=>$r){
    echo $k .' '. $r. '<br>';
}

echo '<br>';
unset($estadios['Madrid']);
// Mostrar el resultado
foreach($estadios as $k=>$r){
    echo $k .' '. $r. '<br>';
}
?>
