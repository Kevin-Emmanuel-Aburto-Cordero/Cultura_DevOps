<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_6/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - Contenedores (Docker): La Unidad de Despliegue Inmutable</title>
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
                    <?php include("scripts_modulo_6/leccion_1/leccion_1_scripts.php"); ?>
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
                                Estandarizando el Entorno de Ejecución
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Un Contenedor es un paquete de software ligero, ejecutable e inmutable 
                            que incluye todo lo necesario para correr una aplicación: código, runtime, 
                            bibliotecas y configuraciones. Es la aplicación de la Infraestructura 
                            Inmutable (Módulo 5.3) al código de la aplicación.
                            <br>
                            <h4>
                                Diferencia con VMs
                            </h4>
                            A diferencia de una Máquina Virtual (VM), que emula un hardware 
                            completo y requiere su propio Sistema Operativo (SO) invitado, un 
                            contenedor comparte el núcleo (kernel) del SO huésped. Esto los hace 
                            mucho más ligeros, rápidos de iniciar y más eficientes en el uso de 
                            recursos.
                            <br>
                            <img src="../../../assets/img/modulo_6/entornor.jpg" alt="Entorno de Ejecucion" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Docker y el Dockerfile
                            </h4>
                            Docker es la plataforma más popular para crear y gestionar contenedores. 
                            La definición de lo que hay dentro del contenedor se escribe en un archivo 
                            de texto simple llamado Dockerfile. Este archivo define la imagen base, las 
                            instrucciones para instalar dependencias y el comando de inicio de la 
                            aplicación.
                            <br>
                            <h4>
                                Beneficio Clave
                            </h4>
                            El contenedor resuelve el problema del Configuration Drift en el código: 
                            "Funciona en mi máquina, funciona en todos lados". El contenedor se 
                            convierte en el artefacto inmutable que se promueve a través del pipeline 
                            de CD, garantizando la paridad entre Dev y Prod.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/X_h974EvBKU?si=TMLlIiQumblozks2" 
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
                    <form id="actividad" action="scripts_modulo_6/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="27">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Contenedor</p>
                                <p>2. Docker</p>
                                <p>3. Máquina Virtual (VM)</p>
                                <p>4. Dockerfile</p>
                                <p>5. Núcleo (Kernel)</p>
                                <p>6. Artefacto Inmutable</p>
                                <p>7. Eficiencia en Recursos</p>
                                <p>8. Paridad de Entornos</p>
                                <p>9. Problema de "Funciona en mi máquina"</p>
                                <p>10. Infraestructura Inmutable</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <<option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se encarga de construir y ejecutar los contenedores. Es la plataforma más popular.</option>
                                    <option value="b">b) El archivo de texto simple que define la receta para construir una imagen de contenedor.</option>
                                    <option value="c">c) La unidad de despliegue inmutable que incluye código, runtime y configuraciones.</option>
                                    <option value="d">d) El componente del sistema operativo que el contenedor comparte con otros contenedores.</option>
                                    <option value="e">e) El contenedor resuelve este problema al garantizar la paridad entre entornos.</option>
                                    <option value="f">f) Requiere un sistema operativo invitado completo, haciéndola más lenta y pesada que un contenedor.</option>
                                    <option value="g">g) El resultado directo de que el contenedor comparta el kernel del SO huésped.</option>
                                    <option value="h">h) El principio de la IaC que se aplica al código y la configuración del contenedor.</option>
                                    <option value="i">i) El contenedor se convierte en el paquete binario que se promueve a través del pipeline de CD.</option>
                                    <option value="j">j) El principal objetivo de los contenedores en la fase de Despliegue Continuo (CD).</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_6/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_6/validar_actividades/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>
