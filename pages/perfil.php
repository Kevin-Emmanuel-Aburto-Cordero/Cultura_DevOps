<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icons/icons_leccion/pngegg.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/pages/perfil.css?v=7.0">
    <link rel="stylesheet" href="../assets/fonts/font.css?v=3.0">
    <title>DevOps - Mi Cuenta</title>
</head>
<body>
    <header>
            <div class="logo">
                <h1>Cultura <br> DevOps</h1>
            </div>
            <nav>
                <ul>
                    <li><a class="botones-cabecera" href="../auth/dashboard.php">Home</a></li>
                </ul>
            </nav>
            <div class="menu_usuario">
                <div class="dropdown">
                    <button type="submit" class="dropbtn">
                        Opciones Mas
                    </button>
                    <div class="dropdown-content">
                        <a href="registro_de_avances.php">Mi Progreso</a>
                        <a href="../auth/logout.php">Cerrar Sesion</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="subtitulo">
            <h1>Mi Cuenta</h1>
        </div>
<div class="contenedor-abuelo">
    <div class="contenedor-padre">
        <div class="caja-perfil">
            <img class="caja-perfil" src="../assets/img/icons/icono_perfil.png" alt="perfil">
        </div>
        <?php
        session_start();
        if(!isset($_SESSION['idEstudiante'])){
            header("Location: ../auth/login.html");
            exit();
        }
        ?>
        Pais:
        <br>
        <input class="fecha" type="text" placeholder="<?php include('scripts/mostrar_pais.php'); ?>" readonly>

            <form action="editar_perfil.php">
                <button class="botones" type="submit">Editar Perfil</button>
            </form>
            <form action="scripts/eliminar_cuenta.php" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar tu cuenta?');">
                <button class="botones" type="submit" name="eliminar">Eliminar Cuenta</button>
            </form>
            <form action="../auth/logout.php" method="POST">
                <button class="botones" type="submit">Cerrar sesión</button>
            </form>  
    </div>

    <div class="contenedor-hijo">
        Esta cuenta fue creada el:
        <br>
        <input class="fecha" type="text" placeholder="<?php include('scripts/mostrar_fecha.php'); ?>" readonly>
        <br>
        Usuario:
        <br>
        <input class="fecha" type="text" placeholder="<?php include('scripts/mostrar_nombre.php'); ?>" readonly>
        <br>
        Contraseña:
        <br>
        <input class="fecha" type="password" placeholder="********" readonly>
        <br>
        Estado:
        <br>
        <input class="fecha" type="text" placeholder="<?php include('scripts/mostrar_estado.php'); ?>" readonly>
        <br>
        Universidad:
        <br>
        <input class="fecha" type="text" placeholder="<?php include('scripts/mostrar_universidad.php'); ?>" readonly>
    </div>
</div>
</body>
</html>