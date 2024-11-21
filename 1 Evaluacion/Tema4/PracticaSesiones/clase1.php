<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
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
</head>
<body>
    <form action="clase2.php" method="POST">
        <h3>Introduzca usuario y contraseña:</h3>
        <input id="usuario" name="usuario" placeholder="Usuario"><br><br>
        <div style="position: relative;">
            <input id="clave" name="clave" type="password" placeholder="Contraseña">
            <span class="toggle-eye" onclick="togglePassword()">👁️</span>
        </div>
        <br>
        <a href="claseSignUp.php">Registrarse</a>
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
