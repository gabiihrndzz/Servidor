<?php
echo "Un palíndromo es una palabra, frase, número o secuencia de caracteres que se lee igual hacia adelante y hacia atrás<br>";

$a = isset($_GET['a']) ? $_GET['a'] : ''; // Captura el valor de 'a' desde la URL
echo "La frase/palabra '{$a}': <br>";

$palindromo = true; // Inicializa la variable

// Limpiar la cadena: quitar espacios y convertir a minúsculas
$cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $a));
/*preg_replace es una función en PHP que se utiliza para realizar búsquedas y reemplazos de patrones en cadenas utilizando expresiones regulares. Es muy útil para manipular texto de manera flexible y poderosa.

preg_replace(pattern, replacement, subject, limit, count);
pattern: La expresión regular que se desea buscar. Debe estar delimitada por caracteres, como /.
replacement: La cadena que reemplazará las coincidencias encontradas.
subject: La cadena o un arreglo de cadenas en las que se realizará la búsqueda y el reemplazo.
limit (opcional): El número máximo de reemplazos a realizar. Por defecto, se reemplazan todas las coincidencias.
count (opcional): Si se proporciona, se llenará con el número de reemplazos realizados.*/


// Verificar si es palíndromo
if ($cadena !== strrev($cadena)) {
    $palindromo = false;
}

if ($palindromo) {
    echo "'{$a}' es un palíndromo.";
} else {
    echo "'{$a}' no es un palíndromo.";
}
?>
