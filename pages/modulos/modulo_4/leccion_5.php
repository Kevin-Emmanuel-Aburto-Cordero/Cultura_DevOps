<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_4/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 5 - Estrategias de Despliegue de Bajo Riesgo (Canary y Azul/Verde)</title>
</head>
<body>
    <input type="hidden" name="idActividad" value="7">
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
                    <?php include("scripts_modulo_4/leccion_5/leccion_5_scripts.php"); ?>
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
                                Técnicas para Minimizar la Interrupción y Garantizar la Reversión Rápida
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Las estrategias de despliegue son cruciales para reducir el riesgo en 
                            Producción. Su objetivo principal es: 1) Limitar el impacto de un fallo 
                            al menor número de usuarios posible y 2) Garantizar que la reversión (roll-
                            back) sea casi instantánea.
                            <h4>
                                Despliegue Azul/Verde (Blue/Green)
                            </h4>
                            Se mantienen dos entornos de producción completamente separados 
                            (generalmente detrás de un Load Balancer). El entorno Azul tiene la 
                            versión antigua, y el Verde tiene la nueva versión. Al momento de la 
                            liberación, el tráfico se conmuta del Azul al Verde en una sola operación 
                            del Load Balancer. Si surge un fallo, la reversión es inmediata 
                            simplemente devolviendo el tráfico al entorno Azul, el cual se mantuvo 
                            activo como fallback. El downtime es virtualmente cero.
                            <img src="../../../assets/img/modulo_4/azulverde.png" alt="Azul Verde">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Despliegue Canary
                            </h4>
                            Este es un despliegue incremental. Se despliega la nueva versión 
                            ("Canary") a un pequeño grupo inicial de servidores que solo reciben, por 
                            ejemplo, el 1% del tráfico total. El equipo monitorea exhaustivamente las 
                            métricas y logs de ese pequeño grupo. Si el monitoreo se mantiene 
                            estable por un tiempo definido, el tráfico se incrementa gradualmente (ej. 
                            10%, 50%, 100%). Esto permite una detección temprana y controlada del
                            impacto de un fallo.
                            <h4>
                                Prioridad Operacional
                            </h4>
                            La clave del éxito de estas técnicas es que la Reversión debe ser tan o 
                            más automatizada y probada que el Despliegue. La velocidad del roll-back 
                            es lo que define la confiabilidad del proceso de CD.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/mOjMHTcfuIw?si=XC3LR9yD4NDal6qu" 
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
                    <form id="actividad" action="scripts_modulo_4/leccion_5/registrar_actividad_leccion_5.php" method="POST">
                        <input type="hidden" name="idActividad" value="21">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Despliegue Azul/Verde (Blue/Green)</p>
                                <p>2. Despliegue Canary</p>
                                <p>3. Entorno Blue</p>
                                <p>4. Conmutación de Tráfico</p>
                                <p>5. Velocidad del Roll-back</p>
                                <p>6. Objetivo Principal</p>
                                <p>7. Detección Temprana</p>
                                <p>8. Fallo Contenido</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El entorno que permanece activo con la versión antigua para una reversión inmediata.</option>
                                    <option value="b">b) La velocidad de la reversión en caso de fallo crítico en la nueva versión.</option>
                                    <option value="c">c) Estrategia que minimiza el riesgo al exponer la nueva versión a un pequeño porcentaje de usuarios iniciales.</option>
                                    <option value="d">d) Garantiza que la reversión sea instantánea con cero downtime.</option>
                                    <option value="e">e) El riesgo principal de un Canary que se intenta mitigar con el monitoreo.</option>
                                    <option value="f">f) El mecanismo utilizado en Azul/Verde para cambiar de la versión vieja a la nueva.</option>
                                    <option value="g">g) Estrategia de despliegue que implica mantener dos entornos idénticos y cambiar el Load Balancer.</option>
                                    <option value="h">h) La principal ventaja del Canary al permitir la identificación de errores antes de un despliegue completo.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_4/leccion_5/mostrar_calificacion_leccion_5.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 5 de 5
        </div>
    </div>
    <div id="mensajeError"></div>
    <script src="../../../assets/js/modulo_4/validar_actividades/validar_actividades_leccion_5.js?v=1.0"></script>
</body>
</html>
