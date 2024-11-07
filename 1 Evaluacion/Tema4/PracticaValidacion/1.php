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

    <?php
    // Declaración de la variable inicial
    $valor = " Es tu nombre O\'reilly? ";

    // Aplicación de trim() y stripslashes()
    $resultado_trim = trim($valor);
    $resultado_stripslashes = stripslashes($valor);

    echo "<p>Valor original: <strong>$valor</strong></p>";
    echo "<p>Resultado de <strong>trim(\$valor)</strong>: <strong>$resultado_trim</strong></p>";
    echo "<p>Resultado de <strong>stripslashes(\$valor)</strong>: <strong>$resultado_stripslashes</strong></p>";

    echo "<br>";
    echo "La respuesta es que en el segundo caso, que se usa stripslashes, se quita la ' / '";
    ?>

</body>
</html>
