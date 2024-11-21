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
         <?php
            $email="abc@abc.com";
            $emailErr="Email correcto";
            if (empty($email)) {
                $emailErr = "Se requiere Email";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Fomato de Email invalido";
                }
            }
            echo $email;
                echo "<br>";
            echo $emailErr;
            echo "<br>";
            echo "<br>";
            ?>
    <?php
    echo "Es un codigo para validar si el email es correcto";
    ?>
</body>
</html>
