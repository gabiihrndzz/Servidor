<?php
class Persona {
public $nombre;
public $apellido;
public $edad;
public function __construct($nombre, $apellido, $edad) {
$this->nombre = $nombre;
$this->apellido = $apellido;
$this->edad = $edad;
}

public function __destruct(){
    echo "Persona destruida";
}
public function saludar(){
return 'Hola, soy ' . $this->nombre . ' ' . $this->apellido . ' y
tengo ' . $this->edad . ' años <br>';
}
}
?>