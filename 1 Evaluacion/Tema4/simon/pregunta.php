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
        button{
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
            .enviarR{
                background-color: red;
            }
            .enviarV{
                background-color: green;
            }
            .enviarAz{
                background-color: lightblue;
            }
            .enviarAm{
                background-color: yellow;
            }
    </style>
</head>
<body>
    <h1>¿Cual es el color?</h1>
    <div class="circulo"></div>
    <?php 
        $ColorAdivinar=$_POST[("color")];
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
        <form action="comprobar.php" method="POST">
            <button class="enviarR" type="submit" name="radio" value="Rojo" href="#" >Rojo</button>
            <button class="enviarV" type="submit" name="radio" value="Verde" href="#">Verde</button>
            <button class="enviarAz" type="submit" name="radio" value="Azul" href="#">Azul</button>
            <button class="enviarAm" type="submit" name="radio" value="Amarillo" href="#">Amarillo</button>
        </form>
    </div>
</body>
</html>
