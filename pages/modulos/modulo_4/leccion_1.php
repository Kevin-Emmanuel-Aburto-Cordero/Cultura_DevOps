<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_4/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 1 - CD vs. CD: Entrega Continua vs. Despliegue Continuo</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_4_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 4</button>
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
                    <?php include("scripts_modulo_4/leccion_1/leccion_1_scripts.php"); ?>
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
                                La Frontera entre la Automatización Total y la Decisión Humana
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Entrega Continua (Continuous Delivery - CD) es la extensión del 
                            proceso de CI que garantiza que el software está siempre listo, probado y 
                            calificado para ser liberado. La distinción crucial con el Despliegue 
                            Continuo (Continuous Deployment - CD) radica en el último paso: la 
                            liberación a Producción.
                            <br>
                            <h4>
                                Entrega Continua (Continuous Delivery)
                            </h4>
                            El pipeline automatiza todas las fases de Build, Prueba y Despliegue hasta 
                            el entorno de Staging. En este punto, el proceso se pausa, requiriendo una 
                            decisión o activación manual (el "botón de despliegue") para que el 
                            artefacto sea liberado a Producción. Esta pausa se utiliza a menudo por 
                            razones de negocio, compliance o para esperar un horario de baja 
                            actividad. El beneficio clave es que el riesgo de la liberación se ha 
                            reducido casi por completo, ya que el proceso está automatizado, solo el 
                            momento es manual.
                            <br>
                            <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/fiJod8T4P1c?si=cX64NF5hicOJNk4F" 
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
                            <h4>
                                Despliegue Continuo (Continuous Deployment)
                            </h4>
                            Representa la madurez máxima de DevOps. Si el software pasa todas las 
                            validaciones automatizadas (desde Unitarias hasta Pruebas de Carga 
                            en Staging), se libera automáticamente a Producción sin intervención 
                            humana. Esta práctica exige una confianza absoluta en el sistema de 
                            monitoreo, roll-back y cobertura de pruebas. El principal impulsor es 
                            maximizar la Frecuencia de Despliegue y reducir el Time to Market al 
                            mínimo.
                            <br>
                            <h4>
                                Práctica Cultural
                            </h4>
                            El objetivo de DevOps es llegar al Despliegue Continuo, pero muchas 
                            organizaciones operan en Entrega Continua por la necesidad de control 
                            regulatorio o supervisión de negocio.
                            <br>
                            <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/YxBeNl7hjF4?si=CSml2cZsYQ-emvr3" 
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
                    <form id="actividad" action="scripts_modulo_4/leccion_1/registrar_actividad_leccion_1.php" method="POST">
                        <input type="hidden" name="idActividad" value="17">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Entrega Continua (Continuous Delivery)</p>
                                <p>2. Despliegue Continuo (Continuous Deployment)</p>
                                <p>3. Requisito de Negocio</p>
                                <p>4. Pausa/Aprobación Manual</p>
                                <p>5. Confianza Operacional</p>
                                <p>6. Objetivo Principal de la CI/CD</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El nivel más alto de automatización, donde el código se libera automáticamente a Producción.</option>
                                    <option value="b">b) La acción final que detiene el pipeline y requiere la intervención humana.</option>
                                    <option value="c">c) El resultado es que el software está siempre listo y probado para ser liberado.</option>
                                    <option value="d">d) Se logra si la organización tiene confianza absoluta en su monitoreo y cobertura de pruebas.</option>
                                    <option value="e">e) El factor que a menudo requiere la pausa y la decisión humana antes de liberar a Producción.</option>
                                    <option value="f">f) Maximizar la Frecuencia de Despliegue y reducir el Time to Market.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El nivel más alto de automatización, donde el código se libera automáticamente a Producción.</option>
                                    <option value="b">b) La acción final que detiene el pipeline y requiere la intervención humana.</option>
                                    <option value="c">c) El resultado es que el software está siempre listo y probado para ser liberado.</option>
                                    <option value="d">d) Se logra si la organización tiene confianza absoluta en su monitoreo y cobertura de pruebas.</option>
                                    <option value="e">e) El factor que a menudo requiere la pausa y la decisión humana antes de liberar a Producción.</option>
                                    <option value="f">f) Maximizar la Frecuencia de Despliegue y reducir el Time to Market.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El nivel más alto de automatización, donde el código se libera automáticamente a Producción.</option>
                                    <option value="b">b) La acción final que detiene el pipeline y requiere la intervención humana.</option>
                                    <option value="c">c) El resultado es que el software está siempre listo y probado para ser liberado.</option>
                                    <option value="d">d) Se logra si la organización tiene confianza absoluta en su monitoreo y cobertura de pruebas.</option>
                                    <option value="e">e) El factor que a menudo requiere la pausa y la decisión humana antes de liberar a Producción.</option>
                                    <option value="f">f) Maximizar la Frecuencia de Despliegue y reducir el Time to Market.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El nivel más alto de automatización, donde el código se libera automáticamente a Producción.</option>
                                    <option value="b">b) La acción final que detiene el pipeline y requiere la intervención humana.</option>
                                    <option value="c">c) El resultado es que el software está siempre listo y probado para ser liberado.</option>
                                    <option value="d">d) Se logra si la organización tiene confianza absoluta en su monitoreo y cobertura de pruebas.</option>
                                    <option value="e">e) El factor que a menudo requiere la pausa y la decisión humana antes de liberar a Producción.</option>
                                    <option value="f">f) Maximizar la Frecuencia de Despliegue y reducir el Time to Market.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El nivel más alto de automatización, donde el código se libera automáticamente a Producción.</option>
                                    <option value="b">b) La acción final que detiene el pipeline y requiere la intervención humana.</option>
                                    <option value="c">c) El resultado es que el software está siempre listo y probado para ser liberado.</option>
                                    <option value="d">d) Se logra si la organización tiene confianza absoluta en su monitoreo y cobertura de pruebas.</option>
                                    <option value="e">e) El factor que a menudo requiere la pausa y la decisión humana antes de liberar a Producción.</option>
                                    <option value="f">f) Maximizar la Frecuencia de Despliegue y reducir el Time to Market.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El nivel más alto de automatización, donde el código se libera automáticamente a Producción.</option>
                                    <option value="b">b) La acción final que detiene el pipeline y requiere la intervención humana.</option>
                                    <option value="c">c) El resultado es que el software está siempre listo y probado para ser liberado.</option>
                                    <option value="d">d) Se logra si la organización tiene confianza absoluta en su monitoreo y cobertura de pruebas.</option>
                                    <option value="e">e) El factor que a menudo requiere la pausa y la decisión humana antes de liberar a Producción.</option>
                                    <option value="f">f) Maximizar la Frecuencia de Despliegue y reducir el Time to Market.</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_4/leccion_1/mostrar_calificacion_leccion_1.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 1 de 5
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_4/validar_actividades/validar_actividades_leccion_1.js?v=1.0"></script>
</body>
</html>
