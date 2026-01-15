<?php
    require '../bd.php';

    $id_puesto = $_POST['id'];
    $pagoHora = $_POST['pagoHora'];
    $pagoAdicional = $_POST['pagoAdicional'];

    if($conexion->query("UPDATE puestos SET sueldo_hora = '$pagoHora' , sueldo_adicional = '$pagoAdicional' WHERE id_puesto = '$id_puesto' ") === TRUE){
        echo "<script>alert('Registro Actualizado'); window.history.back();</script>";
    }else{
         echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
?>