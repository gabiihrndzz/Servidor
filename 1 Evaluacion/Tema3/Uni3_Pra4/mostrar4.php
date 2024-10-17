<?php
    /*/*Realice las siguientes operaciones (continuación del ejercicio anterior, dificultad
    media):
     Aplique el método repintar(color) para cambiar el color definido en la
    clase Vehículo.
     Ejecute el método poner_gasolina(litros) para cambiar el peso definido en
    la clase Vehículo. En este ejercicio, un litro equivale a un kilo.
     Aplique los métodos añadir_cadenas_nieve() y quitar_cadenas_nieve()
    modificando el atributo numero_cadenas_nieve.
     Aplique el método añadir_remolque(longitud_remolque) modificando el
    atributo longitud.
     En la página mostrar.php, cree un coche verde de 1400 kg. Añada dos
    personas de 65 kg cada una. Muestre su color y su nuevo peso.
     Retome el coche en rojo y añada dos cadenas para la nieve.
     Muestre su color y su número de cadenas para la nieve.
     Cree un objeto Dos_ruedas negro de 120 kg. Añada una persona de 80 kg.
    Ponga 20 litros de gasolina.
     Muestre el color y el peso de dos ruedas.
     Cree un camión azul de 10000 kg y de 10 metros de longitud con 2
    puertas. Añada un remolque de 5 metros y una persona de 80 kg.
     Muestre su color, su peso, su longitud y su número de puertas.
    */
    include 'vehiculo.php';

    $coche = new Coche ("verde", 1400, 4, 0);

    $coche -> anadirPersona(130);
   // echo"<br>". "El nuevo color del coche es: ". $coche->getColor()."<br>";
   // echo "El nuevo peso del coche es: ". $coche->getPeso()."<br>";

    $coche -> repintar("rojo");
   // echo "El nuevo color del coche repintado es: ". $coche->getColor();
    $coche->anadirCadenasNieve(2);
   // echo "El número de cadenas para la nieve del coche es de: " . $coche->getAnadirCadenasNieve() . "<br>";
   echo $coche->__toString();
   echo"<br>";
   echo"<br>";

    $DosRuedas= new DosRuedas ( "negro",120,5);
    $DosRuedas -> anadirPersona (80);
    $DosRuedas -> ponerGasolina(20);
    $nuevoPeso = $coche->anadirPersona(peso_persona: 70);
    echo "<br>Nuevo peso del vehículo: " . $nuevoPeso . " kg";

    echo "<br>";

    $DosRuedas -> anadirpersona(80);
    $DosRuedas -> ponergasolina(20);
    echo " El color del dos ruedas es: ". $DosRuedas ->getColor(). "<br>";
    echo " El peso del dos ruedas es: ". $DosRuedas ->getPeso(). "<br>";

    echo "<br>";

    $camion = new Camion("azul",10000,2,10);
    $camion->anadirRemolque(5);
    $camion->anadirPersona(80);

    echo $camion->__toString();
    ?>