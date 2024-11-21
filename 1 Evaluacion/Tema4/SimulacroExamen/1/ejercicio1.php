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
        
    <form action="ejercicio1.php" method="POST">
        <?php
        $p=0;
        for( $i = 0; $i < 3; $i++ ){
        for($j=0;$j<2;$j++){
            $p=$p+1;
            echo <<<_END
            <label for  ="$i">$i.$j:</label>
            <input type="text" id="$p" name=$p required>
            _END;
    }
    echo "<br>";
    }
    echo <<<_END
    <input type="submit" value="Enviar">
    _END;
    echo "<br>";

    if(isset($_POST[$p])){
        for($j=6;$j>0;$j--){
            echo "<br>";
            echo $j,  " = ", decbin($_POST[$p]) ;
            $p=$p-1;
}}
?>
    </body>
    </html>
