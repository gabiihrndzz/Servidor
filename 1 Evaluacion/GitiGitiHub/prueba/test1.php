<?php
//Importamos la clase Persona.
require_once 'Persona.php';
//Creamos el objeto con los valores que se definen en el constructor.
$persona = new Persona('Fernando', 'Gaitan', 26);
//Mostramos por pantalla los valores.
echo $persona->saludar();
?>