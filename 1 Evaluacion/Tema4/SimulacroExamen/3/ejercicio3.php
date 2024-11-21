<?php
session_start();

if (!isset($_SESSION["num_secreto"])) {
    $_SESSION["num_secreto"] = rand(0, 100);
    $_SESSION["intentos"] = 0;
}

$resul = "";

if (isset($_POST["color"])) {
    $numero_usuario = intval($_POST["color"]); 
    $_SESSION["intentos"]++; 

    if ($numero_usuario < $_SESSION["num_secreto"]) {
        $resul = "El número es mayor.";
    } elseif ($numero_usuario > $_SESSION["num_secreto"]) {
        $resul = "El número es menor.";
    } else {
        $resul = "¡Correcto! Has adivinado el número en {$_SESSION["intentos"]} intentos.";
        unset($_SESSION["num_secreto"]);
        unset($_SESSION["intentos"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
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
    <div>
        <h1>Adivina el Número</h1>
        <p>Estoy pensando en un número entre 0 y 100.</p>
        <?php if ($resul): ?>
            <p><?php echo htmlspecialchars($resul); ?></p>
        <?php endif; ?>
        <form action="ejercicio3.php" method="POST">
            <label for="color">Introduce tu número:</label>
            <input type="number" id="color" name="color" required>
            <input type="submit" value="Enviar" class="enviar">
        </form>
    </div>
</body>
</html>
