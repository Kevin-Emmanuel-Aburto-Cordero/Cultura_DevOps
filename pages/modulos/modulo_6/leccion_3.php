<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_6/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - Introducción a la Orquestación con Kubernetes (K8s)</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_6_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 6</button>
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
                    <?php include("scripts_modulo_6/leccion_3/leccion_3_scripts.php"); ?>
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
                                Gestionando Cientos de Contenedores en Producción
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Orquestación es el proceso de automatizar el despliegue, la gestión, la escalabilidad y la red de múltiples contenedores. Kubernetes (K8s) es el sistema de código abierto líder para la orquestación de contenedores, y opera bajo un modelo Declarativo (Módulo 5.2).
                            <br>
                            <h4>
                                Conceptos Fundamentales
                            </h4>
                            <ol>
                                <li>Clúster: El conjunto de máquinas (nodos) que ejecutan las aplicaciones en contenedores.</li>
                                <li>Pod: La unidad más pequeña de despliegue en K8s. Es un grupo de uno o más contenedores que comparten recursos de red y almacenamiento.</li>
                                <li>Despliegue (Deployment): La definición declarativa de cuántas réplicas de una aplicación (Pod) deben estar corriendo en el clúster.</li>
                            </ol>
                            <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/TC6VkqQ835U?si=BBLNjZ_gbY_xbHMb" 
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

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Mecanismo Central
                            </h4>
                            Kubernetes trabaja como un bucle de control que constantemente compara el estado deseado (definido en los archivos YAML) con el estado actual del clúster. Si hay una discrepancia (ej. un nodo falla, o se define una réplica más), Kubernetes automáticamente ajusta los recursos.
                            <br>
                            <h4>
                                Rol en CD
                            </h4>
                            Kubernetes permite estrategias de despliegue avanzadas como Rolling Updates, Azul/Verde o Canary de forma nativa, al gestionar el tráfico y el número de réplicas de manera controlada y automatizada.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/REMAgB7m1ig?si=NeJA1oFfI669hmva" 
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

                    <h2>
                        Actividad: Responde las preguntas y selecciona la respuesta correcta
                    </h2>
                    <form id="validar_actividad" action="scripts_modulo_6/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="29">
                        <h3>1. ¿Cuál es el proceso de automatizar el despliegue, la gestión y la escalabilidad de múltiples contenedores?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Aprovisionamiento de IaC</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) La Orquestación</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Integración Continua (CI)</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Bajo qué modelo de aprovisionamiento (visto en Módulo 5) opera principalmente Kubernetes?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Modelo Declarativo (Define el 'estado deseado' con archivos YAML).</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Modelo Exclusivo (Solo funciona en una nube).</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Modelo Imperativo (Define el 'cómo' paso a paso).</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es la unidad más pequeña que se despliega en Kubernetes, que agrupa uno o más contenedores?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) El Pod</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Clúster</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Nodo (Node)</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué componente de Kubernetes compara constantemente el estado deseado (YAML) con el estado actual del sistema?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) El Bucle de Control (Control Loop).</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) El Feature Toggle.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) El Load Balancer externo.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué estrategia avanzada de despliegue facilita Kubernetes de forma nativa en el pipeline de CD?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_5" value="a">a) Despliegue Monolítico.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Actualizaciones Rotativas (Rolling Updates) o Canary.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Despliegue manual de VMs.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_6/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 3 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_6/validar_actividades/validar_actividades_leccion_3.js?v=1.0"></script>
</body>
</html>
