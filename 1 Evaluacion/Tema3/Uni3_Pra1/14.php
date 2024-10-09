<?php
/*. Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York,
Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el
contenido del array haciendo un recorrido diciendo el valor correspondiente a
cada índice, */
$ciudad=array('Madrid', 'Barcelona', 'Londres', 'New York','Los Ángeles','Chicago');
$ciudad = [
    'Madrid' => 'MD',
    'Barcelona'=>'BAR',
    'Londres' => 'LON',
    'New York' => 'NY',
    'Los Ángeles'=>'LA',
    'Chicago'=>'CHI',
];

foreach ($ciudad as $key => $value){
echo 'Indice del array que contiene como valor '.$value .' es '.$key."<br>";}

?>
