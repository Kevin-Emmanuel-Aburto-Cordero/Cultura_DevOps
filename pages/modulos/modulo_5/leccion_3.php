<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_5/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - El Principio de Idempotencia y la Inmutabilidad</title>
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
                    <?php include("scripts_modulo_5/leccion_3/leccion_3_scripts.php"); ?>
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
                                Consistencia y Confianza en la Repetición
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Idempotencia es la propiedad de que una operación se puede ejecutar 
                            repetidamente sin causar efectos adicionales o no deseados después de 
                            la primera ejecución. Es el pilar de la confiabilidad en IaC.
                            <br>
                            <h4>
                                Idempotencia en IaC
                            </h4>
                            Las herramientas declarativas alcanzan la idempotencia al chequear el 
                            estado actual del recurso antes de actuar. Si el estado actual es igual al 
                            estado deseado (definido en el código), la herramienta no hace nada. Si 
                            son diferentes, aplica el cambio. Esto evita la corrupción o la duplicación 
                            accidental de recursos.
                            <br>
                            <img src="../../../assets/img/modulo_5/initial.png" alt="Initial" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Infraestructura Inmutable
                            </h4>
                           Este principio va un paso más allá de la idempotencia. En lugar de 
                           actualizar un servidor existente (mutable), cualquier cambio requerido 
                           implica destruir el servidor antiguo y aprovisionar un servidor nuevo 
                           (inmutable) con la configuración actualizada. Esto garantiza que no haya 
                           Configuration Drift escondido y es la base de las tecnologías de 
                           Contenedores (Docker, Kubernetes).
                           <br>
                           <h4>
                                Beneficio
                           </h4>
                           Al eliminar el riesgo de cambios manuales o drift, se aumenta la confianza 
                           para ejecutar automáticamente los pipelines de CD que dependen de que 
                           la infraestructura funcione como se espera.
                           <br>
                           <img src="../../../assets/img/modulo_5/infraestructura-como-codigo.webp" alt="Infraestructura Como Codigo" class="imagen_ejemplo">
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
                    <form id="validar_actividad" action="scripts_modulo_5/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="24">
                        <h3>1. ¿Cuál es la definición del principio de Idempotencia en el contexto de la Infraestructura como Código (IaC)?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) La práctica de configurar servidores de forma manual.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Que una operación se puede ejecutar repetidamente sin causar efectos no deseados después de la primera ejecución.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) La capacidad de destruir un recurso de infraestructura rápidamente.</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Cómo logran las herramientas de IaC declarativas la Idempotencia?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Solicitando la aprobación del desarrollador antes de cada paso.</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Ejecutando la secuencia de comandos dos veces para confirmar el resultado.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Chequeando el estado actual del recurso antes de actuar y solo aplicando cambios si es necesario.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es el principio clave de la Infraestructura Inmutable?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Los servidores deben ser configurados manualmente para asegurar la estabilidad.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Cualquier cambio requiere destruir el servidor antiguo y aprovisionar uno nuevo con la configuración actualizada.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Solo se pueden usar contenedores (Docker) para la infraestructura.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué riesgo evita el principio de Idempotencia en el pipeline de CD?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) La duplicación o corrupción accidental de recursos si el pipeline se ejecuta varias veces.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Que el desarrollador no comente su código.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) La lentitud en la revisión de código.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué concepto va más allá de la Idempotencia al prohibir cualquier modificación directa a los servidores una vez que están activos?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_5" value="a">a) Desarrollo Basado en Troncal (TBD).</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Infraestructura Inmutable.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Infraestructura Mutable.</label><br>
                        </div>
                        <div class="columna">
                        <h3>6. ¿Cuál es el principal beneficio de la Infraestructura Inmutable en términos de fiabilidad?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) Reduce la necesidad de pruebas automatizadas.</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) Elimina el riesgo de Desviación de Configuración (Configuration Drift) escondido.</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) Permite a los administradores iniciar sesión (ssh) en los servidores para hacer correcciones.</label><br>
                        </div>

                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_5/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_5/validar_actividades/validar_actividades_leccion_3.js?v=1.0"></script>
</body>
</html>
