<?php
session_start();

$final = [];
$total = 0;

for($i = 0; $i < 4; $i++) {
    $binario = rand(0, 1);
    $final[$i] = $binario;

    if ($binario == 0) {
        echo "<img src=\"blanco.JPG\">";
    } else {
        switch ($i) {
            case 3:
                echo "<img src=\"uno.jpg\">";
                $total += 1;
                break;
            case 2: 
                echo "<img src=\"dos.JPG\">"; 
                $total += 2;
                break;
            case 1: 
                echo "<img src=\"cuatro.JPG\">"; 
                $total += 4;
                break;
            case 0: 
                echo "<img src=\"ocho.JPG\">"; 
                $total += 8;
                break;
        }
    }
    echo  $final[$i]; 
    
}
echo "<br>",$total ;

$_SESSION["color"] = $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <style>
        body {
            text-align: center;
            background-color: aliceblue;
        }
        .enviar {
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.5s ease;
        }
        .enviar:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div>
        <p>Introduce el número de arriba en DECIMAL:</p>
        <form action="ejercicio21.php" method="POST">
            <input type="text" id="color" name="color" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
