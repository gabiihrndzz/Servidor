<?php
$usuario='usuario';
$clave='123';
//hacer q las dos variables coincidan 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        form {
            width: 100%;
            max-width: 400px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px; 
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input {
            border: none;
            flex: 1;
            outline: none;
            font-size: 16px;
        }

        .js-reveal-pwd {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .js-reveal-pwd svg {
            pointer-events: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="2.php" method="POST">
        <h3>Introduzca usuario y contraseña:</h3>
        <div class="input-wrapper">
            <input id="usuario" name="usuario" type="text" placeholder="Usuario">
        </div>
        <div class="input-wrapper">
            <input id="clave" name="clave" type="password" placeholder="Contraseña">
            <button type="button" class="js-reveal-pwd" onclick="togglePassword()">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#clip0_369_197)">
                    <path d="M8.24992 3.53337C8.82353 3.39911 9.4108 3.33199 9.99992 3.33337C15.8333 3.33337 19.1666 10 19.1666 10C18.6607 10.9464 18.0575 11.8373 17.3666 12.6584M11.7666 11.7667C11.5377 12.0123 11.2617 12.2093 10.955 12.346C10.6484 12.4826 10.3173 12.5561 9.98166 12.562C9.64598 12.5679 9.31255 12.5062 9.00126 12.3804C8.68997 12.2547 8.40719 12.0676 8.16979 11.8302C7.93239 11.5928 7.74525 11.31 7.61951 10.9987C7.49377 10.6874 7.43202 10.354 7.43795 10.0183C7.44387 9.68262 7.51734 9.35158 7.65398 9.04491C7.79062 8.73825 7.98763 8.46225 8.23325 8.23337M0.833252 0.833374L19.1666 19.1667M14.9499 14.95C13.5254 16.0359 11.7908 16.6374 9.99992 16.6667C4.16658 16.6667 0.833252 10 0.833252 10C1.86983 8.06829 3.30753 6.38055 5.04992 5.05004L14.9499 14.95Z" stroke="#384250" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_369_197">
                      <rect width="20" height="20" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
            </button>
        </div>
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
