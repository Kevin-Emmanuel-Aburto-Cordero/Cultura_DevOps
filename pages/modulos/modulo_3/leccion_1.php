<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_3/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - Definición y Principio del Commit Frecuente</title>
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
                    <?php include("scripts_modulo_3/leccion_1/leccion_1_scripts.php"); ?>
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
                                Introducción a CI y la Disciplina de la Integración
                            </h1>
                            <h4>
                                Concepto Central y Fundamento Filosófico
                            </h4>
                            La Integración Continua (CI) es la columna vertebral de la metodología 
                            DevOps y el pilar que sostiene la Entrega Continua (CD). <br>
                            No se trata meramente de usar un servidor automatizado, sino de un 
                            cambio de mentalidad radical: la disciplina de no trabajar nunca solo. <br>
                            <br>
                            La CI exige que cada desarrollador fusione sus cambios de código en la 
                            rama principal compartida al menos una vez al día, y en un escenario 
                            ideal, varias veces por hora si el trabajo se divide en lotes muy pequeños. <br>
                            <br>
                            El propósito principal es reducir el "diámetro de la integración", 
                            manteniendo la divergencia del código entre desarrolladores lo más 
                            pequeña posible. <br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/Integracion-continua.png" alt="Integracion Continua">
                            <br>
                            <h4>
                                La Necesidad del Commit Temprano
                            </h4>
                            Los proyectos de software tradicionalmente sufrían el "Infierno de la 
                            Fusión" (Merge Hell), donde el código se integraba después de semanas o 
                            meses de trabajo aislado. Esto generaba conflictos masivos, regresiones y 
                            un alto costo emocional para los equipos. Al integrar código en 
                            incrementos diminutos, cualquier conflicto o incompatibilidad se detecta 
                            inmediatamente, cuando el cambio está fresco en la memoria del 
                            desarrollador. El uso de ramas de corta duración (short-lived branches) es 
                            fundamental; estas ramas no deben durar más de unas pocas horas antes 
                            de ser fusionadas de vuelta a la rama principal (ej. main o trunk).
                            <br><br>
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/SneYIlmi86U?si=SKBig08GM4KVypka" 
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
                                El Rol de Git y el Pull Request
                            </h4>
                            El proceso se centraliza en Git y el Pull Request (PR). El desarrollador no 
                            solo envía el código, sino que también inicia el proceso formal de revisión 
                            y validación. <br>
                            Un PR bien definido activa automáticamente el pipeline de CI en el 
                            servidor, convirtiéndose en el punto de entrada de la calidad. Este flujo 
                            garantiza que el código de la rama principal sea siempre "saludable" y esté 
                            listo para desplegarse (always deployable). Si el commit rompe la 
                            compilación, el desarrollador responsable sabe que debe revertir o 
                            corregir el código en minutos, no en días.
                            <br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/pull-request.webp" alt="Pull Request">
                            <br>
                            <br>
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/exttktwEmcs?si=k-CcdDsULswnJoJS" 
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

                    <h2>Actividad: Une los conceptos con su definición</h2>
                    <form id="actividad" action="scripts_modulo_3/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="12">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Infierno de la Fusión (Merge Hell)</p>
                                <p>2. Commit Frecuente</p>
                                <p>3. Rama Principal (Mainline)</p>
                                <p>4. Ramas de Corta Duración</p>
                                <p>5. Objetivo del Desarrollador</p>
                                <p>6. Reducción de Conflictos</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El riesgo de que el código roto se propague al pipeline de CI.</option>
                                    <option value="b">b) Rama de trabajo que se fusiona rápidamente, idealmente en horas.</option>
                                    <option value="c">c) Problema de integración complejo que resulta de trabajar aislado por mucho tiempo.</option>
                                    <option value="d">d) El resultado de reducir el tamaño de las diferencias de código (diffs) entre integraciones.</option>
                                    <option value="e">e) La acción de enviar cambios de código al repositorio compartido varias veces al día.</option>
                                    <option value="f">f) El lugar donde el código debe estar siempre en un estado "saludable" y desplegable.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El riesgo de que el código roto se propague al pipeline de CI.</option>
                                    <option value="b">b) Rama de trabajo que se fusiona rápidamente, idealmente en horas.</option>
                                    <option value="c">c) Problema de integración complejo que resulta de trabajar aislado por mucho tiempo.</option>
                                    <option value="d">d) El resultado de reducir el tamaño de las diferencias de código (diffs) entre integraciones.</option>
                                    <option value="e">e) La acción de enviar cambios de código al repositorio compartido varias veces al día.</option>
                                    <option value="f">f) El lugar donde el código debe estar siempre en un estado "saludable" y desplegable.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El riesgo de que el código roto se propague al pipeline de CI.</option>
                                    <option value="b">b) Rama de trabajo que se fusiona rápidamente, idealmente en horas.</option>
                                    <option value="c">c) Problema de integración complejo que resulta de trabajar aislado por mucho tiempo.</option>
                                    <option value="d">d) El resultado de reducir el tamaño de las diferencias de código (diffs) entre integraciones.</option>
                                    <option value="e">e) La acción de enviar cambios de código al repositorio compartido varias veces al día.</option>
                                    <option value="f">f) El lugar donde el código debe estar siempre en un estado "saludable" y desplegable.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El riesgo de que el código roto se propague al pipeline de CI.</option>
                                    <option value="b">b) Rama de trabajo que se fusiona rápidamente, idealmente en horas.</option>
                                    <option value="c">c) Problema de integración complejo que resulta de trabajar aislado por mucho tiempo.</option>
                                    <option value="d">d) El resultado de reducir el tamaño de las diferencias de código (diffs) entre integraciones.</option>
                                    <option value="e">e) La acción de enviar cambios de código al repositorio compartido varias veces al día.</option>
                                    <option value="f">f) El lugar donde el código debe estar siempre en un estado "saludable" y desplegable.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El riesgo de que el código roto se propague al pipeline de CI.</option>
                                    <option value="b">b) Rama de trabajo que se fusiona rápidamente, idealmente en horas.</option>
                                    <option value="c">c) Problema de integración complejo que resulta de trabajar aislado por mucho tiempo.</option>
                                    <option value="d">d) El resultado de reducir el tamaño de las diferencias de código (diffs) entre integraciones.</option>
                                    <option value="e">e) La acción de enviar cambios de código al repositorio compartido varias veces al día.</option>
                                    <option value="f">f) El lugar donde el código debe estar siempre en un estado "saludable" y desplegable.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El riesgo de que el código roto se propague al pipeline de CI.</option>
                                    <option value="b">b) Rama de trabajo que se fusiona rápidamente, idealmente en horas.</option>
                                    <option value="c">c) Problema de integración complejo que resulta de trabajar aislado por mucho tiempo.</option>
                                    <option value="d">d) El resultado de reducir el tamaño de las diferencias de código (diffs) entre integraciones.</option>
                                    <option value="e">e) La acción de enviar cambios de código al repositorio compartido varias veces al día.</option>
                                    <option value="f">f) El lugar donde el código debe estar siempre en un estado "saludable" y desplegable.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_3/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 5
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_3/validar_actividades/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>
