<?php
//media
$conteo = 0;
$media = 0;
for($i= 1; $i <= 5; $i++){
    $Media[$i] = $i * 10;
    $conteo +=$Media [$i];
}

$media=$conteo /count($Media); //el count es el length de java.
var_dump($Media);
echo "<br></br>La media es: " .$media;

/*
IVAN
$sumaTotal=0;
$numeros= array(10,20,30,40,50);
    for($j =0;$j <count(value: $numeros);$j++){
        $sumaTotal += $numeros
    }
...

*/


/*YO

$contador=0;
$nums=0;
$suma=0;
for($i=0;$i<=1;$i++){
    for($j=0;$j<=2;$j++){
        $contador=$contador+10;
        $M[$i][$j]=$contador;
        echo" [";
        echo $M[$i][$j];
        echo"] ";
        $suma+=$M[$i][$j];
        $nums=$nums+1;
    }
}
echo "<br><br>";
$media1=$suma/$nums;
echo "la suma total da: ";
echo $suma;
echo "<br><br> la media da: ";
echo $media1;
echo "<br><br>";*/

?>