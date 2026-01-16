<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/base/layout.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/aside.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/pages/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/base/variables.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/base/utility-clases.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/label.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/input.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/send-button.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/cancelar-button.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/pages/agregarPuesto.css?v=<?php echo time(); ?>">

</head>
<body>
    <section>
        <header></header>
        <aside>
            <a href="./index.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
            </svg>
 
                <p>Dashboard</p>                 
            </a>
            <a href="./agregarEmpleado.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg> 
                <p>Agregar Personal</p>                 
            </a>

            <a href="./agregarRol.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
            </svg>


                <p>Agregar Puesto</p>                 
            </a>

            <a href="./registra-pago.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
            </svg>

                <p>Agregar Pago</p>                 
            </a>


        </aside>
        <main>
            <div  class="container-registrar-empleados">
                <H2>Registro de Personal</H2>
                <br>
                <p>Complete el siguiente formulario para registrar un nuevo trabajador en el sistema.</p>
                <br>
                <br>
                <form action="./php/CRUDEmpleados/registrar.php" method="post" class="form-registrar-empleados">
                    <div>
                        <label class="label" for="nombres">Nombre (s)</label>
                        <input type="text" name="nombres" placeholder="Juan" id="nombres" class="input"  required>
                    </div>

                    <div>
                        <label class="label" for="apellidoP">Apellido Paterno</label>
                        <input type="text" name="apellidoP" placeholder="Perez" class="input" required>
                    </div>

                    <div>
                        <label  class="label" for="fechaNacimiento">Fecha de Nacimiento</label>
                        <input class="input" type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento"  required>
                    </div>

                    <div>
                        <label class="label" for="genero">Genero</label>
                        <select class="select" name="genero"  required>
                            <option value="" disabled selected>Genero</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Otro">Otro</option>
                            <option value="noDecir">Prefiero no decirlo</option>
                        </select>
                    </div>

                    <div>
                        <label class="label" for="sexo">Sexo</label>
                        <select class="select" name="sexo" id="" required>
                            <option value="" disabled selected>Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>

                    <div>
                        <label class="label" for="puesto">Puesto</label>
                        <select class="select" name="puesto" required>
                            <option value="" disabled selected>Puesto</option>
                            <?php
                                require './php/bd.php';
                                $puestos = $conexion->query("SELECT id_puesto,nombre FROM puestos");
                                if($puestos->num_rows > 0){
                                    while($row = $puestos->fetch_assoc()){
                                        echo "
                                            <option value='" . $row['id_puesto'] . "'>" . $row['nombre'] . "</option>
                                        ";
                                    }
                                }                            
                            ?>
                        </select>
                    </div>

                    <div>
                        <label class="label" for="horasSemana">Horas por Semana</label>
                        <input class="input" type="number" name="horasSemana" placeholder="10"  required>
                    </div>

                    <div>
                        <label class="label" for="fechaIngreso">Fecha de Ingreso</label>
                        <input class="input" type="date" name="fechaIngreso" required>
                    </div>
                    <input type="hidden" value="activo" name="estado">
                    <button type="reset" class="cancelar-button">Cancelar</button>
                    <button type="submit" class="enviar-button">Registrar</button>
                </form>
            </div>
            <br><br>
            <div class="empleados-container">
                <?php
                    require './php/bd.php';

                    $resultados = $conexion->query("SELECT id_empleado,nombre,apellido_paterno,codigo_empleado FROM empleados WHERE estado = 'activo'");
                    if($resultados->num_rows > 0){
                        echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center;font-size:15px;'>
                            <tr>
                                <th>Codigo de empleado</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                            </tr>";
                            while ($row = $resultados->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>{$row['codigo_empleado']}</td>
                                    <td>{$row['nombre']}</td>
                                    <td>{$row['apellido_paterno']}</td>
                                    <td>
                                        <a style='text-decoration: none;color:white;' href='./php/CRUDEmpleados/editar.php?codigo={$row['id_empleado']}'>Editar</a>
                                    </td>
                                    <td>
                                    <form action='./php/CRUDEmpleados/eliminar.php' method='post'>
                                        <input type='hidden' name='id_empleado' value='" . $row['id_empleado'] . "'>
                                        <button style='color:white;background-color:transparent;' type='submit'  name='editar'>Eliminar</button>
                                    </form>
                                </td>
                                </tr>
                                ";
                            }
                            

                        echo "</table>";
                    }else{
                        echo "No hay registros para mostrar.";
                    }
                    $conexion->close();
                ?>

            </div>
        </main>
    </section>
</body>
</html>