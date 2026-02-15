<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_7/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - Monitoreo vs. Observabilidad: La Distinción Clave</title>
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
                    <?php include("scripts_modulo_7/leccion_1/leccion_1_scripts.php"); ?>
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
                                Saber Qué Buscar vs. Poder Preguntar Lo Que Sea
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Aunque a menudo se usan indistintamente, el Monitoreo y la Observabilidad son conceptos complementarios pero diferentes. La Observabilidad es la evolución del Monitoreo y es esencial en entornos de microservicios y cloud-native (como los basados en K8s).
                            <br>
                            <h4>
                                Monitoreo (Monitoring)
                            </h4>
                            Es la práctica de recolectar datos sobre el sistema para responder a preguntas conocidas previamente. Se basa en métricas predefinidas (CPU, uso de disco, latencia). Su objetivo es alertar si algo se sale de un umbral esperado (e.g., "la CPU supera el 90%"). El monitoreo es el resultado de lo que puedes medir.
                            <img src="../../../assets/img/modulo_7/monitoreo.jpg" alt="" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Observabilidad (Observability)
                            </h4>
                            Es una propiedad inherente del sistema (generalmente de software) que se logra mediante tres pilares: Métricas, Logs y Traces. Permite al equipo hacer preguntas desconocidas sobre el sistema en tiempo real (e.g., "¿Por qué el 3% de las solicitudes de usuarios brasileños fallaron justo después de la liberación?"). La observabilidad es el potencial para extraer cualquier información.
                            <br>
                            <h4>
                                Rol en DevOps
                            </h4>
                            La Observabilidad acelera la investigación de causa raíz y el Mean Time To Resolution (MTTR), permitiendo a los equipos de desarrollo (Dev) y operaciones (Ops) colaborar utilizando un único conjunto de datos para entender incidentes complejos.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/CwDH-4TZnzI?si=cr8IayAVslRdXodh" 
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
                    <form id="actividad" action="scripts_modulo_7/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="31">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Monitoreo (Monitoring)</p>
                                <p>2. Observabilidad (Observability)</p>
                                <p>3. Preguntas Conocidas</p>
                                <p>4. Preguntas Desconocidas</p>
                                <p>5. Métricas Predefinidas</p>
                                <p>6. Latencia</p>
                                <p>7. Logs y Traces</p>
                                <p>8. MTTR</p>
                                <p>9. Propiedad Inherente</p>
                                <p>10. Microservicios</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar de la Observabilidad que permite la investigación de la causa raíz detallada.</option>
                                    <option value="b">b) La práctica de recolectar datos para responder a preguntas conocidas previamente.</option>
                                    <option value="c">c) El resultado directo de que el sistema emita Métricas, Logs y Trazas (los tres pilares).</option>
                                    <option value="d">d) Indicadores predefinidos como CPU, uso de disco o latencia que se miden constantemente.</option>
                                    <option value="e">e) La evolución del Monitoreo; una propiedad inherente del sistema que se logra con los tres pilares.</option>
                                    <option value="f">f) El tiempo que tarda un sistema en recuperarse de un fallo; un objetivo clave de la Observabilidad.</option>
                                    <option value="g">g) Preguntas que un equipo puede hacer en un sistema observable, pero no en uno puramente monitoreado.</option>
                                    <option value="h">h) Una métrica predefinida que mide el tiempo de respuesta de una solicitud.</option>
                                    <option value="i">i) El enfoque del monitoreo; se sabe de antemano qué variables son importantes.</option>
                                    <option value="j">j) El tipo de arquitectura que hace que la Observabilidad sea esencial debido a su alta complejidad y distribución.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_7/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_7/validar_actividades/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>
