<?php
    require '../bd.php';

    $id = $_POST['id_empleado'];

    if($conexion->query("UPDATE empleados SET estado = 'inactivo' WHERE id_empleado = '$id'")){
        echo "<script>alert('Empleado desactivado'); window.history.back();</script>";
    }else{
        echo "<script>alert('Empleado actualizado correctamente'); window.history.back();</script>";
    }
?>