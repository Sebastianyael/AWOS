<?php
    require '../bd.php';

    $puesto = $_POST['puesto'];
    $pagoHora = $_POST['pagoHora'];
    $pagoAdicional = $_POST['pagoAdicional'];

    if($pagoHora <= 0 || $pagoAdicional <= 0 ){
        echo "<script>alert('El sueldo no puede ser negativo o cero'); window.history.back();</script>";
    }else{
        
        if($conexion->query("INSERT INTO puestos(nombre,sueldo_hora,sueldo_adicional) VALUES ('$puesto' , '$pagoHora' ,'$pagoAdicional')") === TRUE){
            echo "<script>alert('Nuevo puesto registrado'); window.history.back();</script>";
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
        }
    }
    

    $conexion->close();

?>