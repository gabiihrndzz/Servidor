<style>
    @font-face {
        font-family: 'Bebas';
        src: url('../font_types/BebasNeue-Regular.ttf') format('truetype');
    }
    *{
        text-align: center;
        font-family: Bebas, sans-serif;
        font-size: 40px;
    }
</style>
<?php
require_once 'Select1.php';
$conn = new mysqli('localhost', 'root', '', 'bdsimon', 3307); 
if ($conn->connect_errno) {
    printf("Falló la conexión: %s\n", $conn->connect_error);
    exit();
}
$query = "SELECT Us, Contr FROM bdsimon";
$result = $conn->query($query);
if (!$result) {
    die("Query failed: " . $conn->error);
}
$numRows = $result->num_rows;
for ($j = 0; $j < $numRows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_assoc(); 
    if ($row) {
        echo 'Usuario: ' . htmlspecialchars($row['Us']) . '<br>';
        echo 'Contraseña: ' . htmlspecialchars($row['Contr']) . '<br><br>';
    }}
$conn->close();
?>
