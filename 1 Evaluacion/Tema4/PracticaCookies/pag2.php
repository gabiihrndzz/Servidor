<?php
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white'; // Valor predeterminado: blanco

?>
<html>
<head>
    <style>
    @font-face {
        font-family: 'NunitoXtra';
        src: url('../html/Nunito-Black.ttf') format('truetype'); /* Ensure the path is correct */
        font-style: normal;
    }   
    .titulo{
        font-family: 'NunitoXtra', serif; /* Applies the custom font */
            text-align: center;
            flex-grow: 1; /* Esto permite que el texto ocupe el centro */
            font-size: 20px;
        }
    body{
        background-color: <?php echo htmlspecialchars($color); ?>;
        text-align: center;
    }
    button{
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
    <?php
    ($_POST['radio'])==htmlspecialchars($color);
    // Verificar si se envió el valor de la cookie desde el formulario
    if (isset($_POST['radio'])) {
        $color = $_POST['radio']; // Obtener el color seleccionado
        setcookie('color', $color, time() + (3600 * 7*24), "/"); // Crear cookie válida por 30 días
        echo "<h3>Cookie creada exitosamente. Has seleccionado el color: $color</h3>";
    } else {
        echo "<h3>No se seleccionó ningún color</h3>";
    }
    ?>
    <p><a href="pag1.php">Volver a la página principal</a></p>
</body>
</html>
