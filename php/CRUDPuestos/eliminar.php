<?php
    require '../bd.php';

    $id = $_POST['id'];
    
    if($conexion->query("DELETE FROM puestos WHERE id_puesto = '$id' ") === TRUE){
        echo "<script>alert('Registro Eliminado'); window.history.back();</script>";
    }else{
         echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
?>