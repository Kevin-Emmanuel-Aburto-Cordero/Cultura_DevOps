<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_8/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - Gobernanza y Conformidad como Código (GaaC)</title>
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
                    <?php include("scripts_modulo_8/leccion_3/leccion_3_scripts.php"); ?>
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
                                Asegurando las Políticas y Regulaciones
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Gobernanza y la Conformidad se refieren al cumplimiento de políticas internas, estándares de la industria (ej. ISO 27001) y regulaciones externas (ej. GDPR, HIPAA, SOX).
                            <br>
                            <h4>
                                Gobernanza como Código (GaaC)
                            </h4>
                            Es la práctica de definir las reglas de negocio, los permisos y las políticas de seguridad en un formato de código versionado (ej. Reglas en Terraform, políticas de K8s, archivos de configuración). Esto permite aplicar las políticas de manera consistente y auditable.
                            <br>
                            <h4>
                                Control de Acceso (RBAC)
                            </h4>
                            Los permisos para los usuarios y sistemas se definen mediante Control de Acceso Basado en Roles (Role-Based Access Control - RBAC). En K8s (Módulo 6.3), RBAC se define en manifiestos que limitan qué acciones puede realizar un usuario/servicio en un Namespace.
                            <img src="../../../assets/img/modulo_8/gobernanza-datos-post-es.jpg" alt="Gobernanza de datos" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Auditoría y Trazabilidad
                            </h4>
                            La automatización de CI/CD y el uso de Observabilidad (Módulo 7) crean un rastro de auditoría completo. Cada cambio, desde el commit de código hasta el despliegue final, está documentado y versionado, facilitando el cumplimiento regulatorio.
                            <br>
                            <h4>
                                Separación de Tareas (Separation of Duties)
                            </h4>
                            Una política de gobernanza fundamental que asegura que la persona que escribe el código no es la misma que lo aprueba para producción. En DevOps, esto se automatiza con aprobaciones manuales o automáticas solo después de que las pruebas de seguridad y funcionales han pasado el Quality Gate.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/viPCy7p95Hw?si=gLrs-PyO6FnN5vd4" 
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
                    <form id="validar_actividad" action="scripts_modulo_8/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="37">
                        <h3>1. ¿Qué práctica permite definir las reglas de negocio, los permisos y las políticas de seguridad en un formato de código versionado?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Gobernanza como Código (GaaC)</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Infraestructura Inmutable</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Análisis DAST</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Qué concepto asegura el cumplimiento de regulaciones externas como GDPR, HIPAA o SOX?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Observabilidad</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Desarrollo Ágil</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Conformidad (Compliance)</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Qué significa la sigla RBAC?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Registro de Bases de Datos Abiertas</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) Revisión Basada en Código</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Control de Acceso Basado en Roles (Role-Based Access Control).</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿Cuál es la política de gobernanza fundamental que busca asegurar que la persona que escribe el código no sea la misma que lo aprueba para producción?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) Principio 'Sin Culpa'.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Principio de Mínimo Privilegio.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Separación de Tareas (Separation of Duties).</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Qué crea el uso de la Gobernanza como Código y la automatización de CI/CD que es esencial para el cumplimiento regulatorio?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_5" value="a">a) Un aumento en el Alert Fatigue.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Más features nuevas para el usuario.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) Un rastro de auditoría completo y la Trazabilidad de cada cambio.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_8/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 3 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_8/validar_actividades/validar_actividades_leccion_3.js?v=1.0"></script>
</body>
</html>
