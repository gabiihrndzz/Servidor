<?php
/*
Dados 3 números asignados dentro del código a mostrar el número mayor de los 3.
*/
function mayorNumero($numeros) {
    return max($numeros);
}
$numeros = [3, 5, 1, 8, 2];
$pito = mayorNumero($numeros);
echo "El mayor número es: " . $pito;
?>