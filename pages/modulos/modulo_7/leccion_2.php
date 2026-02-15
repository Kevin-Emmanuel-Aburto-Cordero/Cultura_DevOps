<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_7/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - Los Tres Pilares de la Observabilidad (MELT)</title>
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
                    <?php include("scripts_modulo_7/leccion_2/leccion_2_scripts.php"); ?>
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
                                Las Fuentes de Datos para Entender el Sistema
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Para que un sistema sea observable, debe emitir constantemente tres tipos de datos de telemetría, a menudo recordados por el acrónimo MELT (Métricas, Eventos, Logs, Traces).
                            <br>
                            <h4>
                                1. Métricas (Metrics)
                            </h4>
                            Son valores numéricos recolectados a intervalos regulares, ideales para medir tendencias y establecer umbrales de alerta. Ejemplos: requests per second (RPS), latencia promedio, tasa de errores (5xx). Son la base del monitoreo y son eficientes para almacenamiento.
                            <br>
                            <h4>
                                2. Logs (Registro de Eventos)
                            </h4>
                            Son registros discretos de texto o JSON que documentan un evento específico que ocurrió en un momento particular (e.g., un usuario inició sesión, un job falló). Son cruciales para la investigación profunda del "por qué" detallado, pero son costosos de almacenar y requieren herramientas de búsqueda y agregación (ej. ELK Stack).
                            <img src="../../../assets/img/modulo_7/fuentes-de-datos.jpg" alt="Fuentes de datos" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                3. Trazas (Traces)
                            </h4>
                            Son datos que miden el camino completo que recorre una solicitud de usuario a través de múltiples servicios de un sistema distribuido (ej. Microservicios). Permiten identificar cuellos de botella y fallos entre servicios específicos. Esto se conoce como Monitorización de Transacciones Distribuidas.
                            <br>
                            <h4>
                                El Valor Combinado
                            </h4>
                            La combinación de los tres pilares permite un flujo de trabajo de resolución: se detecta un pico en una Métrica, se usa la Traza para ver qué microservicio falló, y se revisan los Logs de ese microservicio para ver la causa exacta del error.
                            <img src="../../../assets/img/modulo_7/melt-graph-pfms-blog.png" alt="melt-graph-pfms-blog" class="imagen_ejemplo">
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
                    <form id="actividad" action="scripts_modulo_7/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <input type="hidden" name="idActividad" value="32">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Métricas (Metrics)</p>
                                <p>2. Trazas (Traces)</p>
                                <p>3. Logs (Registros)</p>
                                <p>4. MELT</p>
                                <p>5. Sistema Distribuido</p>
                                <p>6. nvestigación Profunda</p>
                                <p>7. ELK Stack</p>
                                <p>8. Latencia</p>
                                <p>9. Monitorización de Transacciones Distribuidas</p>
                                <p>10. JSON o Texto</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El pilar que se utiliza para realizar la investigación profunda y detallada de un fallo.</option>
                                    <option value="b">b) El acrónimo que representa los tres principales tipos de datos de telemetría emitidos por un sistema.</option>
                                    <option value="c">c) La base del monitoreo; valores numéricos recolectados a intervalos regulares para medir tendencias.</option>
                                    <option value="d">d) El camino completo que sigue una solicitud a través de múltiples microservicios.</option>
                                    <option value="e">e) Las herramientas necesarias (ej. ELK Stack) para gestionar y buscar a través de grandes volúmenes de Logs.</option>
                                    <option value="f">f) El uso de las Trazas para identificar cuellos de botella y fallos específicos en una arquitectura de microservicios.</option>
                                    <option value="g">g) El objetivo del flujo de trabajo ideal de resolución: ir de una Métrica -> Traza -> Log.</option>
                                    <option value="h">h) El tipo de arquitectura que hace que el pilar de Trazas sea indispensable.</option>
                                    <option value="i">i) Una Métrica común que mide el tiempo de respuesta de una aplicación.</option>
                                    <option value="j">j) El formato más común de los datos de un Log.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_7/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 2 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_7/validar_actividades/validar_actividades_leccion_2.js?v=1.0"></script>
</body>
</html>
