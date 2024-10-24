<?php
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
_END;


?>