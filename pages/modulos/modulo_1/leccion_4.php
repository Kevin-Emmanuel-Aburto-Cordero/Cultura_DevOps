<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_1/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Herramientas fundamentales</title>
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
            <?php include("scripts_modulo_1/leccion_4/leccion_4_scripts.php"); ?>
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
                    <h4 class="subtitulo">Control de Versiones</h4>
                    El control de versiones es una práctica fundamental de DevOps, ya que permite a 
                    los equipos colaborar en el código de forma segura y realizar un seguimiento de 
                    los cambios a lo largo del tiempo. 
                    <ul>
                        <li>Git: Es un sistema de control de versiones distribuido que facilita la 
                            colaboración entre desarrolladores. Es la base de plataformas populares 
                            para la gestión de repositorios de código.</li><br>
                        <li>GitHub, GitLab, Bitbucket: Plataformas basadas en Git que ofrecen 
                            repositorios de código, herramientas para la colaboración, revisión 
                            de código y, a menudo, funcionalidades integradas de CI/CD. </li>
                    </ul>
                    <br>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/8HSjmgeJxqg?si=PLp_p4fvvPUt2Vuc" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
                    <h4 class="subtitulo">Integración y entrega continuas (CI/CD)</h4>
                    El pipeline de CI/CD automatiza el flujo de trabajo de desarrollo, desde la compilación y prueba del código hasta el despliegue del software. 
                    <ul>
                        <li>Jenkins: Un servidor de automatización de código abierto que permite crear 
                            pipelines de CI/CD flexibles y personalizables con una gran cantidad de 
                            plugins.</li><br>
                        <li>GitLab CI/CD: Una herramienta integrada en GitLab que permite a los equipos 
                             automatizar sus pipelines directamente desde la plataforma de control de 
                             versiones.</li><br>
                        <li>CircleCI: Una herramienta de CI/CD basada en la nube que permite 
                            automatizar los pipelines de forma rápida y sencilla.</li>
                        <li>GitHub Actions: Permite la automatización del flujo de trabajo directamente 
                            desde los repositorios de GitHub. </li>
                    </ul>
                    <h4 class="subtitulo">Contenerización</h4>
                    La contenedorización empaqueta el código y sus dependencias en un entorno
                    aislado, lo que garantiza la coherencia en todos los entornos.
                    <ul>
                        <li>Docker: Permite crear, gestionar y ejecutar contenedores de forma eficiente. 
                            Es una herramienta clave para asegurar la portabilidad de las aplicaciones.</li><br>
                        <li>Kubernetes: Un orquestador de contenedores de código abierto que 
                            automatiza el despliegue, escalado y gestión de aplicaciones en contenedores.</li><br>
                    </ul>
                    </div></div>
                </div>
            </div>
            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                    <div class="columna">
                    <h4 class="subtitulo">Gestión de la configuración e Infraestructura como Código (IaC)</h4>
                    Estas herramientas permiten automatizar el aprovisionamiento y la gestión de la 
                    infraestructura, eliminando las configuraciones manuales propensas a errores. 
                    <ul>
                        <li>Ansible: Una herramienta simple y sin agentes que utiliza archivos YAML 
                            para automatizar la gestión de la configuración y el aprovisionamiento.</li><br>
                        <li>Terraform: Una herramienta de IaC que permite aprovisionar y gestionar 
                            infraestructura en múltiples proveedores de nube y locales.</li><br>
                        <li>Puppet y Chef: Herramientas que utilizan un enfoque declarativo para la 
                            gestión de la configuración en entornos a gran escala. </li><br>
                    </ul>
                    <br>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/W9SPwKkFMOQ?si=ZrMmvsA1KR2JAT6a" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
                    <h4 class="subtitulo">Monitoreo y retroalimentación</h4>
                    Estas herramientas proporcionan información continua sobre el rendimiento y el
                    estado de las aplicaciones y la infraestructura.
                    <ul>
                        <li>Prometheus: Un sistema de monitoreo y alertas de código abierto muy
                            popular en entornos nativos de la nube.</li><br>
                        <li>Grafana: Una herramienta de visualización de datos que se utiliza a menudo 
                            junto con Prometheus para crear paneles dinámicos y personalizables.</li><br>
                        <li>ELK Stack (Elasticsearch, Logstash y Kibana): Una suite de herramientas para 
                            la gestión de logs que permite analizar datos de registro en tiempo real.</li> <br>
                        <li>Zabbix: Una solución de monitoreo de código abierto para infraestructura y
                            componentes de software. </li><br>
                    </ul>
                    <h4 class="subtitulo">Herramientas de pruebas</h4>
                    Automatizan las pruebas para asegurar la calidad del código a lo largo del pipeline de CI/CD. 
                    <ul>
                        <li>Selenium: Un framework de código abierto para automatizar pruebas de 
                            navegadores web.</li><br>
                        <li>Junit/Nunit: Frameworks de pruebas para código Java y .NET, respectivamente.</li>
                    </ul>
                    <h4 class="subtitulo">Colaboración y comunicación</h4>

                    Facilitan la comunicación y la gestión de proyectos entre los equipos de desarrollo
                     y operaciones.
                    <ul>
                        <li>Slack y Microsoft Teams: Plataformas de comunicación que permiten a los
                            equipos coordinar y colaborar en tiempo real.</li><br>
                        <li>Jira: Una herramienta de seguimiento de problemas y gestión de proyectos
                            que ayuda a organizar las tareas del ciclo de vida del software. </li>
                    </ul>
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
                    <form id="validar_actividad" action="scripts_modulo_1/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <input type="hidden" name="idActividad" value="4">
                        <h3>1. ¿Cuál de las siguientes herramientas se utiliza principalmente para el control de versiones en DevOps?</h3>
                        <label><input type="radio" name="pregunta_1" value="a">a) Jenkins</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Git</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Docker</label><br>

                        <h3>2. ¿Qué herramienta es un orquestador de contenedores que automatiza el despliegue y la gestión de aplicaciones?</h3>
                        <label><input type="radio" name="pregunta_2" value="a">a) Kubernetes</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Ansible</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Terraform</label><br>

                        <h3>3. Para el aprovisionamiento y gestión de infraestructura como código (IaC), ¿cuál de estas opciones es la más adecuada para trabajar con múltiples proveedores de nube?</h3>
                        <label><input type="radio" name="pregunta_3" value="a">a) GitLab CI/CD</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Prometheus</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Terraform</label><br>

                        <h3>4. ¿Qué tipo de tarea realiza la herramienta Jenkins en el ciclo de vida de DevOps?</h3>
                        <label><input type="radio" name="pregunta_4" value="a">a) Monitoreo y retroalimentación</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Gestión de configuración</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Integración y entrega continuas (CI/CD)</label><br>

                        <h3>5. Si un equipo necesita empaquetar una aplicación y sus dependencias en un entorno aislado y portable, ¿qué herramienta de contenedorización debería usar?</h3>
                        <label><input type="radio" name="pregunta_5" value="a">a) Docker</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Ansible</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Selenium</label><br>

                        <h3>6. ¿Cuál es la función principal de la herramienta Prometheus en un entorno DevOps?</h3>
                        <label><input type="radio" name="pregunta_6" value="a">a) Gestionar el control de versiones</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) Monitorear el rendimiento y generar alertas</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) Automatizar la gestión de configuración</label><br>

                        <h3>7. ¿Qué herramienta de visualización de datos se utiliza comúnmente con Prometheus para crear paneles de control?</h3>
                        <label><input type="radio" name="pregunta_7" value="a">a) Jira</label><br>
                        <label><input type="radio" name="pregunta_7" value="b">b) Grafana</label><br>
                        <label><input type="radio" name="pregunta_7" value="c">c) Docker</label><br>

                        <h3>8. Para la gestión de logs en tiempo real, ¿cuál de las siguientes opciones es un stack de herramientas adecuado?</h3>
                        <label><input type="radio" name="pregunta_8" value="a">a) Git, Jenkins y Docker</label><br>
                        <label><input type="radio" name="pregunta_8" value="b">b) ELK Stack</label><br>
                        <label><input type="radio" name="pregunta_8" value="c">c) Ansible, Puppet y Chef</label><br>

                        <h3>9. ¿Qué herramienta se usa para la automatización de pruebas en navegadores web?</h3>
                        <label><input type="radio" name="pregunta_9" value="a">a) Ansible</label><br>
                        <label><input type="radio" name="pregunta_9" value="b">b) Selenium</label><br>
                        <label><input type="radio" name="pregunta_9" value="c">c) Kubernetes</label><br>

                        <h3>10. Si un equipo necesita una plataforma de comunicación para coordinar el trabajo en tiempo real, ¿cuál de estas herramientas se menciona como una opción?</h3>
                        <label><input type="radio" name="pregunta_10" value="a">a) Terraform</label><br>
                        <label><input type="radio" name="pregunta_10" value="b">b) Jira</label><br>
                        <label><input type="radio" name="pregunta_10" value="c">c) Slack</label><br>
                        </div></div>
                        <button type="submit" class="botones" name="accion" value="calificar">Enviar Respuestas</button><br>
                        <button type="submit" class="botones" name="accion" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion : <?php include('scripts_modulo_1/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividad 4 de 5
        </div>
    </div>
    <div id="mensajeError" style="color: white;"></div>
    <script src="../../../assets/js/modulo_1/validar_actividades_leccion_4.js?v=2.0"></script>
    <script src="../../../assets/js/modulo_1/verificar_actividad_terminada_leccion_4.js?v=2.0"></script>
</body>
</html>