<?php
if(isset($_POST['Num1'])){

    function tab($num) {
        return str_repeat("&nbsp;", $num);  // Repite la entidad &nbsp; tantas veces como se indique
    }
    
    echo tab(6).$_POST['Num1'];
    echo "<br></br>";
    echo tab(3). "+ ".$_POST['Num2'];
    echo "<br>______</br>";
    
    $suma=$_POST['Num1']+$_POST['Num2'];
    echo tab(6).$suma;
    echo "<br></br>";
    var_dump($_POST);
}    
else{
    ?>
   <html>
    <head>
        <style>
            body{
            text-align:center;}
        </style>
    </head>
    <body>
    <div>
    <h2 >Sume 2 (dos) numeros:</h2>
        <form action="Suma.php" method="POST">
                <p><input type="text" name="Num1" placeholder='Numero 1'></p>
                <p><input type="text" name="Num2" placeholder='Numero 2'></p>
                <input type="submit" value="SUMA" href="#">
        </form>
    </div>
</body>
</html>
<?php }