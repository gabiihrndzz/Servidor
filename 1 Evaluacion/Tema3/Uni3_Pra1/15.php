<?php
/*. Crea un array con los nombre Pedro, Ismael, Sonia, Clara, Susana, Alfonso y
Teresa. Muestra el número de elementos que contiene y cada elemento en una
lista no numerada de html.. */
$nombre=array('Pedro', 'Ismael', 'Sonia', 'Clara','Susana','Alfonso','Teresa');

for($i= 0;$i<count($nombre);$i++){
    echo''.$nombre[$i].', puesto '.$i.'<br>';

}
echo 'hay '.count($nombre).' nombres.';
?>
