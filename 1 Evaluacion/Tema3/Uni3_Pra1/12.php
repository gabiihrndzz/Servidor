<?php
/*Crea un array asociativo para introducir los datos de una persona
 Nombre: Pedro Torres
 Dirección: C/Mayor, 37
 Teléfono: 123456789
Al acabar muestra los datos por pantalla*/

$ciudad=array('Nombre'=>'Pedro Torres','Direccion'=>'C\ Mayor, 37','Telefono'=>123456890);
foreach($ciudad as $k=>$v) {
    echo $k.' => '.$v. "<br>";}

?>
