<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icons/icons_leccion/pngegg.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/pages/editar_perfil.css?v=4.0">
    <link rel="stylesheet" href="../assets/fonts/font.css?v=1.0">
    <title>DevOps - Editar Cuenta</title>
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
                        <a href="perfil.php">Mi Cuenta</a>
                        <a href="registro_de_avances.php">Mi Progreso</a>
                        <a href="../auth/logout.php">Cerrar Sesion</a>
                    </div>
                </div>
            </div>
    </header>
    <div class="subtitulo">
                <h1>Editar Perfil</h1>
            </div>
    <div class="contenedor-abuelo">
        <div class="contenedor-padre">
            <div class="caja-perfil">
                <img class="caja-perfil" src="../assets/img/icons/icono_perfil.png" alt="perfil">
            </div>
            <br>
            <?php
            session_start();
            if(!isset($_SESSION['idEstudiante'])){
                header("Location: ../auth/login.html");
                exit();
            }
            ?>
             <form action="../auth/logout.php" method="POST">
                <button class="botones" type="submit">Cerrar sesión</button>
            </form>
            Contraseña:
            <form action="scripts/cambiar_contraseña.php" method="POST">
                <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario']; ?>">
                <input type="password" id="nueva_contraseña" name="nueva_contraseña" placeholder="********" required>
                <br>
                <button class="botones" name="cambiar_contraseña" type="submit">Cambiar contraseña</button>
            </form>
            <form action="perfil.php">
                <button class="botones" type="submit">Mi cuenta</button>
            </form>
           
        </div>
        <div class="contenedor-hijo">
            <form action="scripts/actualizar_datos.php" method="post">
                <input type="hidden" name="idEstudiante" value="<?php echo $_SESSION['idEstudiante']; ?>">
                <br>
                <label for="usuario">Usuario:</label><br>
                <input type="text" name="usuario" placeholder="<?php echo $_SESSION['usuario']; ?>">
                <br>
                <label for="pais">Pais:</label><br>
                <input type="text" name="pais" placeholder="<?php include("scripts/mostrar_pais.php"); ?>">
                <br>
                <label for="estado">Estado:</label><br>
                <input type="text" name="estado" placeholder="<?php include("scripts/mostrar_estado.php"); ?>">
                <br>
                <label for="nombre_universidad">Universidad:</label><br>
                <input type="text" name="nombre_universidad" placeholder="<?php include("scripts/mostrar_universidad.php"); ?>">
                <br>
                <button class="botones" name="actualizar" type="submit">Actualizar datos</button>
            </form>
            <form action="scripts/eliminar_cuenta.php" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar tu cuenta?');">
                <button class="botones" type="submit" name="eliminar">Eliminar Cuenta</button>
            </form>
        </div>
    </div>
</body>
</html>