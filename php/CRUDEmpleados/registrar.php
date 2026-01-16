<?php
    require '../bd.php';
    $nombres = $_POST['nombres'];
    $apellido_paterno = $_POST['apellidoP'];
    $fecha_nacimiento = $_POST['fechaNacimiento'];
    $genero = $_POST['genero'];
    $sexo = $_POST['sexo'];
    $puesto = $_POST['puesto'];
    $horas_semana = $_POST['horasSemana'];
    $fecha_ingreso = $_POST['fechaIngreso'];
    $estado = $_POST['estado'];

    if($horas_semana <= 0 ){
        echo "<script>alert('Las horas por semana no puede ser negativo o cero'); window.history.back();</script>";
    }else{
        if($conexion ->query("INSERT INTO empleados(nombre,apellido_paterno,fecha_nacimiento,genero,sexo,horas_semana,fecha_ingreso,id_puesto,estado) VALUES('$nombres','$apellido_paterno','$fecha_nacimiento','$genero','$sexo','$horas_semana','$fecha_ingreso','$puesto','$estado') ")){
            $id = $conexion->insert_id;
            $codigo = 'EMP-' . str_pad($id,6,0,STR_PAD_LEFT);
            $conexion->query("UPDATE empleados SET codigo_empleado = '$codigo' WHERE id_empleado = $id");
            echo "<script>alert('Empleado Registrado'); window.history.back();</script>";            
        }else{
            echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
        }

        
    }



    $conexion->close();
?>