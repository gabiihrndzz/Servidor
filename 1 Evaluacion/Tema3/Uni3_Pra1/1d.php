<?php
/*d) Declara un array de strings de nombre $jugador e introduce en él 5 elementos
que sean "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación usando el
operador de concatenación haz que se muestre la frase: <<La alineación del
equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich. */

$jugador=array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
echo "La alineacion del equipo esta compuesta por: ";
for($i= 0;$i<count($jugador);$i++){
echo $jugador[$i].", ";} 
?> 