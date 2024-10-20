<?php
// Clase base abstracta
abstract class Vehiculo {
    private $color;
    protected $peso; // Cambiado a protected para permitir acceso en clases derivadas
    protected static $numero_cambio_color = 0; // Atributo estático protegido
    const SALTO_DE_LINEA = '<br />'; // Constante para salto de línea

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
        self::$numero_cambio_color++; // Incrementar el contador al cambiar el color
    }

    public function getNumeroCambioColor() {
        return self::$numero_cambio_color; // Método para obtener el número de cambios de color
    }

    public function setPeso($peso) {
        if ($peso <= 2100) { // Limitar el peso máximo a 2100 kg
            $this->peso = $peso;
        } else {
            throw new Exception("El peso no puede ser mayor a 2100 kg.");
        }
    }

    public function __toString() {
        return "El peso ". $this->getPeso() ." y color del vehículo: " . $this->getColor() . self::SALTO_DE_LINEA;
    }

    // Método abstracto
    abstract public function anadirPersona($peso_persona);

    // Método estático para ver atributos
    public static function ver_atributo($objeto) {
        echo "Color: " . $objeto->getColor() . self::SALTO_DE_LINEA;
        echo "Peso: " . $objeto->getPeso() . " kg" . self::SALTO_DE_LINEA;
        if ($objeto instanceof CuatroRuedas) {
            echo "Número de puertas: " . $objeto->getNumeroPuertas() . self::SALTO_DE_LINEA;
        }
        if ($objeto instanceof DosRuedas) {
            echo "Cilindrada: " . $objeto->getCilindrada() . " cc" . self::SALTO_DE_LINEA;
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
}

// Clase derivada de CuatroRuedas (Coche)
// Clase derivada de CuatroRuedas (Coche)
class Coche extends CuatroRuedas {
    private $cadenasNieve = 0; // Atributo para el número de cadenas para la nieve

    public function __construct($color, $peso, $numeroPuertas) {
        parent::__construct($color, $peso, $numeroPuertas);
    }

    public function anadirPersona($peso_persona) {
        // Verificar si el peso total no excede 2100 kg
        if ($this->getPeso() + $peso_persona > 2100) {
            throw new Exception("No se puede añadir la persona, el peso total excedería 2100 kg.");
        }
        parent::anadirPersona($peso_persona);
        // Verifica si se necesita poner cadenas para la nieve
        if ($this->getPeso() >= 1500 && $this->cadenasNieve <= 2) {
            echo "Atención, ponga 4 cadenas para la nieve." . self::SALTO_DE_LINEA;
        }
    }

    public function añadirCadenasNieve($cantidad) {
        $this->cadenasNieve += $cantidad;
    }

    public function quitarCadenasNieve($cantidad) {
        $this->cadenasNieve = max(0, $this->cadenasNieve - $cantidad);
    }

    public function getCadenasNieve() {
        return $this->cadenasNieve;
    }

    public function __toString() {
        return parent::__toString() . "Número de puertas: " . $this->getNumeroPuertas() . self::SALTO_DE_LINEA .
               "Cadenas para nieve: " . $this->getCadenasNieve() . self::SALTO_DE_LINEA;
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
