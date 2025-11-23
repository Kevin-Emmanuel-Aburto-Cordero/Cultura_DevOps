<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_6/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Orquestación y el Aislamiento de Entornos</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_6_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 6</button>
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
                    <?php include("scripts_modulo_6/leccion_4/leccion_4_scripts.php"); ?>
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
                                Cómo K8s Logra la Paridad y la Eficiencia
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Kubernetes utiliza el concepto de Namespaces y su gestión de recursos para proporcionar el aislamiento lógico necesario para mantener múltiples entornos (Dev, QA, Staging, Prod) en un único clúster compartido.
                            <br>
                            <h4>
                                Namespaces (Espacios de Nombres)
                            </h4>
                            Un Namespace es una partición virtual dentro de un clúster K8s que proporciona un ámbito para los nombres de los recursos. Esto significa que dos equipos pueden nombrar un servicio como database en sus respectivos namespaces sin conflicto. Permite el aislamiento lógico y la asignación de permisos de acceso.
                            <img src="../../../assets/img/modulo_6/Kubernetes.png" alt="Kubernetes" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Despliegues Declarativos
                            </h4>
                            Los archivos de manifiesto YAML (el código de orquestación) se versionan en Git (IaC). El pipeline de CD simplemente aplica estos manifiestos al namespace correspondiente (ej. el Deployment v1.2.3 al namespace staging), garantizando que la orquestación también sea idempotente.
                            <br>
                            <h4>
                                Integración con IaC
                            </h4>
                            Kubernetes funciona como una herramienta de IaC declarativa. El código de Terraform (Módulo 5.4) puede usarse para aprovisionar el Clúster K8s, mientras que los manifiestos YAML de K8s se usan para gestionar las aplicaciones dentro de ese clúster, creando un ecosistema de infraestructura totalmente definido por código.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/PrDRxBqVSG0?si=QVGU8j8YDRVupGN8" 
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
                    <form id="validar_actividad" action="scripts_modulo_6/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="30">
                        <h3>1. ¿Cuál es el concepto de Kubernetes (K8s) que permite crear una partición virtual dentro de un clúster para aislar recursos lógicamente?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Namespace (Espacio de Nombres)</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Deployment</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Pod</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Qué permite que varios equipos compartan un único clúster K8s manteniendo sus entornos (ej. Dev, Staging) separados?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) La utilización del comando docker build.</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) El uso de Namespaces separados para cada entorno.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) La creación de múltiples máquinas virtuales.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Qué principio de IaC se aplica a los manifiestos YAML de Kubernetes para asegurar que el estado del clúster sea consistente?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Modelo Imperativo</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Gestión de Configuración (Configuration Management).</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Inmutabilidad de la Infraestructura.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Cómo interactúan las herramientas de Aprovisionamiento (ej. Terraform) y la Orquestación (K8s) según la Lección 5.4?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) K8s se usa para crear las redes y las VMs de la nube.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Terraform se usa para instalar software dentro de los Pods.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Terraform aprovisiona el Clúster K8s (el conjunto de nodos), y K8s gestiona las aplicaciones dentro de él.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué beneficio de aislamiento lógico proporcionan los Namespaces en términos de seguridad y permisos?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_5" value="a">a) Permiten que cualquier usuario acceda a todos los recursos del clúster.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Permiten la asignación de permisos de acceso y límites de recursos específicos por entorno/equipo.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Aumentan la necesidad de Feature Toggles.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_6/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 4 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_6/validar_actividades/validar_actividades_leccion_4.js?v=1.0"></script>
</body>
</html>
