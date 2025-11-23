<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_1/leccion_1.css?v=3.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0?">
    <title>Leccion 2 - Cultura y principios de DevOps</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                    <form action="modulo_1_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 1</button>
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
            if (!isset($_SESSION['idEstudiante'])) {
            header("Location: ../../../auth/login.html");
            exit();
        }
        ?>
        <?php include("scripts_modulo_1/leccion_2/leccion_2_scripts.php"); ?>
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
                    <h4 class="subtitulo">¿En qué consiste la cultura de DevOps?</h4>
                    Cómo ayuda la cultura de DevOps a sincronizar las personas, los procesos y las
                    herramientas hacia un enfoque en el cliente más unificado.
                    <br><br>
                    DevOps es un enfoque ágil del cambio organizativo que busca cerrar las brechas 
                    tradicionales y los grupos aislados entre los equipos, además de establecer nuevos 
                    procesos que faciliten una mayor colaboración. DevOps es posible gracias a 
                    nuevas herramientas y a prácticas de ingeniería ágiles, pero con esto basta 
                    para disfrutar de las ventajas de DevOps. Sin la mentalidad, los rituales y la 
                    cultura adecuados, es dificil beneficiarse por completo de DevOps. 
                    <br><br>
                    En esencia, la cultura de DevOps implica una colaboración más estrecha y una 
                    responsabilidad compartida entre los equipos de desarrollo y operaciones en 
                    cuanto a los productos que crean y mantienen. Esto ayuda a las empresas a 
                    coordinar a las personas, los procesos y las herramientas hacia un enfoque en 
                    el cliente más unificado. 
                    <br><br>
                    Implica fomentar el desarrollo de equipos multidisciplinarios que se 
                    responsabilicen de todo el ciclo de vida de un producto. Los equipos de DevOps 
                    trabajan de forma autónoma y adoptan una cultura, un flujo de trabajo y un 
                    conjunto de herramientas de ingeniería de software que llevan los requisitos 
                    operativos al mismo nivel de importancia que la arquitectura, el diseño y el 
                    desarrollo. Ser consciente de que los desarrolladores que creen algo también 
                    deberán gestionarlo los acerca al usuario y les aporta una mayor comprensión de 
                    sus requisitos y necesidades. Además, como los equipos de operaciones están más 
                    involucrados en el proceso de desarrollo, pueden añadir requisitos de mantenimiento 
                    y necesidades de los clientes para obtener un producto aún mejor.
                    <br><br>
                    <img class="imagen_ejemplo" src="../../../assets/img/modulo_1/devops.jpg" alt="Ejemplo">
                    </div></div>
                </div>
            </div>
            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                    <div class="columna">
                    En el centro de la cultura de DevOps se encuentra el aumento de la transparencia, 
                    la comunicación y la colaboración entre equipos que tradicionalmente trabajaban 
                    aislados. Pero hay cambios culturales importantes que deben producirse para acercar 
                    a estos equipos. DevOps es un cambio de la cultura organizativa que hace hincapié 
                    en el aprendizaje y la mejora continuos, especialmente a través de la autonomía de 
                    cada equipo, el feedback rápido, el alto grado de empatía y confianza y la 
                    colaboración entre equipos.
                    <br><br>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/Te47jTCDfVM?si=ukja6-6k8CUD2sEu" 
                    title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
                    </div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuelo1">
        <div class="contenedor-tio">
            <div class="contenedor-primo1">
            <div class="actividad_1">
                <h1>
                        Actividad: Responde las preguntas y selecciona la respuesta correcta
                    </h1>
                <div class="container">
                    <div class="columna">
                <form id="validar_actividad" action="scripts_modulo_1/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                    <input type="hidden" name="idActividad" value="2">
                        <h3>1. ¿Cuál es la idea principal detrás de la cultura de DevOps?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_1" value="a">a) Instalar las herramientas más recientes para automatizar todo.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Fomentar la colaboración, comunicación e integración entre los equipos de desarrollo y operaciones.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Limitar la comunicación para que cada equipo se concentre en sus tareas específicas.</label><br>
                        
                        <h3>2. En el contexto de DevOps, ¿cuál es el beneficio principal de la Integración Continua (CI)?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_2" value="a">a) Eliminar por completo el proceso de pruebas.</label> <br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Automatizar la integración del código de múltiples desarrolladores para detectar errores de forma temprana.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Desplegar manualmente el código en producción varias veces al día.</label><br>
                        
                        <h3>3. ¿Qué fase del ciclo de vida de DevOps se encarga de monitorear una aplicación en producción para identificar problemas y obtener retroalimentación?</h3> <!--Correcto: c-->
                        <label><input type="radio" name="pregunta_3" value="a">a) Desarrollo.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Planificación.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Monitorización.</label><br>
                        
                        <h3>4. ¿Qué tecnología se utiliza para empaquetar una aplicación con todas sus dependencias en un entorno aislado, lo que facilita su despliegue consistente?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_4" value="a">a) Lenguajes de programación.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Contenedores (como Docker).</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Bases de datos.</label><br>

                        <h3>5. ¿Qué enfoque ágil busca cerrar la cultura de DevOps?</h3> <!--Correcto: c-->
                        <label><input type="radio" name="pregunta_5" value="a">a) La brecha de velocidad entre el desarrollo y el despliegue de software.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) La brecha de comunicación entre los equipos de marketing y de ventas.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Las brechas tradicionales y los grupos aislados entre los equipos.</label><br>

                        <h3>6. ¿Qué enfoque ágil busca cerrar la cultura de DevOps?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) La automatización total de todos los procesos de ingeniería.</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) El aumento de la transparencia, la comunicación y la colaboración entre equipos.</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) La separación completa de responsabilidades entre desarrollo y operaciones.</label><br>

                        <h3>7. ¿Qué enfoque ágil busca cerrar la cultura de DevOps?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_7" value="a">a) Se desligan completamente de las necesidades del usuario final.</label><br>
                        <label><input type="radio" name="pregunta_7" value="b">b) Obtienen una mayor comprensión de los requisitos y necesidades del usuario.</label><br>
                        <label><input type="radio" name="pregunta_7" value="c">c) Se centran únicamente en el código, sin preocuparse por el mantenimiento.</label><br>
                        </div></div>
                        <button type="submit" class="botones" name="accion" value="calificar">Enviar Respuestas</button><br>
                        <button type="submit" class="botones" name="accion" value="completar">Marcar como completada</button>
                </form>
                <h3>Calificacion: <?php include('scripts_modulo_1/leccion_2/mostrar_calificacion_leccion_2.php');?></h3>
            </div>
</div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividad 2 de 5
        </div>
    </div>
    <div id="mensajeError" style="color: wheat;"></div>
                <script src="../../../assets/js/modulo_1/validar_actividades_leccion_2.js?v=2.0"></script>
                <script src="../../../assets/js/modulo_1/verificar_actividad_terminada_leccion_2.js?v=3.0"></script>


 

</body>
</html>