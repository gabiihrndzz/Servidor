<?php
echo <<<_END
<style>
    .toggle-eye {
        cursor: pointer;
        position: absolute;
        margin-left: -30px;
        margin-top: 10px; 
    }
    @font-face {
                font-family: 'NunitoXtra';
                src: url('Nunito-Black.ttf') format('truetype');
                font-style: normal;
            }   
            .titulo{
                font-family: 'NunitoXtra', serif; 
                text-align: center;
                flex-grow: 1; 
                font-size: 20px;
            }
        body{
            background-color: lightblue;
            text-align: center;
        }
        .enviar{
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
_END;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Verificar usuario en archivo
    $file = 'usuarios.txt';
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $valid = false;

    foreach ($lines as $line) {
        list($storedUser, $storedPass) = explode(',', $line);
        if ($storedUser == $usuario && $storedPass == $clave) {
            $valid = true;
            break;
        }
    }

    if ($valid) {
        echo "Correcto, bienvenido $usuario";
    } else {
        echo "Usuario o contraseña incorrectos. <a href='claseSignUp.php'>Registrarse</a>";
    }
}
?>
