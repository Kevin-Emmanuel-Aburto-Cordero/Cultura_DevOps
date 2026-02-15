<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_4/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - Pruebas de Alto Nivel y la Necesidad de Carga/Rendimiento</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_4_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 4</button>
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
                    <?php include("scripts_modulo_4/leccion_3/leccion_3_scripts.php"); ?>
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
                                Validación Funcional Exhaustiva y Métrica No Funcionales
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Las pruebas en la etapa de CD se centran en la confianza y el 
                            comportamiento no funcional. Complementan y superan las pruebas 
                            rápidas de CI.
                            <h4>
                                Tipos de Pruebas Clave
                            </h4>
                            <ol>
                                <li>Pruebas End-to-End (E2E): Validan el flujo de usuario de principio a 
                                    fin, interactuando con la aplicación y sus dependencias externas 
                                    (bases de datos, APIs de terceros, etc.) en un entorno integrado. Son 
                                    más lentas que las unitarias. </li> <br>
                                <li>Pruebas de Carga y Estrés: Cruciales en CD. Se ejecutan en Staging 
                                    para simular un volumen de usuarios igual o superior al pico 
                                    esperado en Producción. Miden la latencia (tiempo de respuesta) y la 
                                    escalabilidad del sistema, revelando cuellos de botella antes de que 
                                    afecten a los clientes. </li><br>
                                <li>Pruebas de Seguridad Dinámicas (DAST): Escanean la aplicación 
                                    mientras está corriendo en busca de vulnerabilidades activas 
                                    (diferente del SAST estático de CI).</li>
                            </ol>
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_4/end-to-end.jpg" alt="End To End">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Métricas No Funcionales
                            </h4>
                           Las pruebas de CD se enfocan en responder preguntas como: ¿Puede la 
                           aplicación manejar 1000 transacciones por segundo? ¿Es el tiempo de 
                           respuesta aceptable bajo carga? Si estas pruebas fallan, el pipeline se 
                           detiene y el artefacto no recibe la certificación para Producción.
                           <br>
                           <h4>
                                El Beneficio del Staging
                           </h4>
                           La ejecución de estas pruebas pesadas y destructivas en el entorno de 
                           Staging garantiza que el ambiente de Producción nunca se vea afectado 
                           por fallos de rendimiento o escalabilidad.
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_4/CI2.png" alt="End To End">
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
                    <form id="validar_actividad" action="scripts_modulo_4/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="19">
                        <h3>1. ¿Cuál es el enfoque principal de las pruebas que se ejecutan en la fase de Entrega Continua (CD)?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Validar el sistema completo (End-to-End) y las métricas no funcionales. </label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Auditar el código fuente en busca de deuda técnica.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Validar la lógica de componentes aislados (Pruebas Unitarias).</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Por qué las Pruebas de Carga y Estrés son consideradas pruebas de CD y no de CI?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Porque solo necesitan validación manual del usuario.</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Porque son lentas, pesadas y deben ejecutarse en entornos que simulan Producción (Staging).</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Porque miden la seguridad, lo cual es la última prioridad.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es el objetivo principal de ejecutar las Pruebas de Carga en el entorno de Staging?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Verificar la latencia de la red interna del desarrollador.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Determinar si la aplicación es estable y escalable bajo el volumen de tráfico esperado de Producción.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Asegurar que el código fuente tenga buena documentación.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué evalúan las Pruebas End-to-End (E2E) o Pruebas de Sistema en la etapa de CD?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) La interacción y el flujo de trabajo completo de la aplicación con sus servicios y bases de datos reales.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) El rendimiento de los periféricos de la máquina del desarrollador.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) La cantidad de líneas de código en cada componente.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué consecuencia inmediata tiene un fallo en las Pruebas de Carga en el pipeline de CD?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_5" value="a">a) Se envía el artefacto a Producción con una advertencia de riesgo.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Se genera un nuevo build con un tipo de hardware más pequeño.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) El pipeline se detiene, y el artefacto es rechazado para la liberación final.</label><br>
                        </div>
                        <div class="columna">
                        <h3>6. ¿Cuál es la principal diferencia entre el Análisis Estático (SAST) de CI y el Análisis Dinámico (DAST) que se ejecuta en CD?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) El SAST se enfoca en el rendimiento y el DAST en la latencia.</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) El DAST es una prueba manual y el SAST es automática.</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) El SAST analiza el código fuente sin ejecutarlo, y el DAST escanea el artefacto mientras se está ejecutando en un entorno de prueba.</label><br>
                        </div>
                        <div class="columna">
                        <h3>7. ¿Qué concepto no funcional es medido por las Pruebas de Carga en el entorno de Staging?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_7" value="a">a) La latencia (tiempo de respuesta) del sistema bajo alta concurrencia.</label><br>
                        <label><input type="radio" name="pregunta_7" value="b">b) La seguridad de la interfaz de usuario.</label><br>
                        <label><input type="radio" name="pregunta_7" value="c">c) La coherencia del color de los botones en la aplicación.</label><br>
                        </div>
                        <div class="columna">
                        <h3>8. ¿Por qué es fundamental ejecutar las Pruebas de Sistema (E2E) en el entorno de Staging y no solo en CI?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_8" value="a">a) Porque Staging no tiene acceso a bases de datos o servicios externos.</label><br>
                        <label><input type="radio" name="pregunta_8" value="b">b) Porque se necesita validar el comportamiento en un entorno que utiliza dependencias y servicios reales, no simulados (mocks).</label><br>
                        <label><input type="radio" name="pregunta_8" value="c">c) Porque el artefacto necesita ser recompilado antes de las pruebas E2E.</label><br>
                        </div>

                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_4/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 3 de 5
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_4/validar_actividades/validar_actividades_leccion_3.js?v=1.0"></script>
</body>
</html>
