<!DOCTYPE html>
<html>
<head>
    <style>
        @font-face {
            font-family: 'NunitoXtra';
            src: url('../html/Nunito-Black.ttf') format('truetype');
            font-style: normal;
        }
        .titulo {
            font-family: 'NunitoXtra', serif;
            text-align: center;
            flex-grow: 1;
            font-size: 20px;
        }
        body {
            background-color: lightblue;
            text-align: center;
        }
        button {
            padding: 5px 15px;
            border-width: 4px;
            border-radius: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 15px;
            color: var(--color-white);
            transition: scale 0.25s ease-in, opacity 0.25s ease-in, filter 0.25s ease-in;
        }
        .enviar:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>

    <h1 class="titulo">Evaluación de Funciones trim() y stripslashes()</h1>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="inputValor">Ingresa un valor:</label><br>
        <input type="text" id="inputValor" name="valor" required><br><br>
        <button type="submit" class="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el valor ingresado por el usuario
        $valor = $_POST["valor"];

        // Definición de la función test_entrada en PHP
        function test_entrada($valor) {
            $valor = trim($valor);         // Elimina espacios al inicio y final
            $valor = stripslashes($valor); // Elimina barras invertidas
            return $valor;
        }

        // Aplicación de trim() y stripslashes()
        $resultado_trim = trim($valor);
        $resultado_stripslashes = stripslashes($valor);
        $resultado_test_entrada = test_entrada($valor);
        echo "Ejemplos de entrada que se pueden probar para que tengan distintos resultados:<br><br>
        1. '<strong>    Hola Mundo    </strong>':<br>
           - Resultado de <strong>trim()</strong>: 'Hola Mundo'.<br>
           - Resultado de <strong>stripslashes()</strong>: '    Hola Mundo    '.<br><br>
           
        2. '<strong>Es tu nombre O\'Reilly?</strong>':<br>
           - Resultado de <strong>trim()</strong>: 'Es tu nombre O\'Reilly?'.<br>
           - Resultado de <strong>stripslashes()</strong>: 'Es tu nombre O'Reilly?'.<br><br>
           
        3. '<strong>    O\'reilly   </strong>':<br>
           - Resultado de <strong>trim()</strong>: 'O\'reilly'.<br>
           - Resultado de <strong>stripslashes()</strong>: 'O'Reilly'.<br><br>
           
        4. '<strong>       </strong>':<br>
           - Resultado de <strong>trim()</strong>: ''.<br>
           - Resultado de <strong>stripslashes()</strong>: ''.<br><br>
           
        5. '<strong>  \\Ejemplo\\  </strong>':<br>
           - Resultado de <strong>trim()</strong>: '\\Ejemplo\\'.<br>
           - Resultado de <strong>stripslashes()</strong>: '\\Ejemplo\\'.";
        
        echo "<br>";

        // Mostrar resultados
        echo "<p>Valor original: <strong>$valor</strong></p>";
        echo "<p>Resultado de <strong>trim(\$valor)</strong>: <strong>$resultado_trim</strong></p>";
        echo "<p>Resultado de <strong>stripslashes(\$valor)</strong>: <strong>$resultado_stripslashes</strong></p>";
        echo "<p>Resultado de <strong>test_entrada(\$valor)</strong>: <strong>$resultado_test_entrada</strong></p>";

    }
    ?>

</body>
</html>
