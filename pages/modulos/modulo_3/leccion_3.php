<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_3/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - La Batería de Pruebas Automatizadas (Shift Left)</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_3_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 3</button>
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
                    <?php include("scripts_modulo_3/leccion_3/leccion_3_scripts.php"); ?>
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
                                Validando la Calidad y Previniendo la Regresión
                            </h1>
                            <h4>
                                La Filosofía Shift Left
                            </h4>
                            El concepto "Shift Left" significa mover las actividades de calidad, prueba
                            y seguridad a la izquierda (al inicio) del ciclo de vida de desarrollo. En CI, 
                            esto se traduce en ejecutar la mayor cantidad posible de validaciones 
                            inmediatamente después del build, en lugar de esperar a que el código 
                            llegue al equipo de QA. El objetivo es que los errores se detecten y se 
                            corrijan en la fase más económica: la máquina del desarrollador o el 
                            servidor CI.
                            <br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/shift-left.png" alt="Shift Left">
                            <br>
                            <h4>
                                Estructura de la Pirámide de Pruebas en CI
                            </h4>
                            En la CI, se priorizan las pruebas más rápidas y baratas:
                            <ol>
                                <li>Pruebas Unitarias (Base): Son la validación más crítica. Prueban la lógica de negocios de componentes aislados sin dependencias externas. Deben ser rápidas (segundos) y con alta cobertura. </li><br>
                                <li>Análisis Estático (Lateral): Herramientas como SonarQube escanean el código fuente sin ejecutarlo para identificar automáticamente deuda técnica, vulnerabilidades de seguridad (code smells) y violaciones de estilo. Actúa como una auditoría de calidad inmediata. </li><br>
                                <li>Pruebas de Integración Ligeras (Medio): Validaciones rápidas de interacción entre componentes clave, a menudo utilizando mocks o bases de datos simuladas.</li><br>
                            </ol>
                            <br>
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/raNxF0L5kXo?si=hZgKFtu022ZZFxkH" 
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
                                El "Quality Gate" y la Regresión
                            </h4>
                            El pipeline de CI funciona como un estricto "Quality Gate" (Puerta de 
                            Calidad). Si cualquier prueba o regla de análisis falla (ej. si la Cobertura de 
                            Código cae por debajo del umbral del 80%), el build es marcado como 
                            fallido, y se previene el paso del artefacto. Esto es fundamental para evitar 
                            la regresión—la introducción de nuevos bugs o la reaparición de antiguos—
                            causada por cambios recientes. La falla no solo detiene el proceso, sino 
                            que también proporciona evidencia cuantificable del error.
                            <br><br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/quality_gate.gif" alt="quality_gate">
                            <br><br>
                            <iframe 
                            width="500" height="300" src="https://www.youtube.com/embed/gFZVjC9zASk?si=619wrESOd4pla0MO" 
                            title="YouTube video player" 
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
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
                    <form id="validar_actividad" action="scripts_modulo_3/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="14">
                        <h3>1. ¿Cuál es el concepto principal de la práctica 'Shift Left' en el contexto de CI?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Reducir la cantidad de código escrito en el proyecto.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Mover las tareas de Operaciones hacia el equipo de Desarrollo.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Adelantar las actividades de prueba y seguridad lo más temprano posible en el ciclo de desarrollo.</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Cuál de las siguientes pruebas debe ser la más rápida y la más ejecutada en el pipeline de CI?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Pruebas de Aceptación del Usuario (UAT).</label> <br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Pruebas de Carga y Estrés.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Pruebas Unitarias.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es la función principal del Análisis Estático de Código en la fase de CI?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Verificar que la conexión con la base de datos de producción funcione.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Auditar la calidad, seguridad y estilo del código sin ejecutar el programa.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Ejecutar el código para simular la interacción del usuario final.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. En el contexto de CI, ¿qué significa que una prueba falle y el build se marque como 'rojo'?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) El pipeline debe intentar la compilación nuevamente sin ejecutar las pruebas.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) El código debe ser revisado manualmente por el equipo de QA antes de continuar.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) El pipeline se detiene, y el artefacto no es apto para pasar a las siguientes fases (Quality Gate).</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué concepto se mide para cuantificar la porción de código fuente que ha sido cubierta o ejercitada por las pruebas unitarias?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_5" value="a">a) Tiempo Medio para Reparar (MTTR).</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Cobertura de Código.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Duplicación Estática.</label><br>
                        </div>
                        <div class="columna">
                        <h3>6. ¿Cuál es el principal beneficio de la ejecución de pruebas automatizadas inmediatamente después del build en CI?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) Ahorrar el costo de contratar a un equipo de control de calidad (QA).</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) Minimizar el costo de la corrección al detectar defectos de manera temprana y rápida (MTTD bajo).</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) Permitir el despliegue automático a producción sin supervisión humana.</label><br>
                        </div>


                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_3/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_3/validar_actividades/validar_actividades_leccion_3.js?v=2.0"></script>
</body>
</html>
