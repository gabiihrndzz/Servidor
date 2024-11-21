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
.error {
    color: red;
}
.success {
    color: green;
}
</style>
<h2>Your Input: </h2>
_END;

$name = $email = $url = $comment = $sexo = "";
$nameErr = $emailErr = $urlErr = $sexoErr = "";
$nameSuccess = $emailSuccess = $urlSuccess = $sexoSuccess = "";

// Si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validación del nombre
    if (empty($_POST["name"])) {
        $nameErr = "*Campo requerido";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
            $nameErr = "El nombre solo puede contener letras y espacios";
        } else {
            $nameSuccess = "Nombre válido";
        }
    }
    
    // Validación del email
    if (empty($_POST["email"])) {
        $emailErr = "*Campo requerido";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email inválido";
        } else {
            $emailSuccess = "Email válido";
        }
    }
    
    // Validación del URL
    if (empty($_POST["url"])) {
        $urlErr = "*Campo requerido";
    } else {
        $url = $_POST["url"];
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $urlErr = "Formato de URL inválido";
        } else {
            $urlSuccess = "URL válida";
        }
    }
    
    // Validación del sexo
    if (empty($_POST["sexo"])) {
        $sexoErr = "*Campo requerido";
    } else {
        $sexo = $_POST["sexo"];
        $sexoSuccess = "Género seleccionado";
    }

    // Mostrar los valores introducidos
    echo "<br>Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $url <br>";
    echo "Comment: $comment <br>";
    echo "Gender: $sexo <br>";
} else {
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form action="10.php" method="POST">
    Name: <input type="text" name="name" id="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>
    <span class="success"><?php echo $nameSuccess; ?></span><br><br>

    Email: <input type="text" name="email" id="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <span class="success"><?php echo $emailSuccess; ?></span><br><br>

    Website: <input type="text" name="url" id="url" value="<?php echo $url; ?>">
    <span class="error"><?php echo $urlErr; ?></span>
    <span class="success"><?php echo $urlSuccess; ?></span><br><br>

    Comment: <input type="text" name="comment" id="comment" value="<?php echo $comment; ?>"><br><br>

    Gender: 
    <input type="radio" name="sexo" value="mujer" <?php if (isset($sexo) && $sexo == "mujer") echo "checked";?>> Mujer
    <input type="radio" name="sexo" value="hombre" <?php if (isset($sexo) && $sexo == "hombre") echo "checked";?>> Hombre
    <span class="error"><?php echo $sexoErr; ?></span>
    <span class="success"><?php echo $sexoSuccess; ?></span><br><br>
    
    <button type="submit" class="enviar">Enviar</button>
</form>

</body>
</html>

<?php } ?>
