<?php
/*11. Realizar un programa que muestre las películas que se han visto. Crear un array
que contenga los meses de enero, febrero, marzo y abril, asignando los valores
9,12,0 y 17 respectivamente. Si en alguno de los meses no se ha visto alguna
película no ha de mostrar la información de ese mes.*/

$peliculas=array('enero'=>9,'febrero'=>12,'marzo'=>0,'abril'=>17);
foreach($peliculas as $k=>$v) {
    if($v===0) {
    }
    else{echo $k.' => '.$v. "<br>";}}

?>
