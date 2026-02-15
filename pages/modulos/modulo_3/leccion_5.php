<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_3/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 5 - Monitoreo, Visibilidad y Ciclo de Retroalimentación</title>
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
                     <form action="modulo_3_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 5</button>
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
                    <?php include("scripts_modulo_3/leccion_5/leccion_5_scripts.php"); ?>
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
                                El Principio del Feedback Rápido y la Prioridad del "Rojo"
                            </h1>
                            <h4>
                                Monitoreo como Columna Vertebral
                            </h4>
                            La Integración Continua requiere una cultura de vigilancia constante. <br>
                            La actividad de monitoreo se centra en reducir el Tiempo Medio para 
                            Detectar un Fallo (MTTD). El servidor CI debe estar configurado para 
                            recopilar métricas sobre la duración de los builds, la tasa de éxito de las 
                            pruebas y la frecuencia de las integraciones. Estos datos se utilizan no 
                            solo para reaccionar a los fallos, sino para optimizar el proceso de CI.
                            <br>
                            <br>
                            <h4>
                                Visibilidad y la Responsabilidad Colectiva
                            </h4>
                            La información sobre la salud del build no debe ser privada; debe ser 
                            omnipresente. Esto se logra mediante Dashboards públicos y visuales (ej.
                             un semáforo virtual en una pantalla grande) que muestran el estado del 
                             pipeline en tiempo real. Esto fomenta la responsabilidad colectiva: todo el 
                             equipo ve el estado "rojo" y se siente impulsado a participar en la 
                             corrección. Las notificaciones automáticas e inmediatas a través de 
                             canales directos (Slack, Teams) garantizan que el desarrollador 
                             responsable sea alertado antes de que termine su café.
                             <br>
                             <br>
                             <img class="imagen_ejemplo" src="../../../assets/img/modulo_3/diagrama-principios-del-feedback.png" alt="Pricipios del Feedback">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                La Prioridad Absoluta del "Rojo"
                            </h4>
                            La regla de oro cultural de la CI: si el build está roto ("rojo"), todo lo demás 
                            se detiene. El equipo debe cesar el desarrollo de nuevas features y 
                            colaborar para restaurar la funcionalidad del pipeline a "verde". <br>
                            Esta disciplina garantiza que la deuda técnica se pague de inmediato y 
                            evita que un defecto se acumule. El feedback inmediato permite al 
                            desarrollador arreglar el problema en minutos (mientras el cambio está 
                            fresco), en lugar de horas o días, manteniendo el Tiempo Medio 
                            para Reparar (MTTR) extremadamente bajo.
                            <br><br>
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_3/responsabilidad.png" alt="Pricipios del Feedback">
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
                    <form id="actividad" action="scripts_modulo_3/leccion_5/registrar_actividad_leccion_5.php" method="POST">
                        <input type="hidden" name="idActividad" value="16">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Prioridad Máxima del Equipo</p>
                                <p>2. MTTD (Tiempo Medio para Detectar un Fallo)</p>
                                <p>3. Dashboards de Visibilidad</p>
                                <p>4. Notificaciones Inmediatas</p>
                                <p>5. El estado "Rojo" del Build</p>
                                <p>6. Ciclo de Retroalimentación Rápida</p>
                                <p>7. Monitoreo Constante</p>
                                <p>8. MTTR (Tiempo Medio para Reparar)</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Indicadores visuales que muestran la salud del pipeline (verde/rojo) para todo el equipo.</option>
                                    <option value="b">b) La clave para que la corrección de errores sea rápida y económica.</option>
                                    <option value="c">c) Canales utilizados para alertar al equipo inmediatamente cuando el build falla.</option>
                                    <option value="d">d) El tiempo que transcurre desde que se introduce un defecto hasta que es detectado por el sistema CI.</option>
                                    <option value="e">e) La regla de que el desarrollador debe corregir el build roto antes de hacer cualquier otra cosa.</option>
                                    <option value="f">f) Objetivo principal de esta lección: una cultura de vigilancia constante.</option>
                                    <option value="g">g) El resultado directo de un build fallido que requiere una acción urgente.</option>
                                    <option value="h">h) Métrica que se mantiene baja gracias a la rapidez de las notificaciones.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_3/leccion_5/mostrar_calificacion_leccion_5.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_3/validar_actividades/validar_actividades_leccion_5.js?v=1.0"></script>
</body>
</html>
