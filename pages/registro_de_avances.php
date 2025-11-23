<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icons/icons_leccion/pngegg.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/pages/registro_de_avances.css?v=5.0">
    <link rel="stylesheet" href="../assets/fonts/font.css?v=1.0">
    <title>DevOps - Mi progreso</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura<br>DevOps</h1>
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
                        <a href="../auth/logout.php">Cerrar Sesion</a>
                    </div>
                </div>
            </div>
    </header>
    <div class="contenedor-abuelo">
        <div class="titulo">
            <h1>Mi Progeso</h1>
        </div>
        <?php
            session_start();
            if(!isset($_SESSION['idEstudiante'])){
                header("Location: ../auth/login.html");
                exit();
            }
            echo '<div class="subtitulo">';
            echo "Hola: " . $_SESSION['usuario'] .  " aqui esta tu progreso. <br>";
            echo "<br>";
            echo '</div>';
            ?>
        <div class="modulos">
            <div class="submodulo1">
                <div class="modulo1">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_1.php"); ?>
                </div>
                <div class="modulo2">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_2.php"); ?>
                </div>
                <div class="modulo3">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_3.php"); ?>
                </div>
            </div>
            <div class="submodulo2">
                <div class="modulo4">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_4.php"); ?>
                </div>
                <div class="modulo5">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_5.php"); ?>
                </div>
                <div class="modulo6">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_6.php"); ?>
                </div>
            </div>
            <div class="submodulo3">
                <div class="modulo7">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_7.php"); ?>
                </div>
                <div class="modulo8">
                    <?php include("scripts/resultados_de_modulos/resultados_modulo_8.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <video class="fondo" autoplay muted loop>
        <source src="../assets/img/bangbus_zzz/Dynamic_Wallpaper_Bangboo_Angler_Club.mp4" type="video/mp4">
    </video>
</body>
</html>
