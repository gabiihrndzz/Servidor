<?php
/* 
2. Queremos almacenar en una matriz el número de alumnos con el que cuenta una
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma.
*/

function tab($num) {
    return str_repeat("&nbsp;", $num);  // Repite la entidad &nbsp; tantas veces como se indique
}

$niveles = array("Básico", "Medio", "Perfecc."); 
$idiomas = array("Inglés", "Francés", "Alemán", "Ruso");

// Matriz que contiene el número de alumnos por nivel e idioma
$alumnos = array(
    array(15, 10, 5, 8),  // Nivel Básico
    array(12, 14, 6, 3),  // Nivel Medio
    array(9, 11, 7, 4)    // Nivel Perfeccionamiento
);

// Imprimir encabezados
echo "Idiomas: ";
for($i= 0;$i<count($idiomas);$i++){
    echo $idiomas[$i]." | ";}
echo "<br>";

// Imprimir datos de alumnos
for ($j = 0; $j < count($niveles); $j++) {
    echo $niveles[$j] . ": "; // Imprimir nivel
    for ($i = 0; $i < count($idiomas); $i++) {
        echo tab(8).$alumnos[$j][$i] .  " | "; // Imprimir número de alumnos
    }
    echo "<br>"; // Salto de línea después de cada nivel
}
?>
