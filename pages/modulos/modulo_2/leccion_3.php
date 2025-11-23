<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_2/leccion_1.css?v=3.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - Repositorios remotos: GitHub, GitLab, Bitbucket</title>
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
                    <?php include("scripts_modulo_2/leccion_3/leccion_3_scripts.php"); ?>
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
                        Conceptos Fundamentales de Repositorios Remotos
                    </h1>
                    <h4>Repositorio Remoto (Remote Repository)</h4>
                    Es una versión de tu repositorio Git alojada en un servidor en internet (o en una red local). Permite la colaboración en equipo y sirve como una copia de seguridad del proyecto. Plataformas como GitHub, GitLab y Bitbucket son servicios de alojamiento de repositorios remotos.

                    <h4>Origen (Origin)</h4>
                    Es el nombre corto que Git le da por defecto al servidor remoto principal desde donde se clonó o al que se le envió el repositorio por primera vez. Cuando ves origin/main, se refiere a la rama main en ese servidor remoto.

                    <h4>Clonar (Clone)</h4>
                    Es el proceso de descargar una copia completa de un repositorio remoto existente, incluyendo todo su historial de commits y ramas. Esto inicializa automáticamente tu repositorio local con la conexión remota a origin.

                    <h4>Subir (Push)</h4>
                    Es el proceso de enviar tus commits locales (los que has confirmado en tu máquina) al repositorio remoto, actualizando la versión alojada en el servidor.

                    <h4>Bajar (Pull)</h4>
                    Es la acción de descargar e integrar los cambios que otros han subido al repositorio remoto en tu rama local. Es esencialmente una combinación de git fetch (descargar) y git merge (fusionar).
                    <br><br>
                    <b>git fetch</b>
                    <br><br>
                    Propósito: Descarga los cambios de un repositorio remoto, pero no los integra inmediatamente en tu código local. Simplemente actualiza las referencias de ramas remotas. Es útil para revisar los cambios antes de fusionarlos.
                    <br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/vRrh6rL8Nvc?si=Qgh0LyZi5KdOvArp" 
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
                        Comandos Clave para Conexión y Sincronización
                    </h1>
                    <img class="imagen_ejemplo" src="../../../assets/img/modulo_2/comandos-git.webp" alt="Ejemplo"><br>
                    <br>
                    <b>git remote</b>
                    <br><br>
                    Propósito: Gestiona las conexiones a los repositorios remotos.
                    <br><br>
                    Ejemplo: git remote add origin < URL_del_repo >
                    <br><br>
                    Con esto, ya no necesitas la URL completa, solo usas origin.
                    <br><br>
                    <b>git clone < URL ></b>
                    <br><br>
                    Propósito: Descarga el repositorio remoto completo a tu máquina local.
                    <br><br>
                    <b>git push < remote > < branch ></b>
                    <br><br>
                    Propósito: Sube los commits de tu rama local a la rama correspondiente en el repositorio remoto.
                    <br><br>
                    <b>git pull < remote > < branch ></b>
                    <br><br>
                    Propósito: Descarga los cambios del remoto (fetch) y los fusiona automáticamente (merge) en tu rama local actual.
                    <br><br>
                    <b>git fetch < remote ></b>
                    <br><br>
                    Uso: git fetch origin (descarga los cambios de origin).
                    <br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/oI4uHhZERM4?si=ue72PO8iidz2hFeQ" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen></iframe>
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
                    <form id="actividad" action="scripts_modulo_2/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <input type="hidden" name="idActividad" value="8">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Repositorio Remoto</p>
                                <p>2. Origen (Origin)</p>
                                <p>3. git clone</p>
                                <p>4. git push</p>
                                <p>5. git pull</p>
                                <p>6. git fetch</p>
                                <p>7. Sincronización</p>
                                <p>8. GitHub/GitLab/Bitbucket</p>
                                <p>9. git remote add</p>
                                <p>10. Clonar</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que descarga una copia completa del historial, incluyendo el repositorio local y la conexión remota.</option>
                                    <option value="b">b) El proceso de enviar tus commits locales al repositorio en el servidor.</option>
                                    <option value="c">c) Descarga los cambios del remoto, pero no los fusiona inmediatamente con tu rama local.</option>
                                    <option value="d">d) Un repositorio alojado en un servidor externo (como GitHub) para colaboración y backup.</option>
                                    <option value="e">e) El nombre corto que Git le da por defecto al servidor remoto principal.</option>
                                    <option value="f">f) La acción combinada de descargar los cambios del remoto e inmediatamente fusionarlos en tu rama local.</option>
                                    <option value="g">g) El comando que se usa por primera vez para configurar la conexión entre tu repositorio local y el remoto.</option>
                                    <option value="h">h) El objetivo de asegurar que la copia local y la copia remota del código sean idénticas.</option>
                                    <option value="i">i) El proceso de descargar la copia completa de un repositorio remoto existente.</option>
                                    <option value="j">j) Plataformas que sirven como servicios de hosting para repositorios Git remotos.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_2/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 3 de 6
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_2/validar_actividades/validar_actividades_leccion_3.js?v=1.0"></script>
</body>
</html>
