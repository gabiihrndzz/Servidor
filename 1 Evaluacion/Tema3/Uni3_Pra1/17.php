<?php
/*17. Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por
pantalla. Utiliza la función array_merge() */
$animal=array('Lagartija', 'Araña', 'Perro', 'Gato', 'Raton');
$altura=array(12,34,45,52,12);
$cualidad= array('Sauce','Pino','Naranjo','Chopo','Perro','34');

$total=array_merge($animal,$altura,$cualidad);
for( $i= 0; $i<count($total); $i++ ) {
    echo''.$total[$i].'<br>';}
?>