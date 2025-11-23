<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_5/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - La Transformación de la Gestión de Infraestructura</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_5_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 5</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <div class="contenedor-bisabuelo">
        <div class="contenedor-bipadre">
            <div class="contenedor-bihijo">
                <div class="datos_unidad">
                    <?php 
                    session_start();
                    if(!isset($_SESSION['idEstudiante'])){
                        header("Location: ../../../auth/login.html");
                        exit();
                    }
                    ?>
                    <?php include("scripts_modulo_5/leccion_1/leccion_1_scripts.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-abuelo">
        <div class="contenedor-padre">
            <div class="contenedor-hijo1">
                <div class="lectura_1">
                    <div class="container">
                        <div class="columna">
                            <h1 class="subtitulo">
                                Del Clic Manual al Código Versionado
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Infraestructura como Código (IaC) es la práctica de gestionar y 
                            aprovisionar recursos de infraestructura (servidores, redes, bases de 
                            datos, balanceadores) utilizando archivos de definición en lugar de 
                            procesos manuales o herramientas interactivas. Se aplica a las 
                            herramientas y procesos de desarrollo de software (como el control de 
                            versiones en Git, las pruebas y la CI/CD) a la infraestructura.
                            <br>
                            <h4>
                                El Problema del Manualismo
                            </h4>
                            Antes de IaC, los administradores de sistemas configuraban servidores 
                            manualmente (ssh, clics en consolas de nube), lo que llevaba a la 
                            Desviación de Configuración (Configuration Drift): pequeños cambios no 
                            documentados que hacían que los entornos (Dev, QA, Prod) fueran 
                            inconsistentes. Esto causaba el fallo "funcionó en Staging, pero no en 
                            Producción".
                            <img src="../../../assets/img/modulo_5/git-central.png" alt="Git" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                La Solución IaC
                            </h4>
                            Al definir la infraestructura en archivos de código (JSON, YAML, HCL, 
                            etc.), el proceso se vuelve auditable, repetible y rastreable. Cualquier 
                            cambio debe pasar por un proceso de revisión de código (git pull request) 
                            antes de ser aplicado.
                            <br>
                            <h4>
                                Rol en DevOps
                            </h4>
                            IaC es el puente entre el desarrollo de software y las operaciones, siendo 
                            fundamental para la Entrega Continua (CD), ya que permite la creación o 
                            modificación rápida y confiable de entornos bajo demanda.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/er3dleqL4lw?si=5rLG7VdylHUK4fkP" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                        </iframe>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="contenedor-abuelo1">
        <div class="contenedor-tio">
            <div class="contenedor-primo1">
                <div class="actividad_1">

                    <h2>Actividad: Une los conceptos con su definición</h2>
                    <form id="actividad" action="scripts_modulo_5/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="22">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Infraestructura como Código (IaC)</p>
                                <p>2. Archivos de Definición (Código)</p>
                                <p>3. Desviación de Configuración (Configuration Drift)</p>
                                <p>4. Control de Versiones (Git)</p>
                                <p>5. Entornos Consistentes</p>
                                <p>6. Proceso de Revisión (Pull Request)</p>
                                <p>7. Trazabilidad/Auditabilidad</p>
                                <p>8. Eliminación del Manualismo</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El problema de que los entornos de software (Dev, Staging, Prod) dejen de ser idénticos con el tiempo.</option>
                                    <option value="b">b) Permite auditar qué cambio de infraestructura fue realizado, por quién y cuándo.</option>
                                    <option value="c">c) La práctica de gestionar la infraestructura con archivos de código versionados.</option>
                                    <option value="d">d) Asegura que cualquier cambio en la infraestructura pase por una revisión antes de ser aplicado.</option>
                                    <option value="e">e) Reemplazaron la necesidad de configuraciones manuales (ssh o clics en consolas).</option>
                                    <option value="f">f) El principal beneficio de IaC que elimina la excusa de "funciona en mi máquina".</option>
                                    <option value="g">g) El objetivo de la IaC en la Entrega Continua (CD).</option>
                                    <option value="h">h) El repositorio donde reside el código de infraestructura junto al código de la aplicación.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_5/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 5
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_5/validar_actividades/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>
