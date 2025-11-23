<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_8/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - Pruebas de Seguridad en el Pipeline CI/CD</title>
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
                    <?php include("scripts_modulo_8/leccion_2/leccion_2_scripts.php"); ?>
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
                                Herramientas y Técnicas de Automatización de Seguridad
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Las herramientas de seguridad automatizadas se integran como Quality Gates en la fase de CI para escanear el código, las dependencias y la infraestructura.
                            <br>
                            <h4>
                                1. SAST (Static Application Security Testing)
                            </h4>
                            Escaneo de Código Fuente (estático) sin ejecutar la aplicación. Busca fallos comunes como SQL Injection, Cross-Site Scripting (XSS) y errores de configuración en tiempo de compilación. Se ejecuta en la fase de CI.
                            <br>
                            <h4>
                                2. DAST (Dynamic Application Security Testing)
                            </h4>
                            Escaneo de la aplicación en un entorno en ejecución (dinámico), simulando ataques externos. Busca vulnerabilidades que solo se manifiestan en la ejecución. Se ejecuta en la fase de Staging/QA.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/mklRbQTpGos?si=qq1izuP2vZObbflx" 
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
                                3. Análisis de Dependencias
                            </h4>
                            Escaneo de bibliotecas y paquetes de terceros (ej. paquetes de Maven, NPM). Busca vulnerabilidades conocidas de código abierto (Zero-Day) listadas en bases de datos públicas (ej. CVEs). Crucial para la inmutabilidad (Módulo 6).
                            <br>
                            <h4>
                                4. Escaneo de Imágenes de Contenedores
                            </h4>
                            Escaneo de las Imágenes de Docker (Módulo 6.2) y sus capas para detectar software desactualizado o librerías con vulnerabilidades conocidas antes de que se desplieguen.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/-lYzkzZ_BBc?si=wR3rD1EtcWWDIeUu" 
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
                    <form id="validar_actividad" action="scripts_modulo_8/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="36">
                        <h3>1. ¿Qué tipo de prueba de seguridad escanea el Código Fuente (estático) sin necesidad de ejecutar la aplicación?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Escaneo de Logs</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) SAST (Static Application Security Testing)</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) DAST (Dynamic Testing)</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Qué tipo de prueba de seguridad escanea la aplicación en un entorno en ejecución (dinámico), simulando ataques externos?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Análisis de Dependencias</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) DAST (Dynamic Application Security Testing)</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) SAST</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es la función principal del Análisis de Dependencias en el pipeline de seguridad?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Buscar vulnerabilidades conocidas en bibliotecas y paquetes de terceros.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Probar la velocidad de la base de datos.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Revisar los permisos de usuario en la nube.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué escaneo es crucial realizar sobre las imágenes de Docker antes de que se desplieguen los contenedores?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) scaneo de la impresora.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Escaneo de Imágenes de Contenedores.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Escaneo del uso de CPU.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué buscan típicamente las herramientas SAST en el código fuente?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_5" value="a">a) Errores de diseño de interfaz gráfica.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) El tiempo que tarda el servidor en responder.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Vulnerabilidades como SQL Injection y XSS (Cross-Site Scripting).</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_8/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_8/validar_actividades/validar_actividades_leccion_2.js?v=1.0"></script>
</body>
</html>
