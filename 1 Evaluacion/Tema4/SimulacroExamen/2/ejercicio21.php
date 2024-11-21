<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMON - Resultado</title>
    <style>
        body {
            text-align: center;
            background-color: aliceblue;
        }
        .enviar {
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.5s ease;
        }
        .enviar:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION["color"]) && isset($_POST["color"])) {
        if ($_SESSION["color"] == $_POST["color"]) {
            echo "<h1>¡Felicidades, has acertado!</h1>";
            echo '<a href="ejercicio2.php"><button class="enviar">Jugar de nuevo</button></a>';
            session_destroy();
        } else {
            echo "<h1>Incorrecto, fin del juego.</h1>";
            echo '<a href="ejercicio2.php"><button class="enviar">Volver a intentar</button></a>';
            session_destroy();
        }

        // Remove the session data to ensure it does not persist across rounds
        unset($_SESSION["color"]);
    } else {
        echo "<h1>Error: no se recibió el número correctamente.</h1>";
    }
    ?>
</body>
</html>
