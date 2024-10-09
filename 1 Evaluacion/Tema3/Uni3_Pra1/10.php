<?php
/* 
10. Carga el siguiente vector e imprime los valores del array asociativo usando la
estructura de control foreach:
*/
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
foreach ($v as $k=>$v1) {
    $v[$k]= 0;
    echo''.$v1.'<br>';
}

?>

