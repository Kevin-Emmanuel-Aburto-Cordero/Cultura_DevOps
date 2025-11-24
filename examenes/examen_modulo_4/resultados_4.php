<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/icons/icons_leccion/Icon_Commission_Story.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/pages/modulos/modulo_4/resultados_4.css?v=1.0">
    <link rel="stylesheet" href="../../assets/fonts/font.css?v=1.0">
    <title>DevOps - Resultados del Examen 4</title>
</head>
<body>
        <div class="contenedor-bisabuelo">
        <div class="contenedor-bipadre">
            <div class="contenedor-bihijo">
                <div class="datos_unidad">
                    <div class="titulo">
                        <h1>Resultados</h1>
                    </div>
                    <?php 
                    session_start();
                    if (!isset($_SESSION['idEstudiante'])) {
                        header("Location: ../../auth/login.html");
                        exit();
                    }
                    ?>
                    <?php include("scripts_examen_4/mostrar_resultados_4.php"); ?>
                    <a href="examen_modulo_4.php">
                        <button class="botones" type="submit">Realizar de nuevo el examen</button>
                    </a><br>
                    <a href="../../pages/modulos/modulo_4/panel_de_estudio_4.html">
                        <button type="submit" class="botones">Regresar al panel de estudios</button>
                    </a><br>
                    <a href="../../auth/dashboard.php">
                        <button class="botones" type="submit">Regresar al menu principal</button>
                    </a><br>
                    <video class="fondo" autoplay muted loop>
                        <source src="../../assets/img/bangbus_zzz/Dynamic_Wallpaper_Round_and_Roll_Assembly.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</body>
</html>