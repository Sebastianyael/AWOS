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

</head>
<body>
    <section>
        <header></header>
        <aside>
            <a href="./index.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg> 
                <p>Añadir Personal</p>                 
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
                <H2>Registro de Personal</H2>
                <br>
                <p>Complete el siguiente formulario para registrar un nuevo trabajador en el sistema.</p>
                <br>
                <br>
                <form action="#" class="form-registrar-empleados">
                    <div>
                        <label class="label" for="nombre">Nombre (s)</label>
                        <input type="text" placeholder="Juan" id="nombre" class="input">
                    </div>

                    <div>
                        <label class="label" for="apellidoP">Apellido Paterno</label>
                        <input type="text" name="apellidoP" placeholder="Perez" class="input">
                    </div>

                    <div>
                        <label  class="label" for="fechaNacimiento">Fecha de Nacimiento</label>
                        <input class="input" type="datetime-local" name="fechaNacimiento" placeholder="Fecha de Nacimiento" >
                    </div>

                    <div>
                        <label class="label" for="genero">Genero</label>
                        <select class="select" name="genero" name=" genero">
                            <option value="">Genero</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Otro">Otro</option>
                            <option value="noDecir">Prefiero no decirlo</option>
                        </select>
                    </div>

                    <div>
                        <label class="label" for="sexo">Sexo</label>
                        <select class="select" name="sexo" id="">
                            <option value="">Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>

                    <div>
                        <label class="label" for="puesto">Puesto</label>
                        <select class="select" name="puesto">
                            <option value="">Puesto</option>
                        </select>
                    </div>

                    <div>
                        <label class="label" for="horasSemana">Horas por Semana</label>
                        <input class="input" type="number" placeholder="10" >
                    </div>

                    <div>
                        <label class="label" for="fechaIngreso">Fecha de Ingreso</label>
                        <input class="input" type="datetime-local">
                    </div>
                   
                    <button type="reset" class="cancelar-button">Cancelar</button>
                    <button type="submit" class="enviar-button">Registrar</button>
                </form>
            </div>
        </main>
    </section>
</body>
</html>