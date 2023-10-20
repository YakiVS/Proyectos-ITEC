<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'config.php';

/* columnas que vamos a mostrar de nuestra tabla*/

$columns = ['dni','celular','nombre_apellido','curso','nivel','nota','horas', 'mes' ,'anio'];

/* Nuestra tabla de la base de datos */
$table = "registros";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

/* Consulta */
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
where $columns[0]=$campo";
$resultado = $conn->query($sql);
/*$num_rows = $resultado->num_rows;*/

/*echo $sql;*/

/* Mostrado resultados*/
$html = '';

if ($resultado) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['dni'] . '</td>';
        $html .= '<td>' . $row['celular'] . '</td>';
        $html .= '<td>' . $row['nombre_apellido'] . '</td>';
        $html .= '<td>' . $row['curso'] . '</td>';
        $html .= '<td>' . $row['nivel'] . '</td>';
        $html .= '<td>' . $row['nota'] . '</td>';
        $html .= '<td>' . $row['horas'] . '</td>';
        $html .= '<td>' . $row['mes'] . '</td>';
        $html .= '<td>' . $row['anio'] . '</td>';        
        $html .= '</tr>';

    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}

echo $html

?>