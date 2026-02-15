<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_1/leccion_1.css?v=7.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - Historia de DevOps</title>
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
        <?php include("scripts_modulo_1/leccion_1/leccion_1_scripts.php"); ?>
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
                    <h4 class="subtitulo">Origen de DevOps: ¿Qué pasaba antes?</h4>
                    Como hemos visto previamente, la metodología de desarrollo DevOps surge
                    principalmente para resolver el conflicto de intereses entre los equipos
                    de desarrollo y el de operaciones tecnológicas y acelerar el ciclo de vidad
                    del desarrollo del software.
                    <br><br>
                    Antes del origen de DevOps, las organizaciones del mundo IT se basaban en 
                    una estructura tradicional, donde desarrolladores y operadores se veian los 
                    unos a otros como adversarios, debido a que sus objetivos a alcanzar parecían
                    ser contrarios entre si.
                    <br><br>
                    <img class="imagen_ejemplo" src="../../../assets/img/modulo_1/img_leccion_1_lectura_1.png" alt="DevOps">
                    <br><br>
                    Por un lado, el equipo de desarrollo debe responder a los cambios del mercado,
                    llevando nuevas funcionalidades a producción de la manera rápida posible.
                    Mientras que operaciones debe encargarse de ofrecer servicios estables, fiables y
                    seguros al cliente, lo cual dificulta llevar a producción cambios que puedan poner
                    en peligro el entorno.
                    <br><br>
                    Entonces el conflicto aparece cuando los equipos implementan medidas para 
                    cumplir sus propios objetivos, sin tener en cuenta la repercusión que esto 
                    puede causar en los demás. Así, las empresas IT que no utilizaban la metodologia 
                    DevOps se veían incapaces de hacer cambios en producción en poco tiempo, sino 
                    que tardaban semanas e incluso meses; además, al no ser una rutina, los cambios 
                    solían resultar en caídas del sistema y otras complicaciones.
                    <br><br>
                    Este conflicto de intereses e incapacidad de realziar cambios constantes se 
                    traduce en un time to market lento, una calidad de producto cuestionable, un 
                    coste humano y económico no deseado y un aumento de la deuda tçnica; siendo 
                    estas, algunas de las dificultades que se presentaban antes del origen de 
                    DevOps. 
                    
                </div>
    </div></div>
            </div>
            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                    <div class="columna">
                    <h4 class="subtitulo">Historia de DevOps: Su creación</h4>
                    El origen de DevOps nos lleva al año 2007 cuando un consultor freelance 
                    llamado Patrick Debois DevOps experimenta los conflictos e inconvenientes 
                    de la rivalidad entre los equipos de operaciones y desarrollo en una 
                    organización del gobierno belga, para la cual trabaja.
                    <br><br>
                    Un año más tarde en el marco de Agile 2008 conference tiene un encuentro 
                    con Andrew Clary Shafer, donde coinciden en lo problemático que es la 
                    divisón en los equipos de trabajos y deciden crear un grupo en Google llamado 
                    Agile System Administrators, para dar espacion a que otras personar puedan 
                    sus opiniones al respecto. 
                    <br><br>
                    Hacia 2009 John Allspaw y Paul Hammond dan a conocer 10 deploy per day durante 
                    la conferencia O´Relly Velocity 09 y que proponia enfocar esfuerzos en la
                    integración de los departamentos de operaciones y desarrollo. Esta propuesta 
                    llama la atenciónn de Debois, quien decide llevarlo a cabo y adoptar el termino
                    DevOps (Dev and Ops Cooperation at Flickr). 
                    <br><br>
                    A partir de alli, el mundo del desarrollo de aplicaciones, software y además 
                    elementos tecnologicos empezó a notar la necesidad de la aplicación de las 
                    prácticas de DevOps y el llamado movimiento DevOps empieza a expandirse y 
                    popularizarse. 
                    <br><br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/3-vd5NDH1-I?si=M9SA4UsrinA6iU1Y" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
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
                    <form id="validar_actividad" action="scripts_modulo_1/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="1">
                        <h3>1. ¿Cuál era el principal conflicto de intereses entre los equipos de desarrollo y el de operaciones tecnológicas antes de DevOps?</h3> <!--Correcto: c-->
                        <label><input type="radio" name="pregunta_1" value="a">a) El equipo de desarrollo buscaba servicios estables, mientras que operaciones prefería funcionalidades rapidas.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) El equipo de desarrollo y el de operaciones compartian responsabilidades, lo que generaba duplicidad de tareas.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) El equipo de desarrollo  quería implementar cambios rápidos, mientras que el de operaciones priorizaba la estabilidad del sistema.</label><br>
                        
                        <h3>2. ¿Qué consecuentcias traía para las empresas la incapacidad de realizar cambios constantes en producción antes del surgimiento de DevOps?</h3> <!--Correcto: c-->
                        <label><input type="radio" name="pregunta_2" value="a">a) Un "time to market" más rápido y una mejora en la calidad del producto.</label> <br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Reducción de la deuda técnica y del coste humano y económico.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Un "time to market" lento, una calidad de producto cuestionable y aumento de la deuda técnica.</label><br>
                        
                        <h3>3. ¿Qué evento motivó a Patrick Debois a adoptar el término "DevOps"?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_3" value="a">a) Su trabajo como consultor freelance para una organización del gobierno belga.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) La presentación de "10 deploy per day" en la conferencia O'Relly Velocity 09.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) El encuentro con Andrew Clary Shafer en la Agile 2008 conference.</label><br>
                        
                        <h3>4. ¿Qué acción tomaron Patrick Debois y Andrew Clary Shafer después de coincidir en la problemática división de los equipos?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_4" value="a">a) Publicaron el trabajo "10 deploy per day" en una conferencia.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Crearon un grupo en Google para discutir el tema con otras personas.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Decidieron formar el movimiento DevOps y expandirlo.</label><br>
                        </div></div>
                        <button class="botones" type="submit" name="accion" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" type="submit" name="accion" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_1/leccion_1/mostrar_calificacion_leccion_1.php');?></h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 5
        </div>
    </div>
    <div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_1/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>