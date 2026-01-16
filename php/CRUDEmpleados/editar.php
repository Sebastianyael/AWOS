<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/base/layout.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/pages/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/base/variables.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/base/utility-clases.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/conponentes/label.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/conponentes/input.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/conponentes/send-button.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/conponentes/cancelar-button.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/pages/agregarPuesto.css?v=<?php echo time(); ?>">

</head>
<body>
    <section>
        <main>
            <div  class="container-registrar-empleados">
                <H2>Editar</H2>
                <br><br>

                    <?php
                        require '../bd.php';

                        $id = $_GET['codigo'];

                        $sql = "SELECT nombre, apellido_paterno, fecha_nacimiento, genero, sexo, horas_semana, fecha_ingreso
                                FROM empleados
                                WHERE id_empleado = '$id'";

                        $resultado = $conexion->query($sql);
                        $empleado = $resultado->fetch_assoc();
                    ?>

                <form action="./edit.php" method="post" class="form-registrar-empleados">

                <div>
                    <label class="label" for="nombres">Nombre (s)</label>
                    <input type="text" name="nombres" id="nombres" class="input"
                        value="<?= $empleado['nombre'] ?>" required>
                </div>

                <div>
                    <label class="label" for="apellidoP">Apellido Paterno</label>
                    <input type="text" name="apellidoP" class="input"
                        value="<?= $empleado['apellido_paterno'] ?>" required>
                </div>

                <div>
                    <label class="label" for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input class="input" type="date" name="fechaNacimiento"
                        value="<?= $empleado['fecha_nacimiento'] ?>" required>
                </div>

                <div>
                    <label class="label" for="genero">Genero</label>
                    <select class="select" name="genero" required>
                        <option value="Hombre" <?= $empleado['genero']=='Hombre'?'selected':'' ?>>Hombre</option>
                        <option value="Mujer" <?= $empleado['genero']=='Mujer'?'selected':'' ?>>Mujer</option>
                        <option value="Otro" <?= $empleado['genero']=='Otro'?'selected':'' ?>>Otro</option>
                        <option value="noDecir" <?= $empleado['genero']=='noDecir'?'selected':'' ?>>Prefiero no decirlo</option>
                    </select>
                </div>

                <div>
                    <label class="label" for="sexo">Sexo</label>
                    <select class="select" name="sexo" required>
                        <option value="Masculino" <?= $empleado['sexo']=='Masculino'?'selected':'' ?>>Masculino</option>
                        <option value="Femenino" <?= $empleado['sexo']=='Femenino'?'selected':'' ?>>Femenino</option>
                    </select>
                </div>



                <div>
                    <label class="label" for="horasSemana">Horas por Semana</label>
                    <input class="input" type="number" name="horasSemana"
                        value="<?= $empleado['horas_semana'] ?>" required>
                </div>

                <div>
                    <label class="label" for="fechaIngreso">Fecha de Ingreso</label>
                    <input class="input" type="date" name="fechaIngreso"
                        value="<?= $empleado['fecha_ingreso'] ?>" required>
                </div>
                <input type="hidden" value="activo" name="estado">
                <input type="hidden" name="id_empleado" value="<?= $id ?>">

                <button type="submit" class="enviar-button">Editar</button>
                </form>

            </div>
            <br><br>
            </div>
        </main>
    </section>
</body>
</html>