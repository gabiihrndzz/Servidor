<?php
if(isset($_POST['nombre'])){
    echo "Nombre: ".$_POST['nombre'];
    echo "<br></br>";
    echo "Apellido: ".$_POST['apellido'];
    echo "<br></br>";
    echo "Edad: ".$_POST['edad']. " años";
    echo "<br></br>";
    echo "Mail: ".$_POST['email'];  
    echo "<br></br>";   
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
        <div>
        <h2 class="titulo">RELLENE EL FORMULARIO</h2>
            <form action="#" method="POST">
                    <p><input type="text" name="nombre" placeholder="Nombre"></p>
                    <p><input type="text" name="apellido" placeholder="Apellido"></p>
                    <p><input type="text" name="edad" placeholder="Edad"></p>
                    <input type="text" name="email" placeholder="Correo"></p>
                    <input class="enviar" type="submit" value="ENVIAR">
            </form>
        </div>
    </body>
</html>
<?php }