<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMON</title>
    <style>
        body{
            text-align: center;
            background-color: aliceblue;
        }
        .circuloRojo{
            display: inline-block;
            width: 100px;
            border: 1px solid black;
            background-color: red;
            height: 100px;
            border-radius: 50%;
            margin: 20px;
        }
        .circuloVerde{
            display: inline-block;
            width: 100px;
            background-color: green;
            border: 1px solid black;
            height: 100px;
            border-radius: 50%;
            margin: 20px;
        }
        .circuloAzul{
            display: inline-block;
            width: 100px;
            background-color: blue;
            height: 100px;
            border: 1px solid black;
            border-radius: 50%;
            margin: 20px;
        }
        .circuloAmarillo{
            display: inline-block;
            width: 100px;
            background-color: yellow;
            height: 100px;
            border-radius: 50%;
            border: 1px solid black;
            margin: 20px;
        }
        .enviar{
                padding: 5px 15px;
                border-width: 4px;
                border-radius: 50px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 15px;
                color: var(--color-white);
                transition:
                    scale 0.5s ease-in, 
                    opacity 0.5s ease-in, 
                    filter 0.5s ease-in;}
                .enviar:hover {
        transform: scale(1.2); 
            }
        
    </style>
</head>
<body>
    <h1>Bienvenido al juego SIMON</h1>
    <?php  $ColorAdivinar= rand(0,3);
        $resul="";
        switch ($ColorAdivinar){
            case 0:
                $resul="Rojo";
                break;
            case 1:
                $resul="Verde";
                break;
            case 2:
                $resul="Azul";
                break;
            case 3:
                $resul="Amarillo";
                break;
            }
        echo "<div class=\"circulo$resul\"></div>"

        
    ?>
    <div>
    <a href="pregunta.php"><input class="enviar" type="submit" value="Empezar a jugar"></a>
    </div>
</body>
</html>
