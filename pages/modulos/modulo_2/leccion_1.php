<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_2/leccion_1.css?v=5.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - Introducción a Git</title>
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
                    <?php include("scripts_modulo_2/leccion_1/leccion_1_scripts.php"); ?>
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
                        Conceptos Clave de Control de Versiones
                    </h1>
                    <h4>
                        Control de Versiones (VCS)
                    </h4>
                    Es un sistema que rastrea y administra los cambios realizados en archivos a lo 
                    largo del tiempo. Su propósito principal es permitir a los desarrolladores: 
                    <ol>
                        <li>Recuperar versiones anteriores de código.</li>
                        <li>Auditar quién hizo qué cambio y cuándo.</li>
                        <li>Gestionar la colaboración sin sobrescribir el trabajo de otros.</li>
                    </ol>

                    <h1 class="subtitulo">
                        Sistema Distribuido (DVCS)
                    </h1>
                    Git es un DVCS. Esto significa que cada colaborador tiene una copia completa del 
                    historial del proyecto, no solo del código actual. Esto brinda redundancia y permite 
                    trabajar sin conexión a internet.

                    <h1 class="subtitulo">
                        Diferencia entre Git y GitHub/GitLab
                    </h1>
                    <ul>
                        <li>Git: Es la herramienta instalada localmente para gestionar versiones.</li>
                        <li>GitHub/GitLab/Bitbucket: Son plataformas de hosting que permiten alojar 
                            repositorios remotos (en la nube) para facilitar la colaboración.</li>
                    </ul>
                    
                    <h1 class="subtitulo">
                        Git: La Herramienta y Su Modelo de Datos
                    </h1>

                    <h4>
                        Git
                    </h4>
                    Es el Sistema Distribuido de Control de Versiones (DVCS) más popular. A 
                    diferencia de otros sistemas centralizados, Git permite que cada desarrollador 
                    tenga una copia completa del historial del proyecto en su máquina local.

                    <h1 class="subtitulo">
                        Repositorio (Repo)
                    </h1>
                    Es la base de datos de Git. Es una colección de archivos, el historial completo de 
                    commits, y la configuración del proyecto. Se almacena localmente en la carpeta 
                    oculta .git que se crea al inicializar.
                    <br><br>
                    La clave del modelo de Git: Git no almacena diferencias entre archivos, sino una 
                    instantánea completa de cómo se veían todos los archivos del proyecto en el 
                    momento del commit.

                    <h1 class="subtitulo">
                        Configuración Inicial
                    </h1>
                    Antes de usar Git, debes identificarte para que tus commits se rastreen 
                    correctamente: <br>
                    <br>
                    <b>Ejemplo:</b><br>
                    <ul>
                        <li>git config --global user.name "Tu Nombre"</li>
                        <li>git config --global user.email "tu.email@ejemplo.com"</li>
                    </ul>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/GzfbU7gzdVA?si=SB68dKN3QPbsb3yo" 
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
                    <h1 class="subtitulo">
                        El Ciclo de Vida del Archivo Local
                    </h1>
                    <h4>1. Directorio de Trabajo (Working Directory)</h4>
                    Es el directorio donde se encuentran los archivos que estás editando. Un archivo 
                    aquí puede estar en dos estados: Modificado (pero Git lo está rastreando) o No 
                    Rastreado (Untracked, si es un archivo nuevo que Git ignora).

                    <h4>2. Área de Preparación (Staging Area / Index)</h4>
                    Es un "escenario" temporal. Es donde colocas selectivamente las modificaciones 
                    que deseas incluir en tu siguiente commit. Te permite agrupar cambios lógicos 
                    antes de guardarlos

                    <h4>3. Repositorio de Git (Git Directory)</h4>
                    Es donde Git almacena de forma permanente y segura las instantáneas 
                    (snapshots). Los archivos en este estado ya forman parte del historial del 
                    proyecto.

                    <h4>El Flujo Básico (Modificar -> Preparar -> Confirmar)</h4>
                    Modificas un archivo en el Working Directory. -> Usas git add para moverlo al 
                    Staging Area. -> Usas git commit para tomar la instantánea del Staging Area y 
                    guardarla en el Git Directory.

                    <h4>Comandos Fundamentales de la Lección</h4>
                    <b>git init</b>
                    <br><br>
                    Propósito: Inicializa un nuevo repositorio Git en la carpeta actual, creando la subcarpeta .git.

                    <b>Ejemplo: </b>
                    cd mi-proyecto -> git init <br>
                    git status <br>
                    <br>
                    Propósito: Muestra el estado del Directorio de Trabajo y del Área de Preparación (qué archivos están modificados, cuáles listos para commit, y en qué rama estás).
                    <br><br>
                    git add < archivo >
                    <br><br>
                    Propósito: Mueve un archivo modificado o nuevo del Directorio de Trabajo al Área de Preparación, marcándolo para ser incluido en el próximo commit. <br>
                    <br>
                    <b>git commit -m "Mensaje"</b>
                    <br>
                    <br>
                    Propósito: Guarda de forma permanente la instantánea de todos los archivos que están actualmente en el Área de Preparación, creando un nuevo commit en el historial. <br>
                    <b>Ejemplo de Commit:</b>
                    <ol>
                        <li>Modificar: Editar index.html.</li>
                        <li>Preparar: git add index.html</li>
                        <li>3. Confirmar: git commit -m "feat: Agregada la sección de navegación"</li>
                    </ol>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/iT4UOkyI09k?si=Li3LV-TktX7XaySA" 
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
                    <form id="actividad" action="scripts_modulo_2/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="6">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Repositorio Local</p>
                                <p>2. Git</p>
                                <p>3. git commit -m</p>
                                <p>4. Área de Preparación (Staging Area)</p>
                                <p>5. git add</p>
                                <p>6. Directorio de Trabajo</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que guarda permanentemente la instantánea de los cambios preparados.</option>
                                    <option value="b">b) El área donde colocas los archivos modificados que deseas incluir en el siguiente commit.</option>
                                    <option value="c">c) La base de datos que contiene el historial completo del proyecto en tu propia máquina.</option>
                                    <option value="d">d) El comando que mueve un archivo del Directorio de Trabajo al Área de Preparación.</option>
                                    <option value="e">e) El Sistema Distribuido de Control de Versiones (DVCS).</option>
                                    <option value="f">f) La carpeta donde editas activamente los archivos del proyecto.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que guarda permanentemente la instantánea de los cambios preparados.</option>
                                    <option value="b">b) El área donde colocas los archivos modificados que deseas incluir en el siguiente commit.</option>
                                    <option value="c">c) La base de datos que contiene el historial completo del proyecto en tu propia máquina.</option>
                                    <option value="d">d) El comando que mueve un archivo del Directorio de Trabajo al Área de Preparación.</option>
                                    <option value="e">e) El Sistema Distribuido de Control de Versiones (DVCS).</option>
                                    <option value="f">f) La carpeta donde editas activamente los archivos del proyecto.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que guarda permanentemente la instantánea de los cambios preparados.</option>
                                    <option value="b">b) El área donde colocas los archivos modificados que deseas incluir en el siguiente commit.</option>
                                    <option value="c">c) La base de datos que contiene el historial completo del proyecto en tu propia máquina.</option>
                                    <option value="d">d) El comando que mueve un archivo del Directorio de Trabajo al Área de Preparación.</option>
                                    <option value="e">e) El Sistema Distribuido de Control de Versiones (DVCS).</option>
                                    <option value="f">f) La carpeta donde editas activamente los archivos del proyecto.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que guarda permanentemente la instantánea de los cambios preparados.</option>
                                    <option value="b">b) El área donde colocas los archivos modificados que deseas incluir en el siguiente commit.</option>
                                    <option value="c">c) La base de datos que contiene el historial completo del proyecto en tu propia máquina.</option>
                                    <option value="d">d) El comando que mueve un archivo del Directorio de Trabajo al Área de Preparación.</option>
                                    <option value="e">e) El Sistema Distribuido de Control de Versiones (DVCS).</option>
                                    <option value="f">f) La carpeta donde editas activamente los archivos del proyecto.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que guarda permanentemente la instantánea de los cambios preparados.</option>
                                    <option value="b">b) El área donde colocas los archivos modificados que deseas incluir en el siguiente commit.</option>
                                    <option value="c">c) La base de datos que contiene el historial completo del proyecto en tu propia máquina.</option>
                                    <option value="d">d) El comando que mueve un archivo del Directorio de Trabajo al Área de Preparación.</option>
                                    <option value="e">e) El Sistema Distribuido de Control de Versiones (DVCS).</option>
                                    <option value="f">f) La carpeta donde editas activamente los archivos del proyecto.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que guarda permanentemente la instantánea de los cambios preparados.</option>
                                    <option value="b">b) El área donde colocas los archivos modificados que deseas incluir en el siguiente commit.</option>
                                    <option value="c">c) La base de datos que contiene el historial completo del proyecto en tu propia máquina.</option>
                                    <option value="d">d) El comando que mueve un archivo del Directorio de Trabajo al Área de Preparación.</option>
                                    <option value="e">e) El Sistema Distribuido de Control de Versiones (DVCS).</option>
                                    <option value="f">f) La carpeta donde editas activamente los archivos del proyecto.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_2/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 6
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_2/validar_actividades/validar_actividades_leccion_1.js?v=5.0"></script>
</body>
</html>
