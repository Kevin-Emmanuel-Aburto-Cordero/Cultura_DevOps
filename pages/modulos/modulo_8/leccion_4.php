<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_8/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Gestión de Secretos y Hardening de Entornos</title>
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
                    <?php include("scripts_modulo_8/leccion_4/leccion_4_scripts.php"); ?>
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
                                Asegurando la Información Sensible en Producción
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La gestión de Secretos (claves API, contraseñas de bases de datos, tokens) y el Hardening (endurecimiento) de la infraestructura son críticos para proteger el entorno en Producción.
                            <br>
                            <h4>
                                Gestión de Secretos
                            </h4>
                            Los secretos nunca deben almacenarse en texto plano dentro del código fuente (Git) ni en las imágenes de contenedores. Se deben usar soluciones dedicadas de Secret Management (ej. HashiCorp Vault, AWS Secrets Manager, Secretos de Kubernetes). Estos sistemas inyectan el secreto solo en tiempo de ejecución.
                            <br>
                            <h4>
                                Principio de Mínimo Privilegio
                            </h4>
                            Todo usuario, servicio o componente solo debe tener los permisos mínimos necesarios para realizar su tarea. Esto limita el daño si una parte del sistema es comprometida.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/YxG8ag78XFw?si=lI59yefZdhR5CzqN" 
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
                                Hardening de Contenedores
                            </h4>
                            Las imágenes de contenedores (Módulo 6) deben construirse con el menor número de paquetes posibles (ej. Imágenes basadas en Alpine Linux). Los contenedores deben ejecutarse con usuarios no root para limitar la superficie de ataque.
                            <br>
                            <h4>
                                Respuesta a Incidentes de Seguridad
                            </h4>
                            El ciclo de feedback (Módulo 7.4) se aplica a la seguridad. Las alertas de vulnerabilidades o intrusiones deben activar planes de respuesta rápida que pueden incluir el aislamiento automático de nodos de K8s, la revocación inmediata de tokens o un roll-back forzado.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/BBMS-WgluOA?si=8F75Io6CoiTPkEKw" 
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
                    <form id="validar_actividad" action="scripts_modulo_8/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="38">
                        <h3>1. ¿Qué información crítica se considera un Secreto y nunca debe almacenarse en texto plano en Git?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) El nombre de la aplicación.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Contraseñas de bases de datos, claves API y tokens sensibles.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Archivos de configuración inofensivos.</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Cuál es la herramienta o práctica recomendada para almacenar y distribuir Secretos de forma segura, inyectándolos solo en tiempo de ejecución?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Comentarios de código.</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Una solución de Secret Management (ej. HashiCorp Vault).</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Archivos de texto en el escritorio.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Qué principio de seguridad limita el radio de acción de un atacante, dando a cada usuario o componente solo los permisos mínimos necesarios?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Principio de Mínimo Privilegio.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Principio de Gobernanza Abierta.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Principio de Máximo Acceso.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Qué práctica de Hardening (Endurecimiento) de contenedores ayuda a reducir la superficie de ataque?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) Incluir todas las librerías posibles en la imagen.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Almacenar secretos dentro de la imagen.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Construir imágenes con el mínimo número de paquetes y usar usuarios no root.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué debe activar el ciclo de feedback (Módulo 7) y el plan de seguridad ante una alerta de intrusión o vulnerabilidad crítica?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_5" value="a">a) El borrado manual de todos los logs.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Un plan de respuesta rápida que puede incluir el aislamiento o un roll-back forzado.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Una reunión para discutir el clima.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_8/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_8/validar_actividades/validar_actividades_leccion_4.js?v=1.0"></script>
</body>
</html>
