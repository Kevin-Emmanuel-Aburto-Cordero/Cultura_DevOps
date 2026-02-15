<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_3/leccion_1.css?v=2.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Gestión de Artefactos y Repositorios Centrales</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_3_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
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
                    <?php include("scripts_modulo_3/leccion_4/leccion_4_scripts.php"); ?>
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
                                El Producto Final Inmutable y Listo para Desplegar
                            </h1>
                            <h4>
                                Concepto de Artefacto y Versionamiento
                            </h4>
                            Un Artefacto es el resultado de un build exitoso, probado y finalizado. Es 
                            el paquete de software listo para ser instalado. Un manejo adecuado de 
                            artefactos es el requisito sine qua non para la Entrega Continua. <br>
                            Cada artefacto debe ser etiquetado y versionado de forma única (ej. con el 
                            hash del commit
                            <br>
                            <br>
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_3/artefacto-versionamiento.png" alt="artefacto-versionamiento">
                            <h4>
                                El Principio de Inmutabilidad
                            </h4>
                            Este es un concepto central de DevOps: el artefacto es inmutable. Esto 
                            significa que el mismo archivo binario (ej. el mismo archivo WAR o la 
                            misma imagen Docker) que fue probado en el ambiente de CI debe ser 
                            promovido, sin cambios, a los entornos de QA, Staging y Producción. 
                            Nunca se debe reconstruir el código en un entorno posterior; solo se debe 
                            redistribuir el artefacto existente. Esta inmutabilidad elimina una fuente 
                            principal de errores de despliegue: la inconsistencia de configuración o 
                            build entre entornos.
                            <br>
                            <br>
                            <img class="imagen_ejemplo_leccion" src="../../../assets/img/modulo_3/sindto.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Función de los Repositorios Dedicados
                            </h4>
                            Herramientas como JFrog Artifactory o Nexus son Repositorios de 
                            Artefactos dedicados, que son distintos de los repositorios de código 
                            (Git). <br>
                            Estos repositorios cumplen múltiples roles: 
                                <ol>
                                    <li>Almacenamiento Seguro: Sirven como el punto de verdad único para todos los paquetes binarios. </li>
                                    <li>Gestión de Dependencias: Actúan como proxies para librerías de terceros (ej. Maven Central), permitiendo a la organización controlar la seguridad y disponibilidad de sus dependencias. </li>
                                    <li>Promoción de Artefactos: Gestionan la promoción de un artefacto (ej. "el artefacto 1.2.3 pasó QA, ahora promuévalo a Staging"), facilitando la automatización de la Entrega Continua.</li>
                                </ol>
                            En el siguiente se te explicará mas sobre el tema:
                            <br>
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/mCVQgSyjCkI?si=Dtq1GP-d3zpTwcFQ" 
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

                    <h2>Actividad: Une los conceptos con su definición</h2>
                    <form id="actividad" action="scripts_modulo_3/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <input type="hidden" name="idActividad" value="15">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Artefacto</p>
                                <p>2. Principio de Inmutabilidad</p>
                                <p>3. Repositorio de Código (GIT)</p>
                                <p>4. Repositorio de Artefactos</p>
                                <p>5. Etiquetado Único</p>
                                <p>6. Propósito de la Trazabilidad</p>
                                <p>7. Servidor Proxy para Dependencias</p>
                                <p>8. Entrega Continua (CD)</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Repositorio que almacena paquetes binarios y facilita la promoción entre entornos.</option>
                                    <option value="b">b) El código compilado se etiqueta con el hash de Git o el número de build.</option>
                                    <option value="c">c) El resultado binario final del build exitoso, listo para el despliegue.</option>
                                    <option value="d">d) El mismo paquete que fue probado en CI debe usarse en Producción, sin cambios.</option>
                                    <option value="e">e) El objetivo de la Gestión de Artefactos respecto al despliegue.</option>
                                    <option value="f">f) Herramienta dedicada que gestiona dependencias y artefactos, como Artifactory o Nexus.</option>
                                    <option value="g">g) El sistema que almacena el código fuente (archivos de texto).</option>
                                    <option value="h">h) Saber exactamente qué commit de Git corresponde al software que se ejecuta en Producción.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_3/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 4 de 5
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_3/validar_actividades/validar_actividades_leccion_4.js?v=1.0"></script>
</body>
</html>
