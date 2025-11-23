<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_1/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 5 - Más allá del ciclo de vida: DevSecOps</title>
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
            <?php include("scripts_modulo_1/leccion_5/leccion_5_scripts.php"); ?>
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
                    <h4 class="subtitulo">¿Qué es DevSecOps?</h4>
                    DevSecOps es la evolución natural de DevOps, un enfoque que combina desarrollo 
                    y operaciones para mejorar la colaboración y agilidad en la entrega de software. 
                    Sin embargo, DevSecOps va un paso más allá al integrar la seguridad en cada fase 
                    del ciclo de vida del desarrollo de software. 
                    <br>
                    En lugar de tratar la seguridad como una ocurrencia tardía, este enfoque garantiza
                    que las medidas de seguridad estén presentes desde el inicio del desarrollo hasta 
                    la implementación y más allá. <br>
                    <br>
                    DevSecOps no es simplemente la suma de desarrollo (Dev), operaciones (Ops) y 
                    seguridad (Sec). Es una metodología que cambia la mentalidad de los equipos para 
                    considerar la seguridad como una responsabilidad compartida por todos los 
                    involucrados en el ciclo de vida del software. En lugar de ser visto como un 
                    obstáculo o una capa adicional, la seguridad se convierte en un componente 
                    integral del desarrollo ágil, lo que permite a los equipos identificar y solucionar 
                    vulnerabilidades de manera proactiva. 
                    <br>
                    <h4 class="subtitulo">Principios clave de DevSecOps</h4>
                    <ul>
                        <li>Automatización de la seguridad: Uno de los pilares de DevSecOps es la 
                            automatización de tareas de seguridad. Esto incluye la integración de 
                            herramientas automatizadas para pruebas de seguridad, escaneo de 
                            vulnerabilidades, análisis de código y la implementación de políticas de 
                            seguridad. La automatización no solo acelera el proceso, sino que también 
                            garantiza la consistencia y la precisión.</li><br>
                        <li>Colaboración interdisciplinaria: DevSecOps fomenta una colaboración más 
                            estrecha entre los equipos de desarrollo, operaciones y seguridad. Esta 
                            sinergia asegura que los problemas de seguridad se aborden de manera 
                            eficiente y que las soluciones se implementen sin afectar negativamente 
                            al ciclo de vida del desarrollo.</li><br>
                        <li>Monitoreo continuo: En DevSecOps, el monitoreo de la seguridad es continuo, 
                            lo que permite detectar y responder a las amenazas en tiempo real. Este 
                            enfoque proactivo asegura que cualquier anomalía o vulnerabilidad se 
                            gestione de inmediato, reduciendo el riesgo de incidentes de seguridad.</li><br>
                        <li>Cultura de responsabilidad compartida: Todos los miembros del equipo, 
                            desde desarrolladores hasta administradores de sistemas, son responsables 
                            de la seguridad. Esto crea una cultura organizacional donde la seguridad 
                            es una prioridad y no una consideración de último minuto.</li><br>
                    </ul>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/zh-YEP7jO_s?si=MnPeC2ZYbqtb71qk" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
                    </div></div>
                </div>
            </div>
            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                    <div class="columna">
                    <h4 class="subtitulo">Beneficios de DevSecOps</h4>
                    <ul>
                        <li>Reducción de riesgos: Al integrar la seguridad desde el inicio, se minimizan 
                            los riesgos de vulnerabilidades en las etapas posteriores del desarrollo.</li><br>
                        <li>Mayor agilidad: La automatización de tareas de seguridad permite que los 
                            equipos mantengan la velocidad del desarrollo ágil sin comprometer la 
                            seguridad.</li><br>
                        <li>Costos reducidos: Identificar y resolver problemas de seguridad en las 
                            primeras etapas del desarrollo es más económico que hacerlo después de
                            que el software se haya desplegado.</li><br>
                        <li>Mejor calidad del software: La implementación continua de 
                            prácticas de seguridad resulta en un software más robusto y confiable.</li>
                    </ul>
                    Con el creciente número de ciberataques y la sofisticación de las amenazas, las 
                    empresas necesitan garantizar que su software no solo sea funcional, sino 
                    también seguro. <br>
                    DevSecOps aborda esta necesidad crítica al asegurar que la seguridad sea parte 
                    del ADN del desarrollo de software, permitiendo a las organizaciones mantenerse 
                    un paso adelante de las amenazas emergentes. Como resultado, el dominio de 
                    DevSecOps es cada vez más valorado en el mercado laboral, lo que convierte a los 
                    expertos en esta metodología en profesionales altamente demandados.
                    <br><br>
                    <h4 class="subtitulo">¿En qué consiste el trabajo de un Experto en DevSecOps?</h4>
                    El experto en DevSecOps es un perfil multidisciplinario que combina habilidades
                    en desarrollo de software, administración de sistemas y ciberseguridad. Su trabajo
                    se centra en:
                    <ul>
                        <li>Integración de seguridad en el pipeline de desarrollo: Garantiza que cada fase 
                            del ciclo de vida del desarrollo de software esté protegida. Esto incluye la 
                            automatización de pruebas de seguridad, la detección de vulnerabilidades en 
                            el código y la implementación de medidas preventivas.</li><br>
                        <li>Gestión de la configuración y la infraestructura segura: Administra y asegura 
                            la infraestructura sobre la que se ejecutan las aplicaciones, utilizando 
                            herramientas como Ansible, Terraform, y Kubernetes para automatizar y 
                            proteger la configuración.</li><br>
                        <li>Automatización y monitorización continua: Implementa herramientas de
                            automatización para asegurar la entrega continua de código seguro, así como 
                            soluciones de monitorización que detectan y responden a amenazas en 
                            tiempo real.</li><br>
                        <li>Colaboración y comunicación: Trabaja en estrecha colaboración con equipos 
                            de desarrollo y operaciones para fomentar una cultura de seguridad 
                            compartida, asegurando que todos los miembros del equipo comprendan y cumplan 
                            con las mejores prácticas de seguridad.</li>
                    </ul><br>
                    <img class="imagen_ejemplo" src="../../../assets/img/modulo_1/DevSecOps.png" alt="Ejemplo">
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
                    <form id="validar_actividad" action="scripts_modulo_1/leccion_5/registrar_actividad_leccion_5.php" method="post">
                        <input type="hidden" name="idActividad" value="5">
                        <h3>1. ¿Por qué es más económico identificar y resolver los problemas de seguridad en las primeras etapas del desarrollo?</h3>
                        <label><input type="radio" name="pregunta_1" value="a">a) Porque el software aún no se ha desplegado.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Porque se pueden usar herramientas de seguridad más avanzadas.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Porque no es necesario involucrar al equipo de ciberseguridad.</label><br>

                        <h3>2. ¿Qué combina un experto en DevSecOps para realizar su trabajo de manera efectiva?</h3>
                        <label><input type="radio" name="pregunta_2" value="a">a) Habilidades de desarrollo de software, administración de sistemas y ciberseguridad.</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Habilidades de desarrollo, marketing y gestión de proyectos.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Habilidades de diseño UX/UI, análisis de datos y administración de bases de datos.</label><br>

                        <h3>3. ¿Qué permite que los equipos de desarrollo ágil mantengan su velocidad sin comprometer la seguridad?</h3>
                        <label><input type="radio" name="pregunta_3" value="a">a) La reducción de la agilidad para enfocarse en tareas de seguridad.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) La automatización de las tareas de seguridad.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) La contratación de más personal para las pruebas de seguridad manuales.</label><br>

                        <h3>4. ¿Qué es lo que garantiza DevSecOps al integrar la seguridad en cada fase del ciclo de vida del desarrollo de software?</h3>
                        <label><input type="radio" name="pregunta_4" value="a">a) Que la seguridad se considere solo en las etapas finales del desarrollo.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Que las medidas de seguridad estén presentes desde el inicio del desarrollo hasta la implementación y más allá.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Que la seguridad sea una consideración exclusiva del equipo de operaciones.</label><br>

                        <h3>5. ¿Qué principio de DevSecOps fomenta una colaboración más estrecha entre los equipos de desarrollo, operaciones y seguridad?</h3>
                        <label><input type="radio" name="pregunta_5" value="a">a) Monitoreo continuo.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Automatización de la seguridad.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Colaboración interdisciplinaria.</label><br>

                        <h3>6. El texto menciona que en DevSecOps la seguridad es una responsabilidad compartida por todos. ¿Qué implica esto para la cultura organizacional?</h3>
                        <label><input type="radio" name="pregunta_6" value="a">a) Que solo el equipo de seguridad es responsable de la protección.</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) Que la seguridad se convierte en un obstáculo para la agilidad.</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) Que la seguridad es una prioridad y no una consideración de último minuto.</label><br>
                        </div></div>
                        <button type="submit" class="botones" name="accion" value="calificar">Enviar Respuestas</button><br>
                        <button type="submit" class="botones" name="accion" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificar: <?php include('scripts_modulo_1/leccion_5/mostrar_calificacion_leccion_5.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividad 5 de 5
        </div>
    </div>
    <div id="mensajeError" style="color: white;"></div>
    <script src="../../../assets/js/modulo_1/validar_actividades_leccion_5.js?v=2.0"></script>
    <script src="../../../assets/js/modulo_1/verificar_actividad_terminada_leccion_5.js?v=2.0"></script>
</body>
</html>
