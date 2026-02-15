<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_7/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Alertas, Dashboards y Gestión de Incidentes</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_7_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 7</button>
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
                    <?php include("scripts_modulo_7/leccion_4/leccion_4_scripts.php"); ?>
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
                                La Respuesta Operacional al Fallo del Sistema
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Observabilidad solo es útil si sus datos conducen a una acción rápida y bien informada cuando algo sale mal. Esto se logra mediante la definición inteligente de alertas y herramientas de visualización.
                            <br>
                            <h4>
                                Tableros (Dashboards)
                            </h4>
                            Son herramientas visuales que utilizan Métricas para mostrar el estado de salud del sistema en tiempo real. Son cruciales para el monitoreo pasivo (mirar el estado del sistema) y la correlación de datos. El objetivo es identificar tendencias y posibles cuellos de botella antes de que se conviertan en fallos.
                            <br>
                            <h4>
                                Sistema de Alertas
                            </h4>
                            Es el mecanismo de monitoreo activo que notifica al equipo de guardia (on-call) cuando un SLO está a punto de fallar o un umbral es cruzado. Una buena alerta debe ser accionable (indicar exactamente qué está fallando y quién debe responder) y evitar el Alert Fatigue (exceso de alertas).
                            <img src="../../../assets/img/modulo_7/gate.png" alt="Gate" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Gestión de Incidentes                                
                            </h4>
                            Es el proceso formal para manejar los fallos críticos, desde la detección (por la alerta) hasta la resolución y el análisis post-mortem. El objetivo es reducir el Tiempo Medio de Detección (MTTD) y el Tiempo Medio de Resolución (MTTR), utilizando los Logs y Traces (Lección 7.2) para la investigación de causa raíz.
                            <br>
                            <h4>
                                Quality Gate
                            </h4>
                            La Observabilidad actúa como un Quality Gate post-despliegue en el pipeline de CD. Si un nuevo build causa una degradación inmediata en un SLO crítico (y la alerta se dispara), puede activar un roll-back automatizado.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/6AzEvUXJ_Og?si=VxCriKaJ8bjmrCVA" 
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
                    <form id="actividad" action="scripts_modulo_7/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <input type="hidden" name="idActividad" value="34">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Bucle de Feedback</p>
                                <p>2. Quality Gate Post-Despliegue</p>
                                <p>3. Análisis Post-Mortem</p>
                                <p>4. Roll-back Automatizado</p>
                                <p>5. MTTD y MTTR</p>
                                <p>6. Logs y Traces en el Post-Mortem</p>
                                <p>7. Requisitos para el Backlog</p>
                                <p>8. Principio "Sin Culpa"</p>
                                <p>9. Resolver un Incidente</p>
                                <p>10. Trazabilidad</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Las métricas que miden la rapidez con la que el equipo detecta y resuelve un problema.</option>
                                    <option value="b">b) El mecanismo que se activa automáticamente por una alerta de SLO para restaurar rápidamente una versión estable</option>
                                    <option value="c">c) Documento que se realiza sin culpa después de un incidente para identificar las causas sistémicas de un fallo.</option>
                                    <option value="d">d) El propósito final de la Observabilidad y el Post-Mortem; los datos de Producción se convierten en tareas para Desarrollo.</option>
                                    <option value="e">e) Lo que deben hacer los equipos de DevOps después de resolver un incidente.</option>
                                    <option value="f">f) La acción de la Observabilidad que detiene o revierte un deployment si el SLO se degrada inmediatamente.</option>
                                    <option value="g">g) El resultado de que la información de Producción (Ops) se integre nuevamente en el proceso de Desarrollo (Dev).</option>
                                    <option value="h">h) La fuente de datos utilizada para identificar la causa raíz y el camino exacto del fallo en un incidente.</option>
                                    <option value="i">i) El principio del Post-Mortem que se enfoca en mejorar los procesos en lugar de señalar errores individuales.</option>
                                    <option value="j">j) El concepto que permite el seguimiento continuo del sistema desde la Detección hasta la Resolución.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_7/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 4 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_7/validar_actividades/validar_actividades_leccion_4.js?v=1.0"></script>
</body>
</html>
