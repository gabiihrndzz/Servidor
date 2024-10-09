<?php
/*Identificar entre dos números aleatorios cual es el mayor y si este es par o impar.
Buscar información previamente para generar números aleatorios y usarla para resolver el ejercicio.*/
$num1=random_int(0,100);
$num2=random_int(0,100);
$pito=0;
echo"El primer número es: ". $num1 ."<br></br> El segundo número es: ". $num2 ."<br></br>";
if($num1>$num2){
    echo "El primer número es mayor que el segundo";
$pito=$num1;
}
elseif($num2>$num1){
    echo "El segundo número es mayor que el primero";
    $pito=$num2;
}
elseif($num1==$num2){
    echo "El primer y segundo número son iguales";
    $pito=$num1;
}
if($pito%2==0)
{
echo"<br></br> El número mas mayor es par";
}
else{   
echo"<br></br> El número mas mayor es impar";
}
?>
