<?php
/*. Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu
mismo los valores, poniendo índices alfanuméricos a cada valor con tres
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y
muéstralo por pantalla en una tabla */
$lenguajes_cliente=array('js', 'python', 'html', 'css');
$lenguajes_servidor=array('php','java', 'node.js','csharp');
$lenguajes= array($lenguajes_cliente, $lenguajes_servidor);

echo 'cliente | server<br>';
for($i= 0;$i<count($lenguajes_cliente);$i++){
    echo'|'.$lenguajes_cliente[$i].'| ';
        echo'|'.$lenguajes_servidor[$i].'|  <br>';

}
echo 'hay '.count($lenguajes_servidor+$lenguajes_cliente).' lenguajes.';
?>
