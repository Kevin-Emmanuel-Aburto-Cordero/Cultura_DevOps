<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_2/leccion_1.css?v=6.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - Flujo de trabajo con ramas (branching y merging)</title>
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
                    <?php include("scripts_modulo_2/leccion_2/leccion_2_scripts.php"); ?>
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
                        Conceptos Fundamentales de Ramas (Branches)
                    </h1>
                    <h4>¿Qué es una Rama (Branch)?</h4>
                    Una rama es esencialmente un puntero móvil que apunta al commit más reciente de esa línea de trabajo. Es una línea de desarrollo independiente que permite trabajar en nuevas funcionalidades, arreglar bugs o experimentar, sin afectar el código principal.
                    <br>
                    Aislamiento del Trabajo: El principal beneficio del branching es que si el código de tu rama falla, el código principal (main o master) permanece estable y funcional.
                    <br>
                    <h4>El Rol de la Rama Principal (main o master)</h4>
                    Por convención, la rama main es considerada la rama base, estable y de producción del proyecto. Solo los cambios probados y finalizados deben llegar a esta rama.
                    <br>
                    Visualización: Imagina la rama principal como el tronco de un árbol, y cada nueva rama es una rama lateral.
                    <br>
                    <h4>Flujo de Trabajo Típico</h4>
                    <ol>
                        <li>Crear una rama desde main.</li>
                        <li>Trabajar y hacer commits en la nueva rama.</li>
                        <li>Fusionar la rama de vuelta a main.</li>
                        <li>Eliminar la rama de trabajo.</li>
                    </ol>
                    <b>HEAD</b>
                    <br><br>
                    Es un puntero simbólico en Git que indica la rama actual que estás usando o el commit específico en el que estás trabajando.
                    <br>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/gjKKtQVVCZU?si=rVeBM0-RzNDaR7-5" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
                </div>
                </div></div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                    <div class="columna">
                    <h1 class="subtitulo">
                        Uso Práctico y Fusión (Merging)
                    </h1>
                    <h4>Creación de Ramas: git branch</h4>
                    Este comando te permite crear nuevas líneas de desarrollo. La convención es usar nombres descriptivos que incluyan el tipo de cambio y su propósito.
                    <br><br>
                    <b>Ejemplo de Creación:</b> git branch feature/agregar-login
                    <br><br>
                    <b>Cambio de Ramas:</b> git checkout o git switch
                    <br><br>
                    Este comando cambia el puntero HEAD (lo que significa "dónde estoy ahora") para apuntar a la rama de destino. Tu Directorio de Trabajo se actualiza para reflejar el contenido de esa rama.
                    <br><br>
                    <b>Ejemplo de Cambio:</b> git checkout feature/agregar-login
                    <br><br>
                    <b>Fusión de Ramas:</b> git merge
                    <br><br>
                    git merge es el proceso de tomar los commits de una rama (ej. feature/login) e incorporarlos al historial de otra rama (ej. main). Esto junta el historial de ambas líneas de desarrollo.
                    <br><br>
                    <b>Pasos para Fusionar:</b>
                    <ol>
                        <li>Moverse a la rama destino: git checkout main</li>
                        <li>Ejecutar la fusión: git merge feature/agregar-login</li>
                    </ol>
                    <h4>Conflictos de Fusión (Merge Conflicts)</h4>
                    ¿Qué es? Ocurre cuando dos ramas modifican la misma parte de la misma línea en un archivo y Git no puede decidir automáticamente qué versión mantener.
                    <br><br>
                    Resolución: El desarrollador debe intervenir manualmente en el archivo conflictivo, editar las secciones marcadas por Git (que contienen < HEAD y >>>>), elegir la versión correcta, y luego usar git add y git commit para confirmar la resolución.
                    <br>
                    <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/VmOYz76EoJ0?si=w6uuZ6m22z2CPEE-" 
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
                    <form id="actividad" action="scripts_modulo_2/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <input type="hidden" name="idActividad" value="7">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Rama (Branch)</p>
                                <p>2. git checkout</p>
                                <p>3. git merge</p>
                                <p>4. main o master</p>
                                <p>5. Conflicto de Fusión (Merge Conflict)</p>
                                <p>6. Fusión (Merging)</p>
                                <p>7. Aislamiento</p>
                                <p>8. Rebase</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que integra los commits de una rama a otra, combinando los historiales.</option>
                                    <option value="b">b) Un puntero móvil a un commit que permite una línea de desarrollo independiente.</option>
                                    <option value="c">c) La rama que, por convención, debe mantenerse siempre estable y lista para producción.</option>
                                    <option value="d">d) Un evento que ocurre cuando dos ramas modifican la misma línea de código en un archivo.</option>
                                    <option value="e">e) El proceso de unir una rama de feature a la rama principal (ej. main).</option>
                                    <option value="f">f) El proceso de "reubicar" los commits de una rama en la cima de otra para lograr un historial lineal.</option>
                                    <option value="g">g) El comando que cambia el puntero HEAD y actualiza tu Directorio de Trabajo al contenido de otra rama.</option>
                                    <option value="h">h) El beneficio clave de las ramas que permite trabajar sin temor a dañar el código base.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_2/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 2 de 6
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_2/validar_actividades/validar_actividades_leccion_2.js?v=7.0"></script>
</body>
</html>
