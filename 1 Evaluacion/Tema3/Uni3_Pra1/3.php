<?php
/* 
Almacena en un array los 10 primeros números pares. Imprímelos cada uno en
una línea.
*/

$pares=array();

for( $i = 2; $i <=20; $i=$i+2 ){
    $pares[] = $i;
}
foreach( $pares as $j ){
    echo $j."<br>";}

 ?>
