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
if(isset($_POST['email'])){
$email=($_POST['email']);
 if (empty($email)) {
    $emailErr = "Se requiere Email";
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Fomato de Email inválido";
    }
    else{
    $emailErr = "Fomato de Email válido";
    }
}
echo $email;
    echo "<br>";
echo $emailErr;
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
<p>9. Desarrollar una función en PHP que reciba un EMAIL y valide si este es correcto, la
función se llamará funcion_validar_email.php</p>

<form action="9.php" method="POST">
mail: <input type="text" name="email" id="email" >
</form>
</body>
</html>
   <?php }?>