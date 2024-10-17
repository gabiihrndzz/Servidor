<?php
/*2. Cree las cinco clases del esquema teniendo en cuenta su herencia. Todos los métodos
son públicos y los atributos son privados (dificultad fácil).*/
 class Vehiculo {
    public $color;
    public $peso;
    private $circula($);
    private $anadir_persona($peso_persona);
 }
 class Cuatro_Ruedas {
    public $numeroPuertas;
    private $repintar($color);
 }
 class Dos_Ruedas {
    public $cilindrada;
    private $poner_gasolina($litros);
 }
 class Coche {
    public $numero_cadenas_nieve;
    private $anadir_cadenas_nieve($num);
    private $quitar_cadenas_nieve($num);
 }
 class Camion {
    public $longitud;
    private $anadir_remolque($longitud_remolque);
 }
?>