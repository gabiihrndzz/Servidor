<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMON - Adivina el color</title>
    <style>
        body {
            text-align: center;
            background-color: aliceblue;
        }
        button {
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.5s ease;
            margin: 10px;
        }
        .enviar:hover {
            transform: scale(1.2);
        }
        .enviarR { background-color: red; color: white; }
        .enviarV { background-color: green; color: white; }
        .enviarAz { background-color: blue; color: white; }
        .enviarAm { background-color: yellow; color: black; }
    </style>
</head>
<body>
    <h1>¿Cuál es el color que has visto en la pantalla anterior?</h1>
    <form action="comprobar.php" method="POST">
        <button class="enviar enviarR" type="submit" name="color" value="Rojo">Rojo</button>
        <button class="enviar enviarV" type="submit" name="color" value="Verde">Verde</button>
        <button class="enviar enviarAz" type="submit" name="color" value="Azul">Azul</button>
        <button class="enviar enviarAm" type="submit" name="color" value="Amarillo">Amarillo</button>
    </form>
</body>
</html>
