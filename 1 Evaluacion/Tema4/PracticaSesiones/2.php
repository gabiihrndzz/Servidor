<?php
$usuario='usuario';
$clave = 'clave';
echo <<<_END
<title>Validar</title>

<style>
body {
    background-color: aliceblue;
    text-align: center;
}
h1 {
    color: black /* Contraste para visibilidad */
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

.toggle-eye {
    cursor: pointer;
    position: absolute;
    margin-left: -30px; /* Ajusta según el diseño */
    margin-top: 10px; /* Ajusta según el diseño */
}</style>
_END;

if(isset($_POST['clave']) && isset($_POST['usuario'])){
if($_POST['clave']==$clave && $_POST['usuario']==$usuario){
    echo "Correcto, bienvenido ",$usuario;
}
else{
echo "Incorrecto, o usuario o contraseña no es correcto";}
}
else{?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($color); ?>;
            text-align: center;
        }
        h1 {
            color: <?php echo $color === 'white' ? 'black' : 'white'; ?>; 
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

        .toggle-eye {
            cursor: pointer;
            position: absolute;
            margin-left: -30px; 
            margin-top: 10px; 
        }
    </style>
</head>
<body>
    <form action="2.php" method="POST">
        <h3>Introduzca usuario y contraseña:</h3>
        <input id="usuario" name="usuario" placeholder="Usuario"><br><br>
        <div style="position: relative;">
            <input id="clave" name="clave" type="password" placeholder="Contraseña">
            <span class="toggle-eye" onclick="togglePassword()">👁️</span>
        </div>
        <br>
        <button type="submit" value="enviar">Enviar</button>
    </form>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('clave');
            const passwordFieldType = passwordField.getAttribute('type');
            passwordField.setAttribute(
                'type',
                passwordFieldType === 'password' ? 'text' : 'password'
            );
        }
    </script>
</body>
</html>
<?php } ?>