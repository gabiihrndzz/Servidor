<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Suma en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: aliceblue;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        button{
            padding: 5px 15px;
            border-width: 4px;
            border-radius: 50px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 15px;
            color: var(--color-white);
            transition:
            scale 0.25s ease-in, 
                opacity 0.25s ease-in, 
                filter 0.25s ease-in;}
                .enviar:hover {
                    transform: scale(1.2); 
                }

    </style>
</head>
<body>
    <h1>Formulario de Suma</h1>

    <?php
    // Inicializar variables
    $numElementos = isset($_POST['numElementos']) ? intval($_POST['numElementos']) : 0;
    $suma = 0;

    // Procesar la suma si se han enviado los números
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])) {
        $numeros = $_POST['numeros'];
        foreach ($numeros as $numero) {
            $suma += floatval($numero);
        }
    }
    ?>

    <form method="POST">
        <label for="numElementos">Número de elementos:</label>
        <input type="number" name="numElementos" id="numElementos" min="1" value="<?php echo $numElementos; ?>" required>
        <button type="submit">ACEPTAR</button>
    </form>

    <?php if ($numElementos > 0): ?>
        <form method="POST">
            <input type="hidden" name="numElementos" value="<?php echo $numElementos; ?>">
            <?php for ($i = 1; $i <= $numElementos; $i++): ?>
                <input type="number" name="numeros[]" placeholder="Número <?php echo $i; ?>" required>
            <?php endfor; ?>
            <button type="submit">SUMAR</button>
        </form>
    <?php endif; ?>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])): ?>
        <div id="result">
            La suma es: <?php echo $suma; ?>
        </div>
    <?php endif; ?>
</body>
</html>
