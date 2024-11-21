<?php
echo<<<_END
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

_END;
if(isset($_POST['url'])){
$url=($_POST['url']);
 if (empty($url)) {
    $urlErr = "Se requiere URL";
} else {
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
    $urlErr = "Fomato de URL inválido";
    }
    else{
    $urlErr = "Fomato de URL válido";
    }
}
echo $url;
    echo "<br>";
echo $urlErr;
echo "<br>";
echo "<br>";
}
else{
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
<p>Desarrollar una función en PHP que reciba una URL y validar si este es correcto, la
función se llamará funcion_validar_url.php</p>

<form action="10.php" method="POST">
URL: <input type="text" name="url" id="url" >
</form>
</body>
</html>
   <?php }?>