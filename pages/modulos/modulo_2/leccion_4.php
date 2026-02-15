<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_2/leccion_1.css?v=3.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Buenas prácticas en commits y control de cambios</title>
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
                    <?php include("scripts_modulo_2/leccion_4/leccion_4_scripts.php"); ?>
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
                        La Importancia del Buen Commit
                    </h1>
                    <h4>El Commit como Historia</h4>
                    Cada commit es un registro permanente de la historia de tu proyecto. Un buen commit debe ser atómico (hacer solo un cambio lógico) y descriptivo (explicar por qué y qué se hizo).
                    <br><br>
                    Ejemplo de Mal Commit: git commit -m "Arreglos y algo mas" (No es útil)
                    <br><br>
                    <h4>El Mensaje de Commit</h4>
                    <ol>
                        <li>Línea de Asunto (Subject): Concisa (máx. 50 caracteres), en imperativo (ej: Agregar, Arreglar, Actualizar).</li>
                        <li>Cuerpo (Body): Detalla el por qué del cambio, las decisiones tomadas y los problemas que resuelve (opcional, pero recomendado).</li>
                        <li>Pie de Página (Footer): Para referenciar issues o tickets (Closes #42).</li>
                    </ol>
                    <h4>Preparar Cambios Lógicos</h4>
                    Usa el Área de Preparación (git add) para agrupar solo los archivos que pertenecen al mismo cambio lógico. Nunca mezcles un arreglo de bug con una nueva característica en el mismo commit.
                    <br><br>
                    Ejemplo: Tienes 5 cambios. Solo 2 son para el bug de login.
                    <ol>
                        <li>git add archivo-bug1.js</li>
                        <li>git add archivo-bug2.js</li>
                        <li>git commit -m "fix: Corregido error de autenticación"</li>
                    </ol>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/SneYIlmi86U?si=NBHTykhXl0IUVgzH" 
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
                        Herramientas de Control de Cambios y Limpieza
                    </h1>
                    <h4>Estructura del Mensaje de Commit</h4>
                    <img class="imagen_ejemplo" src="../../../assets/img/modulo_2/git-reset.jpg" alt="Ejemplo"><br>
                    Se recomienda el formato Tipo: Asunto (en imperativo), con el cuerpo separado por una línea:
                    <br><br>
                    Ejemplo de Buen Commit: feat: Agregar validación de email al formulario de registro
                    <br><br>
                    Tipo de Commit (Convenciones):
                    <ul>
                        <li>feat: Nueva característica.</li>
                        <li>fix: Arreglo de un bug.</li>
                        <li>docs: Cambios solo en documentación.</li>
                    </ul>
                    git reset
                    <br><br>
                    Propósito: Un comando poderoso para "deshacer" cambios locales, moviendo los punteros de commits.
                    <br><br>
                    Uso Común (deshacer el último commit): git reset --soft HEAD~1 (mantiene los cambios en Staging), git reset --hard HEAD~1 (elimina los cambios).
                    <br><br>
                    git revert < commit-hash >
                    <br><br>
                    Propósito: Crea un nuevo commit que deshace los cambios introducidos por un commit anterior. Es más seguro que reset en repositorios compartidos, ya que no reescribe la historia.
                    <br><br>
                    Uso: git revert <hash_del_commit_a_deshacer>
                    <br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/HZ1c25OIX4o?si=iVrIx8ObQeWWuExa" 
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
                    <form id="actividad" action="scripts_modulo_2/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <input type="hidden" name="idActividad" value="9">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Commit Atómico</p>
                                <p>2. Mensaje en Imperativo</p>
                                <p>3. Convención fix:</p>
                                <p>4. git revert</p>
                                <p>5. git reset --hard</p>
                                <p>6. Área de Preparación (Staging)</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Crea un nuevo commit que deshace los cambios de uno anterior, manteniendo la historia intacta.</option>
                                    <option value="b">b) Indica que el propósito del commit es resolver un bug o un problema.</option>
                                    <option value="c">c) La práctica de asegurar que cada commit contenga únicamente un cambio lógico completo.</option>
                                    <option value="d">d) El comando para deshacer commits locales, eliminando los cambios del Directorio de Trabajo.</option>
                                    <option value="e">e) La regla para escribir la línea de asunto del commit de forma concisa (Ej: Corregir error, Agregar función).</option>
                                    <option value="f">f) Permite agrupar selectivamente archivos modificados para formar un commit lógico antes de confirmarlo.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Crea un nuevo commit que deshace los cambios de uno anterior, manteniendo la historia intacta.</option>
                                    <option value="b">b) Indica que el propósito del commit es resolver un bug o un problema.</option>
                                    <option value="c">c) La práctica de asegurar que cada commit contenga únicamente un cambio lógico completo.</option>
                                    <option value="d">d) El comando para deshacer commits locales, eliminando los cambios del Directorio de Trabajo.</option>
                                    <option value="e">e) La regla para escribir la línea de asunto del commit de forma concisa (Ej: Corregir error, Agregar función).</option>
                                    <option value="f">f) Permite agrupar selectivamente archivos modificados para formar un commit lógico antes de confirmarlo.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Crea un nuevo commit que deshace los cambios de uno anterior, manteniendo la historia intacta.</option>
                                    <option value="b">b) Indica que el propósito del commit es resolver un bug o un problema.</option>
                                    <option value="c">c) La práctica de asegurar que cada commit contenga únicamente un cambio lógico completo.</option>
                                    <option value="d">d) El comando para deshacer commits locales, eliminando los cambios del Directorio de Trabajo.</option>
                                    <option value="e">e) La regla para escribir la línea de asunto del commit de forma concisa (Ej: Corregir error, Agregar función).</option>
                                    <option value="f">f) Permite agrupar selectivamente archivos modificados para formar un commit lógico antes de confirmarlo.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Crea un nuevo commit que deshace los cambios de uno anterior, manteniendo la historia intacta.</option>
                                    <option value="b">b) Indica que el propósito del commit es resolver un bug o un problema.</option>
                                    <option value="c">c) La práctica de asegurar que cada commit contenga únicamente un cambio lógico completo.</option>
                                    <option value="d">d) El comando para deshacer commits locales, eliminando los cambios del Directorio de Trabajo.</option>
                                    <option value="e">e) La regla para escribir la línea de asunto del commit de forma concisa (Ej: Corregir error, Agregar función).</option>
                                    <option value="f">f) Permite agrupar selectivamente archivos modificados para formar un commit lógico antes de confirmarlo.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Crea un nuevo commit que deshace los cambios de uno anterior, manteniendo la historia intacta.</option>
                                    <option value="b">b) Indica que el propósito del commit es resolver un bug o un problema.</option>
                                    <option value="c">c) La práctica de asegurar que cada commit contenga únicamente un cambio lógico completo.</option>
                                    <option value="d">d) El comando para deshacer commits locales, eliminando los cambios del Directorio de Trabajo.</option>
                                    <option value="e">e) La regla para escribir la línea de asunto del commit de forma concisa (Ej: Corregir error, Agregar función).</option>
                                    <option value="f">f) Permite agrupar selectivamente archivos modificados para formar un commit lógico antes de confirmarlo.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Crea un nuevo commit que deshace los cambios de uno anterior, manteniendo la historia intacta.</option>
                                    <option value="b">b) Indica que el propósito del commit es resolver un bug o un problema.</option>
                                    <option value="c">c) La práctica de asegurar que cada commit contenga únicamente un cambio lógico completo.</option>
                                    <option value="d">d) El comando para deshacer commits locales, eliminando los cambios del Directorio de Trabajo.</option>
                                    <option value="e">e) La regla para escribir la línea de asunto del commit de forma concisa (Ej: Corregir error, Agregar función).</option>
                                    <option value="f">f) Permite agrupar selectivamente archivos modificados para formar un commit lógico antes de confirmarlo.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_2/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 4 de 6
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_2/validar_actividades/validar_actividades_leccion_4.js?v=0.0"></script>
</body>
</html>
