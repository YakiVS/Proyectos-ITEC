<?php

/* Realizamos la conexion a la base de datos. */
$conn = new mysqli('localhost','registros','itec', 'itec');


if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}

?>

<?php
 
 ?>
