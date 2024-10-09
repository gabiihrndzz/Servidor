<?php
function tab($num) {
    return str_repeat("&nbsp;", $num);  // Repite la entidad &nbsp; tantas veces como se indique
}

echo tab(6).$_POST['Num1'];
echo "<br></br>";
echo tab(3). "+ ".$_POST['Num2'];
echo "<br>______</br>";

$suma=$_POST['Num1']+$_POST['Num2'];
echo tab(6).$suma;
echo "<br></br>";

/*var_dump($_SERVER);
echo "<br></br>";*/

var_dump($_SERVER['DOCUMENT_ROOT']);
echo "<br></br>";

var_dump($_SERVER['HTTP_SEC_CH_UA']);
echo "<br></br>";

?>