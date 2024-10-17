<?php
/* Cree los accesos de todos los atributos.
 Cree un constructor en la clase vehículo que tome como argumento el
color y el peso.
 Cree el método _toString de la clase vehículo para que muestre
información respecto al objeto.
 Modifique el método circula() para que muestre "El vehículo circula".
 Modifique el método añadir_persona(peso_persona) para que cambie el
peso del vehículo en función del peso de la persona que pasa como
argumento.
 Cree la página mostrar.php y un vehículo negro de 1500 kg y muestre
información sobre el vehículo.
 Haga que circule. Añada una persona de 70 kg y muestre el nuevo peso
del vehículo.*/
include 'vehiculo.php';
$coche = new Vehiculo("negro", 1500);
echo "<br>" . $coche->__toString();
echo "<br>" . $coche->circula();
$nuevoPeso = $coche->anadirPersona(peso_persona: 70);
echo "<br>Nuevo peso del vehículo: " . $nuevoPeso . " kg";
?>
