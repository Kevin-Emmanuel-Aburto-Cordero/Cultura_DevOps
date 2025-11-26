<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../assets/img/icons/icons_leccion/pngegg.svg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/auth/dashboard.css?v=9.0">
        <link rel="stylesheet" href="../assets/fonts/font.css?v=2.0">
        <title>DevOps - Módulos</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <h1>Cultura <br> DevOps</h1>
            </div>
            <nav>
                <ul>
                    <li><a class="botones-cabecera" href="dashboard.php">Home</a></li>
                    <li><a class="botones-cabecera" href="../includes/cultura_devops.apk" download="cultura_devops.apk">Descargar la app</a></li>
                </ul>
            </nav>
            <div class="menu_usuario">
                <div class="dropdown">
                    <button type="submit" class="dropbtn">
                        Opciones Mas
                    </button>
                    <div class="dropdown-content">
                        <a href="../pages/registro_de_avances.php">Mi Progreso</a>
                        <a href="../pages/perfil.php">Mi Cuenta</a>
                        <a href="logout.php">Cerrar Sesion</a>
                    </div>
                </div>
            </div>
        </header>
        <?php
        session_start();
        // Si no hay sesión activa, regresar al login
        if (!isset($_SESSION['idEstudiante'])) {
            header("Location: ../auth/login.html");
            exit();
        }
        echo '<div class="titulo">';
        echo "Bienvenido, " . $_SESSION['usuario'] . "!<br>";
        echo "</div>";
        ?> 
<div class="titulo_modulo">
    <h1>Modulos</h1>
</div>

<div class="contenedor-modulos">

        <a href="../pages/modulos/modulo_1/modulo_1_introduccion.php">
            <div class="modulo modulo1">
                <img class="modulo1_img" src="../assets/img/bangbus_zzz/Excaliboo_Portrait.webp" alt="Modulo 1">
                <br>
                Modulo 1
            </div>
        </a>
    
        <a href="../pages/modulos/modulo_2/modulo_2_introduccion.php">
            <div class="modulo modulo2">
                <img class="modulo2_img" src="../assets/img/bangbus_zzz/Red_Moccus_Portrait.webp" alt="Modulo 2">
                <br>
                Modulo 2
            </div>
        </a>

        <a href="../pages/modulos/modulo_3/modulo_3_introduccion.php">
            <div class="modulo modulo3">
                <img class="modulo3_img" src="../assets/img/bangbus_zzz/Resonaboo_Portrait.webp" alt="Modulo 3">
                <br>
                Modulo 3
            </div>
        </a>
    
        <a href="../pages/modulos/modulo_4/modulo_4_introduccion.php">
            <div class="modulo modulo4">
                <img class="modulo4_img" src="../assets/img/bangbus_zzz/Belion_Portrait.webp" alt="Modulo 4">
                <br>
                Modulo 4
            </div>
        </a>

        <a href="../pages/modulos/modulo_5/modulo_5_introduccion.php">
            <div class="modulo modulo5">
                <img class="modulo5_img" src="../assets/img/bangbus_zzz/Plugboo_Portrait.webp" alt="Modulo 5">
                <br>
                Modulo 5
            </div>
        </a>
        <a href="../pages/modulos/modulo_6/modulo_6_introduccion.php">
            <div class="modulo modulo6">
                <img class="modulo6_img" src="../assets/img/bangbus_zzz/Mercury_Portrait.webp" alt="Modulo 6">
                <br>
                Modulo 6
            </div>
        </a>

        <a href="../pages/modulos/modulo_7/modulo_7_introduccion.php">
            <div class="modulo modulo7">
                <img class="modulo7_img" src="../assets/img/bangbus_zzz/Sharkboo_Portrait.webp" alt="Modulo 7">
                <br>
                Modulo 7
            </div>
        </a>
        <a href="../pages/modulos/modulo_8/modulo_8_introduccion.php">
            <div class="modulo modulo8">
                <img class="modulo8_img" src="../assets/img/bangbus_zzz/Robin_Portrait.webp" alt="Modulo 8">
                <br>
                Modulo 8
            </div>
        </a>

        </div>
</body>
</html>