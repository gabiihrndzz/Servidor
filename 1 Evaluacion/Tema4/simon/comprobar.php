<?php
session_start(); 
echo "<style>
body{
    text-align: center;
    background-color: aliceblue;
}
</style>";

if (isset($_SESSION["color"]) && isset($_POST["color"])) {
    if ($_SESSION["color"] == $_POST["color"]) {
        echo "<h1>Felicidades, has acertado.</h1>";
        echo '<a href="pregunta.php">Siguiente ronda</a>';
    } else {
        echo "<h1>Incorrecto, fin del juego.</h1>";
    }
} else {
    echo "<h1>Error: no se recibió el color correctamente.</h1>";
}
?>
