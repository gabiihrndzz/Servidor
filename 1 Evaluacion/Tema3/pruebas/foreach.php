<?php
/*$mascotas = array('Perro' => "Yunito",
 'Gato' => "Wilson",
 'Canario' => "Piolin",
 'Tortuga' => "Mbappe");
foreach($mascotas as $impresoras => $raza){
    echo $impresoras . " => ". $raza ."<br></br>" ;
}*/

$perros= array("Mastín"=>"Yunito","Salchicha" =>"Fuet", "Chihuahua"=> "Sarnoso" );
$gatos= array("Persa"=>"Otis","Común" =>"Garfield", "Siamés"=> "Princesa" );
$mascotas= array($perros, $gatos);
echo "<br></br>Perros: <br></br>";
/*foreach($perros as $ayo => $names){
    echo $ayo . " -->  ". $names ." | " ;
}
echo "<br></br>Gatos: <br></br>";
foreach($gatos as $ayay => $nombres){
    echo $ayay . " --> ". $nombres ." | " ;}*/
    foreach($mascotas as $animal => $tipo){
        echo $animal. ":<br>";
        foreach($tipo as $raza => $nombre){
            echo $raza. ": ". $nombre. "<br>";
        }

    }

?>
