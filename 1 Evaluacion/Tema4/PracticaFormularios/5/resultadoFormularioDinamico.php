<?php
if(isset($_POST["num1"])){
    echo "<style>
    body {
        background-color: aliceblue;
    }
</style>";

echo "<form action=\"resultadoFormularioDinamico.php\" method=\"POST\">";
for( $i = 0; $i < 10; $i++ ){
    echo <<<_END
    <label for="$i">$i:</label>
    <input type="text" id="num1" name="$i" required>
    <br>
    _END;
}
echo <<<_END
<input type="submit" value="Enviar">
_END; }
else{
    echo "<style>
    body {
        background-color: aliceblue;
    }
</style>";

echo "<form>";
for( $i = 0; $i < 10; $i++ ){
    echo <<<_END
    <label for="$i">$i:</label>
    <input type="text" id="num1" name="$i" required>
    <br>
    _END;
}
echo <<<_END
<input type="submit" value="Enviar">
_END;

echo "<br>";
var_dump(value: $_POST);
$suma=0;
echo "<br>";
foreach($_POST as $q){
    $numero=intval( $q );
    $suma += $numero;	
    echo $numero, " <br>";

}
echo "La suma total da: ",$suma;}