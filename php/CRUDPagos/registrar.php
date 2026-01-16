<?php
    require '../bd.php';
    date_default_timezone_set("America/Mexico_City");
    $fecha_actual = date("Y-m-d");
    $id_empleado = (int) $_POST['id_empleado'];
    $horasSemana = (int) $_POST['horasSemana'];
    if($horasSemana <= 0 ){
        echo "<script>alert('Las horas no pueden ser negativo o menor a cero'); window.history.back();</script>";
    }else{
        $query = $conexion->query("SELECT sueldo_hora,sueldo_adicional FROM empleado_puesto WHERE id_empleado = '$id_empleado'");
        $datos_empleado = $query->fetch_assoc();
        $pago = ($horasSemana *  $datos_empleado['sueldo_hora']) + ($horasSemana * $datos_empleado['sueldo_adicional']);
        
        $registrarPago = $conexion->query("INSERT INTO pagos(id_empleado , horas_semana , pago) VALUES($id_empleado , $horasSemana , $pago)");
        $id = $conexion->insert_id;
        $codigo = $id . $fecha_actual;
        $conexion->query("UPDATE pagos SET clave = '$codigo' WHERE id_pago = $id");
        
        echo "<script>alert('Pago registrado'); window.history.back();</script>";
    }

    $conexion->close();
?>