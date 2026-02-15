<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_8/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - Introducción a DevSecOps: Shift-Left Security</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_8_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 8</button>
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
                    <?php include("scripts_modulo_8/leccion_1/leccion_1_scripts.php"); ?>
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
                                Integrando la Seguridad al Principio del Ciclo
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            DevSecOps es la práctica de integrar la seguridad como una responsabilidad compartida, automatizada y continua en todas las fases del pipeline de DevOps, en lugar de ser un paso de último minuto realizado por un equipo separado.
                            <br>
                            <h4>
                                El Problema del "Gatekeeper"
                            </h4>
                            En los modelos tradicionales, la seguridad actúa como un cuello de botella (gatekeeper) al final del proceso de CD, ralentizando la liberación. Cuando se encuentran vulnerabilidades tarde, son caras y difíciles de corregir.
                            <br>
                            <h4>
                                Principio Shift-Left
                            </h4>
                            El pilar central de DevSecOps es Mover la Seguridad a la Izquierda (Shift-Left Security). Esto significa aplicar controles de seguridad lo más pronto posible en el ciclo de vida (desde la fase de código y planificación) para encontrar y arreglar fallos antes de que lleguen a Producción.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/ysYGGaUSQo0?si=P815SoFcy4jWDKfs" 
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
                                Responsabilidad Compartida
                            </h4>
                            DevSecOps promueve una cultura de seguridad donde la responsabilidad recae en los equipos de desarrollo (Dev) y operaciones (Ops), no solo en el equipo de Seguridad. Los desarrolladores deben ser responsables de escribir código seguro.
                            <br>
                            <h4>
                                Automatización
                            </h4>
                            Para mantener la velocidad de DevOps, las pruebas y verificaciones de seguridad deben ser automatizadas e incorporadas en las etapas de CI/CD (Módulos 3 y 4).
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/bqwHl8kRXYQ?si=l9rDqux-XickDM1t" 
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
                    <form id="validar_actividad" action="scripts_modulo_8/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="35">
                        <h3>1. ¿Cuál es la principal diferencia entre DevSecOps y los modelos de seguridad tradicionales?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) DevSecOps solo utiliza la nube.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) DevSecOps requiere más ingenieros de seguridad</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) DevSecOps integra la seguridad en todas las fases del pipeline.</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Cómo se llama el pilar central de DevSecOps que busca aplicar los controles de seguridad lo más pronto posible en el ciclo de vida?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Integración Continua (CI)</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Shift-Left (Mover a la Izquierda)</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Principio de Mínimo Privilegio.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es el principal inconveniente de encontrar una vulnerabilidad de seguridad en la fase de Producción (al final del ciclo)?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Son más caras y difíciles de corregir.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) El equipo de Desarrollo no tiene que participar.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Se necesita menos automatización.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué rol tradicional de seguridad se considera un cuello de botella en un pipeline de DevOps rápido?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) El rol de Arquitecto de Nube.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) El rol de Desarrollador Front-end.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) El rol de 'Gatekeeper' (Portero) manual de último minuto.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué promueve DevSecOps sobre la responsabilidad de la seguridad?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_5" value="a">a) Que es responsabilidad exclusiva del equipo de Operaciones.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Que la seguridad es una responsabilidad compartida, automatizada y continua.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Que es responsabilidad exclusiva del desarrollador junior.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_8/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_8/validar_actividades/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>
