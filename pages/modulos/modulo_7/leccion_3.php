<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_7/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 3 - SLIs, SLOs y SLA: Midiendo el Éxito de Negocio</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_7_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 7</button>
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
                    <?php include("scripts_modulo_7/leccion_3/leccion_3_scripts.php"); ?>
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
                                La Ingeniería de Fiabilidad y el Compromiso de Servicio
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La Ingeniería de Fiabilidad del Sitio (Site Reliability Engineering - SRE) utiliza los indicadores de servicio para definir objetivamente si el sistema está funcionando bien o no desde la perspectiva del cliente.
                            <br>
                            <h4>
                                1. Indicadores de Nivel de Servicio (SLI - Service Level Indicator)
                            </h4>
                            Una métrica específica que mide la calidad del servicio ofrecido a los clientes. Es la fuente de datos objetiva que responde a: ¿Qué tan bien estamos sirviendo a los usuarios? Ejemplos: Disponibilidad (99.9% de solicitudes respondieron con 200), Latencia (95% de las solicitudes respondieron en menos de 300ms).
                            <br>
                            <h4>
                                2. Objetivos de Nivel de Servicio (SLO - Service Level Objective)
                            </h4>
                            Es el umbral o la meta interna establecida para los SLIs. Es el compromiso explícito entre el equipo de desarrollo y el de operaciones. El incumplimiento de un SLO indica que es necesario detener el desarrollo de features y enfocarse en la fiabilidad.
                            <img src="../../../assets/img/modulo_7/fiabilidad.jpg" alt="Fiabilidad" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                3. Acuerdos de Nivel de Servicio (SLA - Service Level Agreement)
                            </h4>
                            Es un contrato legal o formal con el cliente final. Si se incumple un SLA (es decir, el SLO ha fallado catastróficamente), el proveedor de servicios podría tener que pagar penalizaciones o créditos a los clientes.
                            <br>
                            <h4>
                                Mecanismo de Confianza
                            </h4>
                            Los SLOs definen el margen de error (Error Budget). Si se consume demasiado rápido este margen (el tiempo que se permite que el servicio falle sin penalización), se genera presión para priorizar la estabilidad sobre las nuevas features, promoviendo la colaboración entre Dev y Ops.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/1fzaJC8Pr0A?si=sJRk6nDiWjkMzEE_" 
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
                    <form id="actividad" action="scripts_modulo_7/leccion_3/registrar_actividad_leccion_3.php" method="POST">
                        <input type="hidden" name="idActividad" value="33">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. SLI (Service Level Indicator)</p>
                                <p>2. SLO (Service Level Objective)</p>
                                <p>3. SLA (Service Level Agreement)</p>
                                <p>4. Latencia</p>
                                <p>5. Disponibilidad</p>
                                <p>6. Margen de Error (Error Budget)</p>
                                <p>7. SRE (Site Reliability Engineering)</p>
                                <p>8. Alertas Accionables</p>
                                <p>9. Priorizar Fiabilidad</p>
                                <p>10. Quality Gate</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r9" id="r9">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>

                                <select name="r10" id="r10">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El tiempo que se permite que el servicio falle sin incumplir el SLO; si se agota, se detiene el desarrollo de features.</option>
                                    <option value="b">b) Una métrica específica que mide la calidad del servicio ofrecido a los clientes (ej. Latencia, Disponibilidad).</option>
                                    <option value="c">c) La meta o el umbral interno establecido para los SLIs. Si se incumple, se prioriza la fiabilidad.</option>
                                    <option value="d">d) Notificaciones que deben ser accionables e indicar qué está fallando y quién debe responder.</option>
                                    <option value="e">e) El objetivo del equipo de fiabilidad que busca equilibrar la velocidad (nuevas features) y la estabilidad.</option>
                                    <option value="f">f) Un contrato legal con el cliente final que puede implicar penalizaciones si se incumple.</option>
                                    <option value="g">g) El acto de priorizar la fiabilidad sobre la velocidad de desarrollo cuando el Error Budget se ha consumido.</option>
                                    <option value="h">h) El SLI que se mide como el porcentaje de tiempo que el servicio está operativo y respondiendo correctamente (ej. 99.9%).</option>
                                    <option value="i">i) El SLI que mide el tiempo de respuesta de las solicitudes de los usuarios.</option>
                                    <option value="j">j) El rol de la alerta en el pipeline de CD, donde puede activar un roll-back si el SLO falla.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                        

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_7/leccion_3/mostrar_calificacion_leccion_3.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 3 de 4
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_7/validar_actividades/validar_actividades_leccion_3.js?v=1.0"></script>
</body>
</html>
