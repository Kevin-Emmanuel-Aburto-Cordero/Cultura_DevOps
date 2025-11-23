<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_6/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - Imágenes de Contenedores y el Registro (Registry)</title>
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
                    <?php include("scripts_modulo_6/leccion_2/leccion_2_scripts.php"); ?>
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
                                Del Código Fuente al Artefacto Inmutable Final
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Una Imagen de Contenedor es una plantilla de solo lectura que contiene 
                            las capas del sistema de archivos y las configuraciones de la aplicación. El 
                            Contenedor es la instancia en ejecución de esa imagen.
                            <br>
                            <h4>
                                Estructura de Capas
                            </h4>
                            Las imágenes se construyen en capas (cada instrucción del Dockerfile 
                            crea una capa), lo que permite un almacenamiento y una transferencia 
                            muy eficientes. Si dos imágenes comparten la misma imagen base (ej. 
                            Alpine Linux), solo se descarga la capa base una vez.
                            <br>
                            <img src="../../../assets/img/modulo_6/codigo-fuente.png" alt="Codigo Fuente" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                El Proceso de CI/CD
                            </h4>
                            En el pipeline de Integración Continua (CI): 1. El código se somete a 
                            prueba. 2. Se ejecuta el comando docker build (creando la imagen). 3. La 
                            imagen se etiqueta con una versión única (ej. app:v1.2.3).
                            <br>
                            <h4>
                                El Registro (Registry)
                            </h4>
                            El Registro (ej. Docker Hub, AWS ECR, Google Artifact Registry) es el 
                            repositorio centralizado donde se almacenan y gestionan las imágenes de 
                            contenedores versionadas. Funciona de manera similar a un repositorio de 
                            artefactos (Nexus o Artifactory) para binarios tradicionales, siendo el 
                            origen para el despliegue en cualquier entorno.
                            <br>
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/u4wAooiLmRI?si=N65RxX-76SVAVjxZ" 
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
                    <form id="actividad" action="scripts_modulo_6/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <input type="hidden" name="idActividad" value="28">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Imagen de Contenedor</p>
                                <p>2. Capas</p>
                                <p>3. docker build</p>
                                <p>4. Registro (Registry)</p>
                                <p>5. Etiqueta (Tag)</p>
                                <p>6. Artefacto en CI</p>
                                <p>7. AWS ECR</p>
                                <p>8. Versionado</p>
                                <p>9. docker push</p>
                                <p>10. Google Artifact Registry</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para referenciar una imagen específica dentro del Registro con una versión única (ej. app:v1.2.3).</option>
                                    <option value="b">b) El repositorio centralizado donde se almacenan y gestionan las imágenes de contenedores.</option>
                                    <option value="c">c) Repositorio de Registros gestionado por Google.</option>
                                    <option value="d">d) Se utiliza para identificar a qué versión de la aplicación corresponde una imagen.</option>
                                    <option value="e">e) El resultado de ejecutar el Dockerfile; una plantilla de solo lectura del sistema de archivos.</option>
                                    <option value="f">f) Comando que se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile.</option>
                                    <option value="g">g) La forma en que se construyen las imágenes, permitiendo un almacenamiento y transferencia muy eficiente.</option>
                                    <option value="h">h) El resultado del pipeline de CI que se almacena en el Registro.</option>
                                    <option value="i">i) Repositorio de Registros gestionado por Amazon Web Services.</option>
                                    <option value="j">j) El comando que se usa después de construir la imagen para subirla al Registro.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_6/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 2 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_6/validar_actividades/validar_actividades_leccion_2.js?v=1.0"></script>
</body>
</html>
