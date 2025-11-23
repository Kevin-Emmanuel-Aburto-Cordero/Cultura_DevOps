<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_2/leccion_1.css?v=2.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 5 - Revisiones de código y pull requests</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_2_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 2</button>
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
                    <?php include("scripts_modulo_2/leccion_5/leccion_5_scripts.php"); ?>
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
                        El Proceso de Revisión de Código
                    </h1>
                    <h4>Revisión de Código (Code Review)</h4>
                    Es el proceso por el cual un desarrollador pide a uno o más colegas que inspeccionen el código que ha escrito antes de fusionarlo en la rama principal. Es un pilar de la colaboración moderna y asegura: Calidad, Detección de Bugs y Transferencia de Conocimiento.
                    <br><br>
                    Beneficios Clave de la Revisión:
                    <ol>
                        <li>Mejora la calidad: Se detectan errores lógicos, bugs y deuda técnica.</li>
                        <li>Difunde conocimiento: El revisor aprende sobre el nuevo código.</li>
                        <li>Consistencia: Asegura que se sigan los estándares y las buenas prácticas del proyecto.</li>
                    </ol>
                    <h4>El Rol del Desarrollador (Creador de la PR)</h4>
                    El desarrollador es responsable de hacer la PR clara y fácil de revisar:
                    <ol>
                        <li>Título y Descripción Claros: Explicar el problema que resuelve y cómo lo hace.</li>
                        <li>PRs Pequeñas: Es más fácil revisar 50 líneas de código que 500.</li>
                        <li>Responder a Comentarios: Atender las dudas o sugerencias del revisor.</li>
                    </ol>
                    <h4>El Rol del Revisor</h4>
                    El revisor debe ser constructivo y enfocado en el código, no en la persona:
                    <ol>
                        <li>Verificar Lógica: ¿El código cumple con los requisitos?</li>
                        <li>Revisar Estándares: ¿Sigue las guías de estilo?</li>
                        <li>Probar el Código: Verificar que el código funcione localmente.</li>
                    </ol>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/O4LehwVcVTo?si=bu9fBJpV6uiBcoPi" 
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
                    <h1 class="subtitulo">
                        Gestión de Pull Requests (PR)
                    </h1>
                    <h4>Pull Request (PR) o Merge Request (MR)</h4>
                    Es una solicitud formal a los administradores del repositorio para fusionar el código de una rama secundaria (ej: feature/login) en una rama principal (ej: main).
                    <br><br>
                    <h4>¿Por qué se llama "Pull" Request?</h4>
                    Porque le estás pidiendo a los mantenedores del repositorio que traigan (pull) tu rama a la suya.
                    <br><br>
                    El Flujo de la PR:
                    <ol>
                        <li>Desarrollador termina el trabajo y hace git push de su rama.</li>
                        <li>Abre una PR en GitHub/GitLab.</li>
                        <li>Revisa automáticamente (checks) pasan (pruebas, linters).</li>
                        <li>Revisores comentan, sugieren cambios o aprueban.</li>
                        <li>Desarrollador puede hacer más commits a la rama para atender comentarios.</li>
                        <li>Una vez aprobada, la PR es fusionada (merged) a main y la rama de la feature puede ser eliminada.</li>
                    </ol>
                    <h4>Rebase vs. Merge (Avanzado)</h4>
                    <ul>
                        <li>Merge: Mantiene un historial claro de fusiones con merge commits.</li>
                        <li>Rebase: Mueve los commits de una rama a la cima de otra, creando una historia lineal y limpia. Se usa a menudo para "limpiar" una rama antes de hacer un merge o push final.</li>
                    </ul>
                    Ejemplo: git rebase main (reubica tu rama sobre el último commit de main).
                    <br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/Zqft6yNRuNs?si=UJ64B36_Ym6_Ex1U" 
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

                    <h2>Actividad: Une los conceptos con su definición</h2>
                    <form id="actividad" action="scripts_modulo_2/leccion_5/registrar_actividad_leccion_5.php" method="POST">
                        <input type="hidden" name="idActividad" value="10">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Pull Request (PR)</p>
                                <p>2. Revisión de Código (Code Review)</p>
                                <p>3. Fusionar (Merge)</p>
                                <p>4. Creador de la PR</p>
                                <p>5. Calidad del Código</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El proceso de que un colega inspeccione tu código antes de que sea aceptado en la rama principal.</option>
                                    <option value="b">b) El desarrollador que crea la solicitud para que su código sea fusionado.</option>
                                    <option value="c">c) Una solicitud formal para que el código de una rama secundaria sea integrado en la rama principal.</option>
                                    <option value="d">d) El objetivo de las PRs y la revisión para mantener la consistencia y alta calidad del proyecto.</option>
                                    <option value="e">e) La acción de tomar el código aprobado en una PR e integrarlo permanentemente en la rama main.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El proceso de que un colega inspeccione tu código antes de que sea aceptado en la rama principal.</option>
                                    <option value="b">b) El desarrollador que crea la solicitud para que su código sea fusionado.</option>
                                    <option value="c">c) Una solicitud formal para que el código de una rama secundaria sea integrado en la rama principal.</option>
                                    <option value="d">d) El objetivo de las PRs y la revisión para mantener la consistencia y alta calidad del proyecto.</option>
                                    <option value="e">e) La acción de tomar el código aprobado en una PR e integrarlo permanentemente en la rama main.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El proceso de que un colega inspeccione tu código antes de que sea aceptado en la rama principal.</option>
                                    <option value="b">b) El desarrollador que crea la solicitud para que su código sea fusionado.</option>
                                    <option value="c">c) Una solicitud formal para que el código de una rama secundaria sea integrado en la rama principal.</option>
                                    <option value="d">d) El objetivo de las PRs y la revisión para mantener la consistencia y alta calidad del proyecto.</option>
                                    <option value="e">e) La acción de tomar el código aprobado en una PR e integrarlo permanentemente en la rama main.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El proceso de que un colega inspeccione tu código antes de que sea aceptado en la rama principal.</option>
                                    <option value="b">b) El desarrollador que crea la solicitud para que su código sea fusionado.</option>
                                    <option value="c">c) Una solicitud formal para que el código de una rama secundaria sea integrado en la rama principal.</option>
                                    <option value="d">d) El objetivo de las PRs y la revisión para mantener la consistencia y alta calidad del proyecto.</option>
                                    <option value="e">e) La acción de tomar el código aprobado en una PR e integrarlo permanentemente en la rama main.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El proceso de que un colega inspeccione tu código antes de que sea aceptado en la rama principal.</option>
                                    <option value="b">b) El desarrollador que crea la solicitud para que su código sea fusionado.</option>
                                    <option value="c">c) Una solicitud formal para que el código de una rama secundaria sea integrado en la rama principal.</option>
                                    <option value="d">d) El objetivo de las PRs y la revisión para mantener la consistencia y alta calidad del proyecto.</option>
                                    <option value="e">e) La acción de tomar el código aprobado en una PR e integrarlo permanentemente en la rama main.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_2/leccion_5/mostrar_calificacion_leccion_5.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 5 de 6
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_2/validar_actividades/validar_actividades_leccion_5.js?v=1.0"></script>
</body>
</html>
