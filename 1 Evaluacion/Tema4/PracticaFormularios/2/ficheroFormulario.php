<?php
if(isset($_POST['radio'])){
    $evaluar=$_POST['radio'];
    switch($evaluar){
        case 14:
            echo "Yogurin";
        break;
        case 15:
            echo "Muy joven";
        break;
        case 21:
            echo "Joven";
        break;
        case 41:
            echo "Persona madura";
        break;
        case 61:
            echo "Ya eres una persona mayor";
        break;
            default:
            echo "No has introducido tu edad";
            break;
    }
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
<h1>Introduzca su edad: </h1>
<form action="ficheroFormulario.php" method="POST">
    <label>
        <input type="radio" name="opcion" value="14"> Menor de 14 años
    </label><br>
    <label>
        <input type="radio" name="opcion" value="15"> Entre 15 y 20 años
    </label><br>
    <label>
        <input type="radio" name="opcion" value="21"> Entre 21 y 40 años
    </label><br>
    <label>
        <input type="radio" name="opcion" value="41"> Entre 41 y 60 años 
    </label><br>
    <label>
        <input type="radio" name="opcion" value="61"> Mayor de 60 años
    </label><br>
    <br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
<?php }