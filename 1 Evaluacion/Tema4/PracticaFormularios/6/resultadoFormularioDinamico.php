<?php
/*if (isset($_POST['Elementos'])) {
    $elementos = intval($_POST['Elementos']);
    $suma = 0;

    if (isset($_POST['num'])) {
        // Sumar los valores ingresados
        foreach ($_POST['num'] as $valor) {
            $suma += intval($valor); // Sumar los valores ingresados
        }
    }
    ?>
    <html>
    <head>
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
                padding: 5px 10px;
                border-width: 4px;
                border-radius: 50px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 10px;
                color: var(--color-white);
                transition: scale 0.25s ease-in, opacity 0.25s ease-in, filter 0.25s ease-in;
            }
            .enviar:hover {
                transform: scale(1.2); 
            }
        </style>
    </head>
    <body>
        <div>
            <form action="final.php" method="POST">
                <?php
                for ($i = 1; $i <= $elementos; $i++) {
                    echo <<<_END
                    <label for="num$i">$i:</label>
                    <input type="text" id="num1" name="1" required>
                    <br>
                    _END;
                }
                echo '<input type="submit" value="Enviar">';
                ?>
            </form>
            <br>
            <div class="titulo">La suma de los valores es: <?php echo $suma; ?></div>
        </div>
    </body>
    </html>
    <?php
} else {
    ?>
    <html>
    <head>
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
                padding: 5px 10px;
                border-width: 4px;
                border-radius: 50px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 10px;
                color: var(--color-white);
                transition: scale 0.25s ease-in, opacity 0.25s ease-in, filter 0.25s ease-in;
            }
            .enviar:hover {
                transform: scale(1.2); 
            }
        </style>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <p>Número de elementos: <input type="text" name="Elementos" placeholder='Elementos' required></p>
                <input type="submit" value="Aceptar">
            </form>
        </div>
    </body>
    </html>
    <?php
}
*/?>
