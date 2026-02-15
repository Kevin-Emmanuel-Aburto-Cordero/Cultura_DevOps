<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_5/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - Modelos de Aprovisionamiento: Declarativo vs. Imperativo</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                     <form action="modulo_5_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir de la actividad?, si sales perderas tus respuestas.');">
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
                    <?php include("scripts_modulo_5/leccion_2/leccion_2_scripts.php"); ?>
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
                                Cómo Le Decimos a la Máquina lo que Queremos
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            Existen dos enfoques principales sobre cómo se le indica a una herramienta de IaC que aprovisione o configure la infraestructura.
                            <br>
                            <h4>
                                Aprovisionamiento Declarativo (El Qué)
                            </h4>
                            En este modelo, el usuario describe el estado final deseado del sistema (el "qué"). Por ejemplo: "Quiero 3 instancias de AWS, que usen la imagen X, con un balanceador de carga". La herramienta (ej. Terraform, CloudFormation, Kubernetes) es responsable de descubrir la serie de pasos necesarios para llegar a ese estado y hacer las correcciones si el estado actual difiere del deseado. Esto es inherentemente más idempotente y reduce la complejidad para el usuario.
                            <br>
                            <img src="../../../assets/img/modulo_5/humano-pc.jpg" alt="Humano PC" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Aprovisionamiento Imperativo (El Cómo)
                            </h4>
                            En este modelo, el usuario define la secuencia exacta de comandos que la herramienta debe ejecutar (el "cómo"). Por ejemplo: "1. Crear la instancia. 2. Esperar 30 segundos. 3. Instalar Nginx. 4. Iniciar el servicio Nginx". La herramienta (ej. Ansible, Chef, SaltStack) ejecuta las instrucciones en el orden dado. Si la tarea se interrumpe o falla, puede requerir intervención para reanudar el proceso en el punto correcto.
                            <br>
                            <h4>
                                Uso Común
                            </h4>
                            Declarativo se usa más para Aprovisionamiento de recursos de infraestructura (nubes); Imperativo se usa más para Gestión de Configuración (Configuration Management) dentro de esos recursos (instalar software, configurar archivos).
                            <img src="../../../assets/img/modulo_5/humano-ia.webp" alt="Humano IA" class="imagen_ejemplo">
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

                    <h2>
                        Actividad: Responde las preguntas y selecciona la respuesta correcta
                    </h2>
                    <form id="validar_actividad" action="scripts_modulo_5/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="23">
                        <h3>1. ¿Qué modelo de aprovisionamiento se enfoca en describir el estado final deseado del sistema (el 'qué')?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Modelo Imperativo</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Modelo Manual</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Modelo Declarativo</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Qué herramienta de IaC es un ejemplo de un enfoque principalmente Declarativo para el aprovisionamiento de infraestructura en la nube?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Ansible</label><br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Terraform</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Shell Script (Bash)</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Cuál es la principal desventaja del modelo Imperativo para la gestión de configuración?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Requiere definir la secuencia exacta y el orden de cada comando, lo que aumenta la complejidad.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) La herramienta es responsable de corregir la desviación de configuración.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) Solo funciona para la nube, no para servidores locales.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. ¿En el modelo Declarativo, si la infraestructura ya está en el estado deseado, ¿qué acción realiza la herramienta?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) Ejecuta un comando de reversión (roll-back).</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) No hace nada y sale del proceso, cumpliendo el principio de Idempotencia.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Vuelve a ejecutar todos los pasos, por si acaso.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_5/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-abuela">
        <div class="concluir_actividad">
            Actividades 2 de 5
        </div>
    </div>
    </div><div id="mensajeError" style="color: wheat;"></div>
    <script src="../../../assets/js/modulo_5/validar_actividades/validar_actividades_leccion_2.js?v=1.0"></script>
</body>
</html>
