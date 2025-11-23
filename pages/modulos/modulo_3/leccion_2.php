<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_3/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - El Servidor de CI y la Automatización del Build</title>
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
                    <?php include("scripts_modulo_3/leccion_2/leccion_2_scripts.php"); ?>
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
                                El Corazón del Pipeline: La Construcción Automática
                            </h1>
                            <h4>
                                Definición del Servidor CI
                            </h4>
                            El Servidor de Integración Continua (ej. Jenkins, GitLab CI, GitHub 
                            Actions) es el motor que impulsa la automatización. Su función primordial 
                            es actuar como un agente supervisor que monitorea el repositorio de 
                            código. <br>
                            Cuando detecta un evento (un push o un PR), inicia un trabajo (el 
                            job) que ejecuta el pipeline de forma predecible y estandarizada. 
                            Este servidor se ejecuta en un ambiente neutral que no está contaminado con 
                            librerías o configuraciones locales de los desarrolladores.
                            <br>
                            <br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/servidor_ci.webp" alt="Servidor CI">
                            <h4>
                                El proceso de Build Automatizado
                            </h4>
                            <ol>
                                <li>Checkout y Limpieza: El servidor descarga el código fuente y utiliza un Entorno de Ejecución Limpio (a menudo un contenedor Docker o una máquina virtual desechable) para asegurar que el proceso no esté sesgado por configuraciones anteriores. </li><br>
                                <li>Resolución de Dependencias: El script de build descarga e instala todas las librerías y dependencias externas requeridas por el proyecto (ej. módulos npm, artefactos Maven). Esto garantiza que todas las dependencias sean las correctas y estén disponibles. </li><br>
                                <li>Compilación y Empaquetamiento: Se ejecuta el comando de build (ej. mvn install, webpack build) que transforma el código fuente de alto nivel en el paquete binario o ejecutable. La automatización aquí es vital, pues elimina la variabilidad humana y asegura que el proceso de build sea reproducible al 100%.</li>
                            </ol>
                            <br>
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/N-ldeZTyBKg?si=bTUZihiNHgJP77Jh" 
                                title="YouTube video player" 
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
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
                                Infraestructura como Código (IaC) en CI
                            </h4>
                            Los pipelines de CI modernos son definidos como código declarativo <br>
                            (ej. Jenkinsfile, .gitlab-ci.yml). <br>
                            Este archivo reside junto al código fuente en el repositorio. Esta práctica,
                            conocida como Pipeline como Código, permite que el pipeline sea 
                            versionado, revisado y auditable, al igual que el código de la aplicación, 
                            asegurando que la infraestructura de build sea tan disciplinada como el 
                            propio código.
                            <br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/infraestructura_como_codigo.webp" alt="Infraestructura_como Codigo">
                            <br><br>
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/4OzyNb6owXY?si=vTwvHo9MZ2Suiiwp" 
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
                    <form id="validar_actividad" action="scripts_modulo_3/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="13">
                        <h3>1. ¿Cuál es el evento principal que activa automáticamente el pipeline de Integración Continua (CI) en el servidor?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) La ejecución de pruebas de rendimiento por el equipo de QA.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Una aprobación manual del líder de proyecto.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Un push o commit a la rama de integración en el repositorio.</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Por qué el servidor de CI utiliza un entorno de ejecución limpio y estandarizado (como un contenedor Docker) para la construcción?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Para permitir que el código solo se compile si está en lenguaje Python.</label> <br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Para garantizar la reproducibilidad y eliminar las inconsistencias locales del desarrollador.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Para reducir la cantidad de memoria RAM utilizada por el servidor.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Qué problema común entre desarrolladores busca eliminar la automatización del build en el servidor de CI?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) La falta de documentación del proyecto.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) La excusa: 'funciona en mi máquina'.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) El exceso de comentarios en el código.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué práctica implica definir la secuencia de ejecución del pipeline de CI dentro de un archivo versionado (ej. Jenkinsfile o .gitlab-ci.yml) que reside junto al código fuente?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) Compilación Distribuida.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Pipeline como Código.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Artefacto Inmutable.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. En la fase de build, ¿cuál es la función principal de herramientas como Maven, Gradle o Webpack?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_5" value="a">a) Realizar la auditoría de seguridad y penetración.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Transformar el código fuente en un paquete binario ejecutable (compilación y empaquetamiento).</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Monitorear el rendimiento de la aplicación en producción.</label><br>
                        </div>
                        <div class="columna">
                        <h3>6. ¿Cuál de los siguientes no es un Servidor de Integración Continua (CIS) utilizado comúnmente en la industria DevOps?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) Jenkins</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) GitLab CI</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) Git</label><br>
                        </div>
                        <div class="columna">
                        <h3>7. ¿Cuál es el primer paso que realiza el servidor de CI después de detectar un nuevo cambio en el repositorio y antes de la compilación?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_7" value="a">a) Realizar un roll-back al último commit exitoso.</label><br>
                        <label><input type="radio" name="pregunta_7" value="b">b) Ejecutar las pruebas de regresión automáticas.</label><br>
                        <label><input type="radio" name="pregunta_7" value="c">c) Descargar el código fuente (checkout).</label><br>
                        </div>
                        <div class="columna">
                        <h3>8. ¿Qué se genera y se etiqueta si el build es exitoso y el código es apto para pasar a la ejecución de pruebas?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_8" value="a">a) Un Artefacto (paquete binario).</label><br>
                        <label><input type="radio" name="pregunta_8" value="b">b) Una nueva especificación de requisitos.</label><br>
                        <label><input type="radio" name="pregunta_8" value="c">c) Un firewall virtual de producción.</label><br>
                        </div>
                        <div class="columna">
                        <h3>9. ¿Qué término describe el proceso de garantizar que el código se pueda compilar y ejecutar de manera consistente sin depender de la configuración local de un desarrollador?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_9" value="a">a) Despliegue Canary.</label><br>
                        <label><input type="radio" name="pregunta_9" value="b">b) Reproducibilidad.</label><br>
                        <label><input type="radio" name="pregunta_9" value="c">c) Idempotencia.</label><br>
                        </div>
                        <div class="columna">
                        <h3>10. Si la compilación (build) falla en el servidor de CI, ¿cuál es la consecuencia inmediata y obligatoria para el pipeline?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_10" value="a">a) El servidor intenta automáticamente la compilación cinco veces más antes de detenerse.</label><br>
                        <label><input type="radio" name="pregunta_10" value="b">b) El pipeline continúa con la ejecución de las pruebas unitarias para identificar el error.</label><br>
                        <label><input type="radio" name="pregunta_10" value="c">c) El pipeline se detiene y notifica al equipo, sin pasar a la ejecución de pruebas.</label><br>
                        </div>

                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_3/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 2 de 5
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_3/validar_actividades/validar_actividades_leccion_2.js?v=2.0"></script>
</body>
</html>
