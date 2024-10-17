<?php
// Clase base
class Vehiculo {
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function circula() {
        return "El vehículo circula.";
    }

    // Métodos getter
    public function getColor() {
        return $this->color;
    }
    
    public function getPeso() {
        return $this->peso;
    }
    
    // Métodos setter
    public function setColor($color) {
        $this->color = $color;
    }

    public function __toString() {
        return "El peso ". $this->getPeso() ." y color del vehículo: " . $this->getColor() . "<br>";
    }

    public function anadirPersona($peso_persona) {
        $this->peso += $peso_persona;
        return $this->peso; // Retorna el nuevo peso
    }
}

// Clase derivada
class CuatroRuedas extends Vehiculo {
    private $numeroPuertas;
    
    public function __construct($color, $peso, $numeroPuertas) {
        parent::__construct($color, $peso);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function repintar($color):string {
        $this->setColor($color);
        return "El vehículo tiene un nuevo color: " . $color;
    }

    public function __toString() {
        return parent::__toString() . "Número de puertas: " . $this->numeroPuertas;
    }
}

// Clase derivada
class DosRuedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function ponerGasolina($litros) {
        $this->setPeso=($this->getPeso()+$litros);
        return "Se han añadido $litros litros de gasolina.";
    }

    public function __toString() {
        return parent::__toString() . ", Cilindrada: " . $this->cilindrada . " cc";
    }
}

// Clase derivada de CuatroRuedas
class Coche extends CuatroRuedas {
    private $numeroCadenasNieve;

    public function __construct($color, $peso, $numeroPuertas, $numeroCadenasNieve) {
        parent::__construct($color, $peso, $numeroPuertas);
        $this->numeroCadenasNieve = $numeroCadenasNieve;
    }

    public function anadirCadenasNieve($num) {
        $this->numeroCadenasNieve += $num;
        return "El vehículo tiene ahora " . $this->numeroCadenasNieve . " cadenas de nieve";
    }

    public function quitarCadenasNieve($num) {
        if(($this->numeroCadenasNieve-$num)<0){
            $this->numeroCadenasNieve=0;
        }
        else{
            $this->numeroCadenasNieve -= $num;}
    }

    public function __toString() {
        return parent::__toString() . "<br>Número de cadenas de nieve: " . $this->numeroCadenasNieve;
    }
}

// Clase derivada de CuatroRuedas
class Camion extends CuatroRuedas {
    private $longitud;

    public function __construct($color, $peso, $numeroPuertas, $longitud) {
        parent::__construct($color, $peso, $numeroPuertas);
        $this->longitud = $longitud;
    }

    public function anadirRemolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }

    public function __toString() {
        return parent::__toString() . ", Longitud: " . $this->longitud . " m";
    }
}
?>