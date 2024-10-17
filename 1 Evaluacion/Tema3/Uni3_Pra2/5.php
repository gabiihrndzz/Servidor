<?php
    // isset --> TRUE si la variable está inicializada y no es NULL
    // empty --> TRUE si la variable no está inicializada o su valor es FALSE
    // is_int --> Para comprobar el tipo de dato de $var

    $a = isset($_GET['variable']);
    $aa = isset($_GET['variable1']);
    
    echo "ISSET true las que están inicializadas y false las que son null: ";
    echo "<br>";
    echo "isset a: ", ($a ? 'true' : 'false');
    echo "<br>";
    echo "isset vacia: ", ($aa ? 'true' : 'false');
    echo "<br><br>";
    
    echo "TRUE si la variable no está inicializada o su valor es FALSE <br>";
    echo "empty a: ", (empty($_GET['variable']) ? 'true' : 'false');
    echo "<br>";
    echo "empty vacia: ", (empty($_GET['variable1']) ? 'true' : 'false');
    echo "<br><br>";
    
    echo "Para comprobar el tipo de dato de las variables <br>";
    echo "is_int a: ", (is_int($_GET['variable']) ? 'true' : 'false');
    echo "<br>";
    echo "is_int vacia: ", (is_int($_GET['variable1']) ? 'true' : 'false');
    echo "<br><br><br>";

    // strlen --> Devuelve la longitud de $cad
    // explode --> Parte una cadena utilizando $token como separador, devuelve un array de cadenas
    // strtolower --> Devuelve la cadena en minúsculas
    if (isset($_GET['cadena'])) {
        echo "strlen: ", strlen($_GET['cadena']);
        echo "<br>";
        echo "explode: ", implode(", ", explode("r", $_GET['cadena'])); // Cambiado para mostrar el resultado correctamente
        echo "<br>";
        echo "strtolower: ", strtolower($_GET['cadena']);
        echo "<br><br><br>";
    }

    // sort --> Ordena el array por valor en orden ascendente
    // array_values --> devuelve los valores de arr 
    // count --> devuelve el número de elementos del array 
    $arr = [];
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_GET["array$i"])) {
            $arr[] = $_GET["array$i"];
        }
    }
    
    sort($arr); // Ordenar el array antes de mostrarlo
    echo "sort: ", implode(", ", $arr); // Cambiado para mostrar el resultado
    echo "<br>";
    echo "array_values: ", implode(", ", array_values($arr)); // Cambiado para mostrar el resultado
    echo "<br>";
    echo "count: ", count($arr);
?>
