<?php 
include("scripts_modulo_3/verificar_modulo.php");
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Default.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_3/modulo_3_introduccion.css?=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?=1.0">
    <title>DevOps - Módulo 3</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li><a class="botones-cabecera" href="../../../auth/dashboard.php">Home</a></li>
            </ul>
        </nav>
        <div class="menu_usuario">
            <div class="dropdown">
                <button type="submit" class="dropbtn">
                    Opciones Mas
                </button>
                <div class="dropdown-content">
                    <a href="../../perfil.php">Mi Cuenta</a>
                    <a href="../../registro_de_avances.php">Mi Progreso</a>
                    <a href="../../../auth/logout.php">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </header>
    <div class="contenedor-abuelo">
        <div class="contenedor-padre">
            <div class="info_modulo">
                <div class="titulo">
                    <h1>Modulo 3</h1>
                </div>
                <?php include("scripts_modulo_3/mostrar_datos_modulo_3.php"); ?>
            </div>
        </div>
    </div>
    <div class="subtitulo">
        Actividades
    </div>
    <div class="contenedor-abuela">
        <div class="contenedor-madre">
            <a href="leccion_1.php"><button class="botones" type="submit">
                <b>Leccion 1</b> <br>
                <img class="bangbus" src="../../../assets/img/bangbus_zzz/Base_Bangboo_Portrait.webp" alt="Base_Bangboo">
            </button></a>
            <button class="botones" id="btnActividad2">
                <b>Leccion 2</b><br>
                <img class="bangbus" src="../../../assets/img/bangbus_zzz/Snap_Portrait.webp" alt="Base_Bangboo">
            </button>
            <button class="botones" id="btnActividad3">
                <b>Leccion 3</b><br>
                <img class="bangbus" src="../../../assets/img/bangbus_zzz/Booressure_Portrait.webp" alt="Base_Bangboo">
            </button>
            <button class="botones" id="btnActividad4">
                <b>Leccion 4</b><br>
                <img class="bangbus" src="../../../assets/img/bangbus_zzz/Magnetiboo_Portrait.webp" alt="Base_Bangboo">
            </button>
            <button class="botones" id="btnActividad5">
                <b>Leccion 5</b><br>
                <img class="bangbus" src="../../../assets/img/bangbus_zzz/Resonaboo_Portrait.webp" alt="Base_Bangboo">
            </button>
            <button class="botones" id="btnExamen">
                <b>Examen</b><br>
                <img class="bangbus" src="../../../assets/img/bangbus_zzz/Electroboo_Portrait.webp" alt="Base_Bangboo">
            </button>
            <p id="mensaje" style="color : white;"></p>
            <script src="../../../assets/js/modulo_3/actividades_terminadas_modulo_3/actividades_terminadas_modulo_3.js?v=1.0"></script>
            <script src="../../../assets/js/modulo_3/verificar_actividad_terminada/verificar_actividad_terminada_leccion_2.js?v=1.0"></script>
            <script src="../../../assets/js/modulo_3/verificar_actividad_terminada/verificar_actividad_terminada_leccion_3.js?v=1.0"></script>
            <script src="../../../assets/js/modulo_3/verificar_actividad_terminada/verificar_actividad_terminada_leccion_4.js?v=1.0"></script>
            <script src="../../../assets/js/modulo_3/verificar_actividad_terminada/verificar_actividad_terminada_leccion_5.js?v=1.0"></script>
        </div>
    </div>
</body>
</html>