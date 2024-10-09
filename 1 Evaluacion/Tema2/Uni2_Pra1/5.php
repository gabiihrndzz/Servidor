<?php
/*Crear un programa partir de 3 valores, a b y c que corresponden a los tres
coeficientes de una ecuación de segundo grado muestre las soluciones de la
misma La solución de la ecuación de segundo grado depende del signo de b2-4ac:
 si b2-4ac es negativo no hay soluciones
 si es nulo, hay sólo una solución -b/2a
 si es positivo, hay dos soluciones: (-b+sqrt(b2-4ac))/(2a) y (-bsqrt(b2-4ac))/(2a).*/
$a= 1;
$b= 4;
$c= 1;
$respuesta=0;
if(($b*2)-(4*$a*$c)<0){
echo "No hay soluciones";
}
elseif(($b*2)-(4*$a*$c)== 0){
    $respuesta=-$b/2*$a;
    echo "La solucion es = -b/2a = ". $respuesta;}
elseif(($b*2)-(4*$a*$c)>= 0){
    $respuesta=-$b+sqrt($b*2-4*$a*$c)/(2*$a);
    echo "La solucion es = (-b+sqrt(b2-4ac))/(2a) =  ". $respuesta;
    $respuesta=-$b-sqrt($b*2-4*$a*$c)/(2*$a);
    echo "<br></br> y, la solucion también es = (-b-sqrt(b2-4ac))/(2a) = ". $respuesta;}
?>