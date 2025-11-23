<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_1/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - El ciclo de vida de DevOps (CI/CD)</title>
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
    if(!isset($_SESSION['idEstudiante'])){
        header("Location: ../../../auth/login.html");
        exit();
    }
    ?>
            <?php include("scripts_modulo_1/leccion_3/leccion_3_scripts.php"); ?>
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
                    <h4 class="subtitulo">¿Que es el ciclo de CI/CD?</h4>
                    Un ciclo de integración continua y de distribución/implementación continua 
                    (CI/CD) es una serie de pasos que sigue la distribución de software desde que se 
                    crea el código hasta que se implementa. Los ciclos de CI/CD, un elemento clave 
                    para DevOps, optimizan el desarrollo de aplicaciones mediante la automatización 
                    de tareas repetitivas, lo cual permite detectar fallos en fases tempranas, reducir 
                    los errores manuales y acelerar la distribución del software. 
                    <br>
                    <h4 class="subtitulo">Ciclo de CI/CD: explicación</h4>
                    El ciclo de CI/CD abarca una serie de procesos automatizados (desde el desarrollo 
                    del código hasta la implementación en el entorno de producción) que permiten 
                    distribuir cambios de código en el entorno de producción de manera frecuente y 
                    fiable. Constituye la piedra angular de DevOps, un cambio en el desarrollo de 
                    software que hace hincapié en la colaboración entre los equipos de desarrollo y de 
                    operaciones, con el objetivo final de acelerar el ciclo de vida del desarrollo sin 
                    poner en peligro la calidad del software. <br><br>
                    El ciclo de CI/CD, que encarna los principios clave de DevOps, tiende un puente 
                    entre el desarrollo, las pruebas y las operaciones. En este entorno de colaboración, 
                    CI/CD fomenta una cultura empresarial de responsabilidad compartida por la 
                    calidad de un producto y la puntualidad en su distribución. <br><br>
                    <img class="imagen_ejemplo" src="../../../assets/img/modulo_1/img_leccion_3_lectura_1.png" alt="Pasos del ciclo de CI/CD">
                    <br>
                    <h4 class="subtitulo">Integración continua (CI)</h4>
                    La integración continua (CI) es una práctica propia del desarrollo de software que 
                    consiste en fusionar periódicamente los cambios de código en un repositorio 
                    central. Con cada fusión, se ejecutan procesos automatizados de compilación y 
                    pruebas para garantizar la integración del nuevo código con la base de código 
                    existente sin que se introduzcan errores. De este modo, la CI reduce al mínimo las 
                    dificultades derivadas de fusionar los cambios al final del ciclo de desarrollo, como 
                    se hacía tradicionalmente.
                    <br>
                    <h4 class="subtitulo">Distribución e implementación continuas (CD)</h4>
                    La distribución y la implementación continuas (ambas denominadas «CD» por sus 
                    siglas en inglés) se ocupan de las fases sucesivas a la CI. La distribución continua 
                    automatiza el proceso de publicación, con lo que permite implementar en el 
                    entorno de producción cualquier versión del software en cualquier momento. 
                    </div></div>
                </div>
            </div>
            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                    <div class="columna">
                    Gracias a la CD, el software siempre está listo para implementarse, a pesar de los
                    cambios constantes. La implementación continua va más allá, pues implementa 
                    automáticamente todos los cambios que superan las pruebas automatizadas para 
                    entrar en el entorno de producción, con lo que el ritmo de los cambios se acelera al 
                    máximo.
                    <br><br>
                    Tanto la distribución continua como la implementación continua pasan por 
                    implementar automáticamente la aplicación en varios entornos, como los de 
                    preproducción y producción, utilizando configuraciones predefinidas de la 
                    infraestructura. El ciclo de CD incorpora pruebas adicionales, como las 
                    evaluaciones de seguridad, rendimiento e integración, para garantizar la calidad y 
                    la fiabilidad de las aplicaciones. 
                    <br><br>
                    <h4 class="subtitulo">Diferencias entre la distribución continua y la implementación continua</h4>
                    La diferencia principal entre la distribución y la implementación continua se 
                    encuentra en la fase final, cuando se trasladan los cambios al entorno de 
                    producción. En la distribución continua, el último paso de la implementación es un 
                    proceso manual, que brinda una red de seguridad para detectar posibles 
                    problemas que se hayan podido pasar por alto en las pruebas automatizadas. En 
                    cambio, la implementación continua automatiza todo el ciclo, incluida la 
                    implementación final en el entorno de producción, lo cual exige la configuración 
                    rigurosa de las pruebas y la supervisión para detectar y corregir problemas. 
                    <br><br>
                    Dicho de otro modo, el término «CI/CD» se puede referir a dos estrategias distintas:
                    <ul>
                        <li>Integración continua y distribución continua (CI/CD)</li>
                        <li>Integración continua e implementación continua (CI/CD)</li>
                    </ul>
                    Al implementar un ciclo de CI/CD, las organizaciones aceleran los plazos de 
                    comercialización, disfrutan de circuitos de retroalimentación continua y mejoran la 
                    calidad del software. Los ciclos de CI/CD permiten a los equipos de desarrollo,
                    operaciones y seguridad trabajar juntos y hace posible la distribución de 
                    aplicaciones seguras, estables y con un alto rendimiento. 
                    <br><br>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/xm1psJEFFIY?si=DnMXsUKoxAwTwH2X" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen></iframe>
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
                    <form id="validar_actividad" action="scripts_modulo_1/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <input type="hidden" name="idActividad" value="3">
                        <h3>1. ¿Cuál es el propósito principal de los ciclos de CI/CD?</h3> <!--Correcto: A-->
                        <label><input type="radio" name="pregunta_1" value="a">a) Automatizar tareas repetitivas para detectar fallos temprano y acelerar la distribución.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Crear un software sin ningún tipo de errores en la fase de desarrollo.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Eliminar la necesidad de fusionar cambios de código en un repositorio central.</label><br>
                        
                        <h3>2. La integración continua (CI) consiste en fusionar periódicamente los cambios de código en un repositorio central. ¿Qué proceso automatizado se ejecuta con cada fusión?</h3> <!--Correcto: C-->
                        <label><input type="radio" name="pregunta_2" value="a">a) La implementación en el entorno de producción para el usuario final.</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) El proceso de publicación para distribuir el software a los clientes.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) La compilación y pruebas para garantizar que no se introduzcan errores.</label><br>

                        <h3>3. De acuerdo con la cultura de DevOps, ¿quién es el principal responsable de la calidad de un producto?</h3> <!--Para confundir - Correcto: C-->
                        <label><input type="radio" name="pregunta_3" value="a">a) Únicamente el equipo de desarrollo, ya que ellos crean el código.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Únicamente el equipo de operaciones, ya que ellos mantienen el software.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) El ciclo de CI/CD fomenta una responsabilidad compartida entre los equipos.</label><br>

                        <h3>4. ¿En qué se diferencia principalmente la distribución continua de la implementación continua?</h3> <!--Correcto: c-->
                        <label><input type="radio" name="pregunta_4" value="a">a) La distribución continua no incluye pruebas adicionales, a diferencia de la implementación continua.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) La implementación continua es un proceso manual, mientras que la distribución continua es totalmente automática.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) En la distribución continua, la implementación final a producción es manual, mientras que en la implementación continua es automática.</label><br>

                        <h3>5. ¿Qué beneficio clave obtienen las organizaciones al implementar un ciclo de CI/CD?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_5" value="a">a) Se eliminan por completo los equipos de desarrollo y operaciones.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Se aceleran los plazos de comercialización y se mejora la calidad del software.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Se reducen las evaluaciones de seguridad y las pruebas de rendimiento.</label><br>

                        <h3>6. ¿A qué puede referirse el término "CI/CD"?</h3> <!--Para confundir - Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) A la integración continua y la implementación continua, pero nunca a la distribución continua.</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) A la integración continua y la distribución continua, o a la integración continua y la implementación continua.</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) A la integración continua y la implementación del código de forma manual.</label><br>
                        </div></div>
                        <button id="finalizarBtn" type="submit" class="botones" name="accion" value="calificar">Enviar Respuestas</button><br>
                        <button id="finalizarBtn" type="submit" class="botones" name="accion" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_1/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividad 3 de 5
        </div>
    </div>
    <div id="mensajeError" style="color: white;"></div>
    <script src="../../../assets/js/modulo_1/validar_actividades_leccion_3.js?v=2.0"></script>
    <script src="../../../assets/js/modulo_1/verificar_actividad_terminada_leccion_3.js?v=3.0"></script>
</body>
</html>