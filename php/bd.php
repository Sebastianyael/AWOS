<?php
    $HOST = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DBNAME = 'personal';

    $conexion = new mysqli($HOST, $USERNAME, $PASSWORD, $DBNAME);

    if ($conexion->connect_error) { 
        die("Conexion Fallida: " . $conexion->connect_error); 
    }
?>