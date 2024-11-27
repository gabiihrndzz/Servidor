<?php
require_once 'Insert1.php';
$conn = new mysqli('localhost', 'root', '', 'bdsimon',3307); 
if ($conn->connect_error) die("Fatal Error"); 
$query = "DELETE FROM `bdsimon` WHERE Us='Yolanda'";
$result = $conn->query($query); 
if (!$result) die("Fatal Error"); 
$row = $result->num_rows; 
for ($j = 0; $j < $row; ++$j) { 
    $result->data_seek($j); 
    $row = $result->fetch_assoc(); 
    echo 'Usuario: ' . $row['Us'] . '<br>'; 
    echo 'Contraseña: ' .$row['Contr'] . '<br><br>'; } 
?>