<?php
if(isset($_POST['radio'])){
    $validar=$_POST['radio'];
    echo "Resultado: ";
    switch($validar){
        case 'SUMA':
            echo $_POST['Num1']+$_POST['Num2'];
        break;
        case 'RESTA':
            echo $_POST['Num1']-$_POST['Num2'];
        break;
        case 'MULT':
            echo $_POST['Num1']*$_POST['Num2'];
        break;
        case 'DIV':
            echo $_POST['Num1']/$_POST['Num2'];
        break;
        default:
            echo "No se como, pero has llegado hasta aqui";
            break;
    }
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
                background-color: lightblue;
                text-align: center;
            }
            button{
                padding: 5px 10px;
                border-width: 4px;
                border-radius: 50px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 10px;
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
    <div>
    <h2 >Calculadora, sume, reste, multiplique o divida:</h2>
        <form action="ficheroFormulario.php" method="POST">
                <p><input type="text" name="Num1" placeholder='Numero 1'></p>
                <p><input type="text" name="Num2" placeholder='Numero 2'></p>
                <button type="submit" name="radio" value="SUMA" href="#" >SUMA</button>
                <button type="submit" name="radio" value="RESTA" href="#">RESTA</button>
                <button type="submit" name="radio" value="MULT" href="#">MULTIPLICACION</button>
                <button type="submit" name="radio" value="DIV" href="#">DIVISION</button>
            </form>
    </div>
</body>
</html>
<?php
}    
else{
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
            background-color: lightblue;
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
<div>
    <h2 >Calculadora, sume, reste, multiplique o divida:</h2>
        <form action="ficheroSuma.php" method="POST">
                <p><input type="text" name="Num1" placeholder='Numero 1'></p>
                <p><input type="text" name="Num2" placeholder='Numero 2'></p>
                <button type="submit" name="radio" value="SUMA" href="#" >SUMA</button>
                <button type="submit" name="radio" value="RESTA" href="#">RESTA</button>
                <button type="submit" name="radio" value="MULT" href="#">MULTIPLICACION</button>
                <button type="submit" name="radio" value="DIV" href="#">DIVISION</button>
            </form>
    </div>
</body>
</html>
<?php }