<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_4/leccion_1.css?v=2.0">
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
                    <?php include("scripts_modulo_4/leccion_4/leccion_4_scripts.php"); ?>
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
                                Estrategia de Control, Canary Releasing y Mitigación de Riesgos
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La adopción de Feature Toggles (o Feature Flags) es una práctica de ingeniería que separa la acción de Desplegar Código (que debe ser frecuente) de la acción de Liberar Funcionalidad (que debe ser controlada por el negocio).
                            <h4>
                                Mecanismo Operativo
                            </h4>
                            Un Feature Toggle es simplemente una variable condicional en el código de la aplicación. El código de la nueva feature está envuelto en una estructura if (feature_toggle_X_activo) { ... }. Esto permite a los desarrolladores hacer commit constante (TBD) a la rama principal, incluso si la funcionalidad no está terminada. El código se despliega a Producción, pero se mantiene "apagado" por defecto.
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_4/prueba.png" alt="Pruebas">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Ventajas Avanzadas
                            </h4>
                           <ol>
                            <li>Reversión Instantánea: Si la feature activada causa un fallo en Producción, el equipo de Operaciones puede desactivarla en segundos sin necesitar un roll-back de código.</li><br>
                            <li>Despliegues Controlados (Canary Release): El toggle puede ser configurado para activarse solo para un subconjunto de usuarios (ej. el 5% de los usuarios de California), permitiendo un roll-out gradual supervisado por los equipos de monitoreo</li><br>
                            <li>Pruebas A/B: Se pueden usar toggles para exponer dos versiones diferentes de una interfaz a usuarios distintos y medir qué versión tiene mejor rendimiento de negocio.</li>
                           </ol>
                           <h4>
                                Práctica de Seguridad
                           </h4>
                           El uso de toggles aumenta la confianza del negocio para permitir Despliegues Continuos, ya que la liberación de valor sigue siendo una decisión controlada, aunque el código esté constantemente desplegado.
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
                    <form id="actividad" action="scripts_modulo_4/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <input type="hidden" name="idActividad" value="20">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Feature Toggle / Feature Flag</p>
                                <p>2. Desacoplamiento</p>
                                <p>3. Desarrollo Basado en Troncal (Trunk-Based Development - TBD)</p>
                                <p>4. Funcionalidad Oculta</p>
                                <p>5. Mitigación de Riesgo Crítico</p>
                                <p>6. Switch o Interruptor Lógico</p>
                                <p>7. Liberación Canary</p>
                                <p>8. Reversión Instantánea</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>

                                <select name="r6" id="r6">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>

                                <select name="r7" id="r7">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>

                                <select name="r8" id="r8">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El código de la nueva feature está presente en Producción, pero no es visible para los usuarios.</option>
                                    <option value="b">b) Permite revertir una funcionalidad defectuosa en Producción sin hacer un roll-back de código.</option>
                                    <option value="c">c) La clave para poder hacer roll-back de una feature en segundos.</option>
                                    <option value="d">d) Se logra al separar el acto de enviar código al servidor (despliegue) de su activación (liberación).</option>
                                    <option value="e">e) El objetivo de la liberación gradual y controlada a un subconjunto de usuarios.</option>
                                    <option value="f">f) Permite a los desarrolladores hacer commit constante a la rama principal aunque la feature no esté terminada.</option>
                                    <option value="g">g) Mecanismo de configuración que enciende o apaga condicionalmente una feature en el código.</option>
                                    <option value="h">h) El interruptor que permite a la aplicación activar o desactivar una funcionalidad en tiempo real.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_4/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_4/validar_actividades/validar_actividades_leccion_4.js?v=1.0"></script>
</body>
</html>
