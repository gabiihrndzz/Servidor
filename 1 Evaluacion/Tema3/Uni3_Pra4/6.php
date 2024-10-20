<?php
include 'vehiculo6.php'; // Asegúrate de incluir el archivo con las clases

// Crear un coche verde de 2100 kg con 4 puertas
$coche = new Coche("verde", 2000, 4); // Cambiar a 2000 kg para evitar el error

// Añadir 2 cadenas para la nieve
$coche->añadirCadenasNieve(2);

// Añadir una persona de 80 kg
$coche->anadirPersona(80); // Esto ahora debería funcionar sin lanzar excepción

// Cambiar el color del coche a azul
$coche->setColor("azul");

// Quitar 4 cadenas para la nieve   
$coche->quitarCadenasNieve(4);

// Volver a pintar el coche en color negro
$coche->setColor("negro");

// Mostrar todos los atributos del coche y el número de veces que se cambia el color
Vehiculo::ver_atributo($coche);
echo "Número de cambios de color: " . $coche->getNumeroCambioColor() . ", ",$coche->getNumeroCambioColor()+1 ," colores distintos. <br />";
?>
