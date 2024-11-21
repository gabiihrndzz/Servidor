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
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $CP = $_POST['CP'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Guardar usuario en un archivo o base de datos
    $file = 'usuarios.txt';
    $data = "$usuario,$clave\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Usuario registrado exitosamente. <a href='clase1.php'>Iniciar Sesión</a>";
}
?>
