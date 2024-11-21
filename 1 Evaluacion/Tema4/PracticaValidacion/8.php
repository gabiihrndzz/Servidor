<?php
// Inicializamos las variables para el sexo y el mensaje de error.
$sexo = "";
$sexoErr = "";

// Comprobamos si se ha enviado el formulario y si se ha seleccionado un valor para 'sexo'.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["sexo"])) {
        $sexoErr = "Se debe seleccionar un sexo.";
    } else {
        $sexo = $_POST["sexo"];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<p>Codigo:</p><br>
$email = "usuario@dominio.com";<br>
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) {<br>
    echo "Válido";
}
<br>
<?php
$email = "usuario@dominio.com";
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) {
    echo "Válido";
}

?>
</body>
</html>
