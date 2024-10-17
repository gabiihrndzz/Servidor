<?php
/*4. Escribe una función que reciba un array de números, y un número, el límite. La
función tiene que devolver un nuevo array que contenga solo los elementos del
array original menores que el límite.*/
$a = isset($_GET['a1']);
$b = isset($_GET['a2']);
$c = isset($_GET['a3']);
$d = isset($_GET['a4']);
$e = isset($_GET['a5']);
$f = isset($_GET['a6']);
$g = isset($_GET['a7']);
$h = isset($_GET['a8']);
$i = isset($_GET['a9']);
$limite = isset($_GET['limite']);
$arr = array(array($_GET['a1'], $_GET['a2'], $_GET['a3']), array($_GET['a4'], $_GET['a5'], $_GET['a6']), array($_GET['a7'], $_GET['a8'], $_GET['a9']));
foreach ($arr as $subArray) {
    foreach ($subArray as $element) {
        echo $element . " ";
    }
    echo "<br>"; // Para saltar a la siguiente línea después de cada subarreglo
}
echo "<br>Pasado por el limite: ".$_GET['limite']."<br>";
foreach ($arr as $subArray) {
    foreach ($subArray as $element) {
        if($element <= $_GET['limite'])
        echo $element . " ";
        else{
            echo  " - ";
        }
    }
    echo "<br>"; // Para saltar a la siguiente línea después de cada subarreglo
}

?>
