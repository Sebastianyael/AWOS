<?php
require '../bd.php';

$id_empleado = $_POST['id_empleado'];

$nombres = $_POST['nombres'];
$apellido_paterno = $_POST['apellidoP'];
$fecha_nacimiento = $_POST['fechaNacimiento'];
$genero = $_POST['genero'];
$sexo = $_POST['sexo'];
$horas_semana = $_POST['horasSemana'];
$fecha_ingreso = $_POST['fechaIngreso'];
$estado = $_POST['estado'];

if ($horas_semana <= 0) {
    echo "<script>alert('Las horas por semana no pueden ser 0 o negativas'); window.history.back();</script>";
    exit;
}

$sql = "
UPDATE empleados SET
    nombre = '$nombres',
    apellido_paterno = '$apellido_paterno',
    fecha_nacimiento = '$fecha_nacimiento',
    genero = '$genero',
    sexo = '$sexo',
    horas_semana = '$horas_semana',
    fecha_ingreso = '$fecha_ingreso',
    estado = '$estado'
WHERE id_empleado = '$id_empleado'
";

if ($conexion->query($sql)) {
    header("Location: ../../agregarEmpleado.php?msg=actualizado");
    exit;
    echo "<script>alert('Empleado actualizado correctamente'); window.history.back();</script>";
} else {
    echo "<script>alert('ERROR: " . $conexion->error . "'); window.history.back();</script>";
}

$conexion->close();
?>
