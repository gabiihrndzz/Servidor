<?php
if (isset($_POST['mes']) && isset($_POST['year'])) {
    echo "<style>
            body {
                background-color: lightblue;
                text-align: center;
                display:flex;
            }
            table, tr, td {
                border-color: black;
                border: 2px solid black;
                border-collapse: collapse;
                position: center;
                background-color: white;
                text-align: center;
                padding:10px;
            }
        </style>";

    function generarCalendario($mes,$year){
        // Array con los nombres de los meses
        $nombresMeses = [
            1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
            5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
            9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
        ];
    
        // Número de días en el mes
        $diasEnMes = cal_days_in_month(CAL_GREGORIAN, $mes, $year);
        // Día de la semana del primer día del mes (0: Domingo, 6: Sábado)
        $primerDiaSemana = date('w', strtotime("$year-$mes-01"));
    
        // Comienza la tabla del calendario
        $calendario = "<table border='1' style='border-collapse: collapse; text-align: center;'>";
        $calendario .= "<tr><th colspan='7'>{$nombresMeses[$mes]} $year</th></tr>";
        $calendario .= "<tr>
                            <th>Dom</th>
                            <th>Lun</th>
                            <th>Mar</th>
                            <th>Mié</th>
                            <th>Jue</th>
                            <th>Vie</th>
                            <th>Sáb</th>
                        </tr><tr>";
    
        // Espacios en blanco antes del primer día
        for ($i = 0; $i < $primerDiaSemana; $i++) {
            $calendario .= "<td></td>";
        }
    
        // Días del mes
        for ($dia = 1; $dia <= $diasEnMes; $dia++) {
            $calendario .= "<td>$dia</td>";
            
            // Si es sábado, cierra la fila y comienza una nueva
            if (($dia + $primerDiaSemana) % 7 == 0) {
                $calendario .= "</tr><tr>";
            }
        }
    
        // Cerrar la fila y la tabla
        $calendario .= "</tr></table>";
    
        return $calendario;
    }
    ?>
    <form action="FicheroCalendario.php" method="POST">
        <p>Introduzca un mes (n): <input type="text" name="mes" placeholder=''></p>
        <p>Introduzca un year: <input type="text" name="year" placeholder=''></p>
        <button type="submit">Enviar</button>
<?php
    $mes = $_POST['mes']; // Captura el mes
    $year = $_POST['year']; // Captura el año
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo generarCalendario($mes, $year);
}