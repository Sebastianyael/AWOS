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
    <link rel="stylesheet" href="./css/pages/agregarRol.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/base/variables.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/base/utility-clases.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/label.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/input.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/send-button.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/conponentes/cancelar-button.css?v=<?php echo time(); ?>">
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


        </aside>
        <main>
            <div  class="container-registrar-empleados">
                <H2>Registro de Puestos</H2>
                <br>
                <p>Complete el siguiente formulario para registrar un nuevo puestp en el sistema.</p>
                <br>
                <br>
                <form action="./php/CRUDPuestos/registrar.php" method="post" class="form-registrar-empleados">
                    <div>
                        <label for="puesto" class="label">Puesto</label>
                        <select name="puesto"  class="select" require>
                            <option value="Empleado">Empleado</option>
                            <option value="Gerente">Gerente</option>
                            <option value="CO">CO</option>
                        </select>
                    </div>

                    <div>
                        <label for="pagoHora" class="label">Pago por hora</label>
                        <input type="number" name="pagoHora" class="input" step="0.01" require>
                    </div>

                    <div>
                        <label for="pagoAdicional" class="label">Pago adicional</label>
                        <input type="number" class="input" name="pagoAdicional" step="0.01" require>
                    </div>

                    <button type="reset" class="cancelar-button">Cancelar</button>
                    <button type="submit" class="enviar-button">Registrar</button>
                </form>
            </div>
            <br>
            <br>
            <div class="resultados">
            <?php
                require './php/bd.php';
                $query = "SELECT id_puesto,nombre,sueldo_hora,sueldo_adicional FROM puestos";
                $result = $conexion->query($query);
            ?>
            <?php while ($row = $result->fetch_assoc()) { ?>

                <div>
                    <h2><?php echo $row['nombre']; ?></h2>
                    <form action="./php/CRUDPuestos/actualizar.php" method="post">
                        <label for="pagoHora" class="label">Pago por hora</label>
                        <input type="number" name="pagoHora" class="input" step="0.01" value="<?php echo $row['sueldo_hora']?>" require>
                        <br>
                        <label for="pagoAdicional" class="label">Pago adicional</label>
                        <input type="number" class="input" name="pagoAdicional" step="0.01" value="<?php echo $row['sueldo_adicional']?>" require>
                        <button type="submit" class="enviar-button">Actualizar</button>
                        <input type="hidden" name="id" value="<?php echo $row['id_puesto']?>">
                    </form>
                    <br>
                    <form action="./php/CRUDPuestos/eliminar.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id_puesto']?>">
                        <button type="submit" class="cancelar-button">Eliminar</button>
                    </form>
    
                </div>
            <?php } ?>
                    
            </div>
        </main>
    </section>
    
</body>
</html>