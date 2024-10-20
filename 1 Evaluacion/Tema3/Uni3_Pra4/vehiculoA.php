<?php
// Clase base abstracta
abstract class Vehiculo {
    private $color;
    protected $peso; // Cambiado a protected para permitir acceso en clases derivadas

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

    public function setPeso($peso) {
        $this->peso = $peso; // Añadido para permitir la modificación del peso
    }

    public function __toString() {
        return "El peso ". $this->getPeso() ." y color del vehículo: " . $this->getColor() . "<br>";
    }

    // Método abstracto
    abstract public function anadirPersona($peso_persona);

    // Método estático para ver atributos
    public static function ver_atributo($objeto) {
        echo "Color: " . $objeto->getColor() . "<br>";
        echo "Peso: " . $objeto->getPeso() . " kg<br>";
        if ($objeto instanceof CuatroRuedas) {
            echo "Número de puertas: " . $objeto->getNumeroPuertas() . "<br>";
        }
        if ($objeto instanceof DosRuedas) {
            echo "Cilindrada: " . $objeto->getCilindrada() . " cc<br>";
        }
    }
}

// Clase derivada
class CuatroRuedas extends Vehiculo {
    private $numeroPuertas;
    
    public function __construct($color, $peso, $numeroPuertas) {
        parent::__construct($color, $peso);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function anadirPersona($peso_persona) {
        $this->setPeso($this->getPeso() + $peso_persona); // Uso de métodos getter y setter
        return $this->getPeso(); // Retorna el nuevo peso
    }

    public function getNumeroPuertas() {
        return $this->numeroPuertas;
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

    public function anadirPersona($peso_persona) {
        $this->setPeso($this->getPeso() + $peso_persona + 2); // Añade 2 kg por el casco
        return $this->getPeso(); // Retorna el nuevo peso
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function __toString() {
        return parent::__toString() . ", Cilindrada: " . $this->cilindrada . " cc";
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
        return parent::__toString() . " Longitud: " . $this->longitud . " m";
    }
}
?>
