<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_2/leccion_1.css?v=2.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 6 - Colaboración entre equipos con Git</title>
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
                    <?php include("scripts_modulo_2/leccion_6/leccion_6_scripts.php"); ?>
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
                        Estrategias de Colaboración (Flujos de Trabajo)
                    </h1>
                    <h4>Git Flow</h4>
                    Es un modelo de branching formalizado que utiliza dos ramas de larga duración (main para producción y develop para integración de features) y múltiples ramas de corta duración (feature/, release/, hotfix/).
                    <br><br>
                    Uso: Adecuado para proyectos con ciclos de lanzamiento definidos y que requieren un alto nivel de estabilidad (ej: software que se lanza cada 6 meses).
                    <h4>GitHub Flow</h4>
                    Un modelo más simple y más común, que utiliza solo una rama principal de larga duración (main). Todo el trabajo se realiza en ramas de feature de corta duración que son fusionadas a main tan pronto como estén listas y pasen las pruebas.
                    <br><br>
                    Uso: Ideal para equipos que implementan despliegue continuo (Continuous Deployment) y lanzan código frecuentemente. Es más ágil y simple.
                    <h4>Trabajo en Equipos Grandes</h4>
                    La clave es la Comunicación y el Acuerdo sobre el Flujo. Todos los miembros del equipo deben seguir la misma estrategia de branching (ej: todos usan GitHub Flow).
                    <br><br>
                    Integración Frecuente: Los desarrolladores deben hacer git pull frecuentemente (varias veces al día) para integrar los últimos cambios de sus colegas y detectar posibles conflictos de fusión (merge conflicts) pronto, cuando son pequeños y fáciles de resolver.
                    <br><br>
                    Propiedad del Código: Asignar propietarios de módulos ayuda a saber quién debe revisar ciertas PRs.
                    <br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/2Xagp86uOuI?si=rCRjwWe6DXsPwcju" 
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
                        Herramientas de Colaboración y Gestión de Flujos
                    </h1>
                    <h4>GitHub/GitLab/Bitbucket</h4>
                    Estas plataformas no solo alojan el código, sino que son el centro de la colaboración.
                    <br><br>
                    Funcionalidades Clave:
                    <ul>
                        <li>Issues/Tickets: Para seguimiento de bugs y tareas.</li>
                        <li>Pull Requests: El mecanismo central de revisión.</li>
                        <li>CI/CD (Continuous Integration/Continuous Deployment): Herramientas automatizadas que ejecutan pruebas y despliegan código cuando una PR es fusionada a main.</li>
                    </ul>
                    <h4>Resolución de Conflictos en Equipo</h4>
                    Práctica Recomendada:
                    <br><br>
                    "Pull antes de Push": Siempre ejecuta git pull origin main (o la rama base) antes de intentar git push tus cambios. Esto asegura que estés trabajando sobre la versión más reciente del código base, lo que reduce la probabilidad de conflictos graves.
                    <br><br>
                    Revisión Paritaria: Fomentar que el desarrollador que introdujo el código problemático sea el que resuelva el conflicto (ya que es quien mejor entiende ambos lados del cambio).
                    <br>
                    <iframe width="500" height="300" 
                    src="https://www.youtube.com/embed/M_3VeKPFi5U?si=BAVQH7TjWDsiPc-H" 
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
                    <form id="actividad" action="scripts_modulo_2/leccion_6/registrar_actividad_leccion_6.php" method="POST">
                        <input type="hidden" name="idActividad" value="11">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Git Flow</p>
                                <p>2. GitHub Flow</p>
                                <p>3. Integración Frecuente</p>
                                <p>4. "Pull antes de Push"</p>
                                <p>5. CI/CD</p>
                                <p>6. Plataformas de Hosting (GitHub, etc.)</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que se recomienda ejecutar siempre antes de subir tus cambios al repositorio remoto.</option>
                                    <option value="b">b) Una práctica que implica descargar los últimos cambios de los compañeros frecuentemente (varias veces al día).</option>
                                    <option value="c">c) Modelo de flujo de trabajo que utiliza dos ramas principales de larga duración (main y develop).</option>
                                    <option value="d">d) Plataformas que proporcionan herramientas para el seguimiento de bugs y tareas (Issues).</option>
                                    <option value="e">e) Modelo de flujo de trabajo más simple que se centra en una sola rama principal estable (main).</option>
                                    <option value="f">f) Herramientas automatizadas que ejecutan pruebas y despliegan código de forma continua.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que se recomienda ejecutar siempre antes de subir tus cambios al repositorio remoto.</option>
                                    <option value="b">b) Una práctica que implica descargar los últimos cambios de los compañeros frecuentemente (varias veces al día).</option>
                                    <option value="c">c) Modelo de flujo de trabajo que utiliza dos ramas principales de larga duración (main y develop).</option>
                                    <option value="d">d) Plataformas que proporcionan herramientas para el seguimiento de bugs y tareas (Issues).</option>
                                    <option value="e">e) Modelo de flujo de trabajo más simple que se centra en una sola rama principal estable (main).</option>
                                    <option value="f">f) Herramientas automatizadas que ejecutan pruebas y despliegan código de forma continua.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que se recomienda ejecutar siempre antes de subir tus cambios al repositorio remoto.</option>
                                    <option value="b">b) Una práctica que implica descargar los últimos cambios de los compañeros frecuentemente (varias veces al día).</option>
                                    <option value="c">c) Modelo de flujo de trabajo que utiliza dos ramas principales de larga duración (main y develop).</option>
                                    <option value="d">d) Plataformas que proporcionan herramientas para el seguimiento de bugs y tareas (Issues).</option>
                                    <option value="e">e) Modelo de flujo de trabajo más simple que se centra en una sola rama principal estable (main).</option>
                                    <option value="f">f) Herramientas automatizadas que ejecutan pruebas y despliegan código de forma continua.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que se recomienda ejecutar siempre antes de subir tus cambios al repositorio remoto.</option>
                                    <option value="b">b) Una práctica que implica descargar los últimos cambios de los compañeros frecuentemente (varias veces al día).</option>
                                    <option value="c">c) Modelo de flujo de trabajo que utiliza dos ramas principales de larga duración (main y develop).</option>
                                    <option value="d">d) Plataformas que proporcionan herramientas para el seguimiento de bugs y tareas (Issues).</option>
                                    <option value="e">e) Modelo de flujo de trabajo más simple que se centra en una sola rama principal estable (main).</option>
                                    <option value="f">f) Herramientas automatizadas que ejecutan pruebas y despliegan código de forma continua.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que se recomienda ejecutar siempre antes de subir tus cambios al repositorio remoto.</option>
                                    <option value="b">b) Una práctica que implica descargar los últimos cambios de los compañeros frecuentemente (varias veces al día).</option>
                                    <option value="c">c) Modelo de flujo de trabajo que utiliza dos ramas principales de larga duración (main y develop).</option>
                                    <option value="d">d) Plataformas que proporcionan herramientas para el seguimiento de bugs y tareas (Issues).</option>
                                    <option value="e">e) Modelo de flujo de trabajo más simple que se centra en una sola rama principal estable (main).</option>
                                    <option value="f">f) Herramientas automatizadas que ejecutan pruebas y despliegan código de forma continua.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El comando que se recomienda ejecutar siempre antes de subir tus cambios al repositorio remoto.</option>
                                    <option value="b">b) Una práctica que implica descargar los últimos cambios de los compañeros frecuentemente (varias veces al día).</option>
                                    <option value="c">c) Modelo de flujo de trabajo que utiliza dos ramas principales de larga duración (main y develop).</option>
                                    <option value="d">d) Plataformas que proporcionan herramientas para el seguimiento de bugs y tareas (Issues).</option>
                                    <option value="e">e) Modelo de flujo de trabajo más simple que se centra en una sola rama principal estable (main).</option>
                                    <option value="f">f) Herramientas automatizadas que ejecutan pruebas y despliegan código de forma continua.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_2/leccion_6/mostrar_calificacion_leccion_6.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 6 de 6
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_2/validar_actividades/validar_actividades_leccion_6.js?v=0.0"></script>
</body>
</html>
