<?php

/* Realizamos la conexion a la base de datos. */
$conn = new mysqli('localhost','eltecico_registrosu','itec@andahuaylas', 'eltecico_registro1');


if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}

?>

<?php
 
    /*===========================================
    | Datos del servidor - Data of the server |
    ===========================================*/
    //local
    /*const SERVER="localhost";
    const DB="eltecico_registro1";
    const USER="eltecico_registrosu"; 
    const PASS="itec@andahuaylas"; 
    //server
    //Only modify the following line in case the database manager is not MySQL
    // Solo modificar la siguiente lикnea en caso el gestor de base de datos no sea MySQL
    const SGBD="mysql:host=".SERVER.";dbname=".DB;*/
 ?>
