<?php
    /*
    5. Realice las siguientes operaciones (continuación del ejercicio anterior, dificultad
    media):
         Convierta en abstractos la clase Vehículo y su método
        añadir_persona(peso_persona).
         Defina el método añadir_persona(peso_persona) en la clase Dos_ruedas
        para que este método añada el peso de la persona, más 2 kg del casco del
        dos ruedas.
         Defina el método añadir_persona(peso_persona) en la clase
        Cuatro_ruedas para hacer lo mismo que en la clase vehículo.
         Cree un método público estático en la clase Vehículo que se designe como
        ver_atributo.
         Este método toma como argumento un objeto y muestra el valor de todos
        sus atributos (si existen), es decir, el color, el peso, el número de puertas,
        la cilindrada, la longitud y el número de cadenas para la nieve.
         En la página mostrar.php cree un dos ruedas rojo de 150 kg.
         Añada una persona de 70 kg y muestre su peso total.
         Cambie a verde el color de dos ruedas. Incluya una cilindrada de 1000.
         Muestre todos los valores de los atributos de dos ruedas con la función
        ver_atributo.
         Cree un camión blanco de 6000 kg.
         Añada una persona de 84 kg. Vuelva a pintarlo, en color azul. Incluya 2
        puertas.
         Muestre todos los valores de los atributos del camión con la función
        ver_atributo.
    Mostrar.php ha de enseñar el siguiente resultado
    */
    include 'vehiculoA.php';
// Crear un objeto de DosRuedas
$doscuerdas = new DosRuedas("rojo", 150, 1000);
$doscuerdas->anadirPersona(70);
$doscuerdas->setColor("verde");

Vehiculo::ver_atributo($doscuerdas);

// Crear un objeto de Camion
$camion = new Camion("blanco", 6000, 2, 0); // Longitud inicial
$camion->anadirPersona(84);
$camion->setColor("azul");
Vehiculo::ver_atributo($camion);
    ?>