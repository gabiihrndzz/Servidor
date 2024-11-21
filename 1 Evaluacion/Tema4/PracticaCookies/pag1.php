<?php
// Leer la cookie si existe
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white'; // Valor predeterminado: blanco
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($color); ?>;
            text-align: center;
        }
        h1 {
            color: <?php echo $color === 'white' ? 'black' : 'white'; ?>; /* Contraste para visibilidad */
        }
        button {
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            border: none;
            border: 2px solid black;
            cursor: pointer;
            margin: 10px;
        }
        .red { background-color: red; color: white; }
        .green { background-color: green; color: white; }
        .blue { background-color: blue; color: white; }
    </style>
</head>
<body>
    <h1>¡Bienvenido!</h1>
    <p>El color actual del fondo es: <?php echo htmlspecialchars($color); ?></p>
    <form action="pag2.php" method="POST">
        <h3>Selecciona un color para cambiar el fondo:</h3>
        <button class="red" type="submit" name="radio" value="red">Rojo</button>
        <button class="green" type="submit" name="radio" value="green">Verde</button>
        <button class="blue" type="submit" name="radio" value="blue">Azul</button>
    </form>
</body>
</html>
