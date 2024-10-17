<?php
/*4. Escribe una función que reciba un array de números, y un número, el límite. La
función tiene que devolver un nuevo array que contenga solo los elementos del
array original menores que el límite.*/
$a = isset($_GET['1']);
$b = isset($_GET['2']);
$c = isset($_GET['3']);
$d = isset($_GET['4']);
$e = isset($_GET['5']);
$f = isset($_GET['6']);
$g = isset($_GET['7']);
$h = isset($_GET['8']);
$i = isset($_GET['9']);
$limite = isset($_GET['Limite']);
$arr=array(array($a,$b,$c),array($d,$e,$f),array($g,$h,$i));
for($l=0;$l<=9;$l++){
echo ' ';
    if($arr[$i]>$limite){
        echo "1";
    }    
    else{
        echo'bbbb';
    }
}
?>
