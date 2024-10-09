<?php
/*
Dados 2 números asignados dentro del código a variables realizar el siguiente
cálculo: si son iguales que los multiplique, si el primero es mayor que el segundo
que los reste y si no que los sume. */
$num1= 4;
$num2= 3;
$resultado=0;
if   ($num1 < $num2){
$resultado=$num1+$num2;}
if   ($num1 > $num2){
$resultado=$num1-$num2;}
if   ($num1 == $num2){
$resultado=$num1*$num2;}
echo "El resultado da: " .$resultado;
?>