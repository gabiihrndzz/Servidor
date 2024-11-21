<?php
session_start();
$ColorAdivinar = rand(0, 3);
$colorSeleccionado = "";

switch ($ColorAdivinar) {
    case 0:
        $colorSeleccionado = "Rojo";
        break;
    case 1:
        $colorSeleccionado = "Verde";
        break;
    case 2:
        $colorSeleccionado = "Azul";
        break;
    case 3:
        $colorSeleccionado = "Amarillo";
        break;
}

// Guardamos el color en la sesión
$_SESSION["color"] = $colorSeleccionado;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMON</title>
    <style>
        body {
            text-align: center;
            background-color: aliceblue;
        }
        .circuloRojo, .circuloVerde, .circuloAzul, .circuloAmarillo {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 1px solid black;
            margin: 20px;
        }
        .circuloRojo { background-color: red; }
        .circuloVerde { background-color: green; }
        .circuloAzul { background-color: blue; }
        .circuloAmarillo { background-color: yellow; }
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
    <h1>Bienvenido al juego SIMON</h1>
    <?php
    // Mostramos el color aleatorio
    echo "<div class='circulo$colorSeleccionado'></div>";
    ?>
    <div>
        <a href="pregunta.php">
            <button class="enviar">Empezar a jugar</button>
        </a>
    </div>
</body>
</html>
