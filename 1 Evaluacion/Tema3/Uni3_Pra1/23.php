<?php
/*Crea un array multidimensional para poder guardar los componentes de dos
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el
padre, la madres y los hijos, donde padre, madre e hijos serán los índices y los
índices y los nombres serán los valores. Esta estructura se ha de crear en un solo
array asociativo de tres dimensiones. */

$Simpsons=array('Padre'=>'Homer', 'Madre'=> 'Marge','Hijos'=>'Bart','Lisa','Maggie');
$Griffin=array('Padre'=>'Peter', 'Madre'=> 'Louis','Hijos'=>'Stewie','Chris','Meg');

foreach ($Griffin as $a) {
   array_push($Simpsons,$a);
}

foreach ($Simpsons as $valor) {
    echo '<li>' . $valor . '</li>';
}



?>

