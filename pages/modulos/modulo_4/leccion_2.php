<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_4/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 2 - La Promoción del Artefacto y los Entornos Secuenciales</title>
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
                    <?php include("scripts_modulo_4/leccion_2/leccion_2_scripts.php"); ?>
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
                                Estandarización de Entornos y Flujo de Promoción
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            El proceso de CD es el mecanismo que gestiona la Promoción del 
                            Artefacto Inmutable (Módulo 3.4) a través de entornos lógicos 
                            secuenciales, asegurando que el código se comporte idénticamente en 
                            cada paso.
                            <br>
                            <h4>
                                Estrategia de Entornos
                            </h4>
                            <ol>
                                <li>QA/Testing: Entorno de uso interno, donde el pipeline automatizado ejecuta las pruebas funcionales de sistema (E2E). </li><br>
                                <li>Staging/Pre-producción: Este entorno es la réplica exacta de Producción en términos de hardware, configuración y conectividad a servicios externos. Su objetivo es identificar cualquier fallo de infraestructura o dependencia de último minuto antes del lanzamiento real. Es aquí donde el software se prueba por parte de usuarios clave o Product Owners. </li><br>
                                <li>Producción: El entorno final. La clave es que la diferencia entre Staging y Producción debe ser cero, gracias a IaC.</li>
                            </ol>
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_4/CICD.png" alt="tema">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Idempotencia y Automatización
                            </h4>
                            Los scripts de despliegue en el pipeline de CD deben ser idempotentes: 
                            ejecutarlos 1 o 100 veces debe resultar en el mismo estado de 
                            infraestructura y aplicación. Esto se logra usando herramientas 
                            declarativas (ej. Ansible, Chef, Puppet, o IaC como Terraform) que 
                            gestionan el estado del entorno de manera robusta y auditable. La 
                            ausencia de la intervención humana en la ejecución del script de 
                            despliegue reduce el error humano a cero.
                            <h4>
                                Trazabilidad Continua
                            </h4>
                            El sistema debe registrar qué Artefacto versionado y etiquetado fue 
                            desplegado en qué entorno y cuándo. Esta trazabilidad es esencial para la 
                            auditoría y para la reversión rápida en caso de problemas.
                            <br>
                            <img class="imagen_ejemplo" src="../../../assets/img/modulo_4/tema.webp" alt="tema">
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
                    <form id="validar_actividad" action="scripts_modulo_4/leccion_2/registrar_actividad_leccion_2.php" method="POST">
                        <div class="columna">
                        <input type="hidden" name="idActividad" value="18">
                        <h3>1. ¿Cuál es la característica fundamental que debe mantener el artefacto (paquete binario) al ser promovido a través de los entornos de CD?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_1" value="a">a) Su tamaño compacto para un despliegue rápido.</label><br>
                        <label><input type="radio" name="pregunta_1" value="b">b) Su Inmutabilidad, asegurando que el mismo paquete probado se use en Producción.</label><br>
                        <label><input type="radio" name="pregunta_1" value="c">c) Su adaptabilidad para ser reconfigurado en cada entorno.</label><br>
                        </div>
                        <div class="columna">
                        <h3>2. ¿Cuál es el propósito principal del entorno de Staging/Pre-producción en la secuencia de CD?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_2" value="a">a) Ahorrar costos de infraestructura al usarlo como un entorno compartido.</label> <br>
                        <label><input type="radio" name="pregunta_2" value="b">b) Ejecutar únicamente las pruebas unitarias que fallaron en CI.</label><br>
                        <label><input type="radio" name="pregunta_2" value="c">c) Servir como la última réplica fiel de Producción para la validación de Product Owners y de configuración de último minuto.</label><br>
                        </div>
                        <div class="columna">
                        <h3>3. ¿Qué garantiza el uso de Infraestructura como Código (IaC) en la gestión de Entornos Secuenciales?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_3" value="a">a) Que el entorno de QA sea radicalmente diferente al de Producción para una mejor prueba.</label><br>
                        <label><input type="radio" name="pregunta_3" value="b">b) La paridad y la consistencia entre los entornos de Staging y Producción.</label><br>
                        <label><input type="radio" name="pregunta_3" value="c">c) La velocidad del código de la aplicación.</label><br>
                        </div>
                        <div class="columna">
                        <h3>4. En el contexto de los scripts de despliegue, ¿qué significa que una operación debe ser idempotente?</h3> <!--Correcto: -->
                        <label><input type="radio" name="pregunta_4" value="a">a) Que la operación puede revertirse fácilmente a un estado anterior.</label><br>
                        <label><input type="radio" name="pregunta_4" value="b">b) Que la operación solo puede ser ejecutada por el Servidor CI.</label><br>
                        <label><input type="radio" name="pregunta_4" value="c">c) Que la operación, sin importar cuántas veces se ejecute, siempre produce el mismo estado final deseado.</label><br>
                        </div>
                        <div class="columna">
                        <h3>5. ¿Cuál es uno de los pasos de configuración post-despliegue que debe ser orquestado por el pipeline de CD después de la instalación del artefacto?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_5" value="a">a) La ejecución de migrations (migraciones) de bases de datos o actualización de variables de entorno.</label><br>
                        <label><input type="radio" name="pregunta_5" value="b">b) Escribir el código fuente de la próxima feature.</label><br>
                        <label><input type="radio" name="pregunta_5" value="c">c) La aprobación manual del líder de proyecto para el build de CI.</label><br>
                        </div>
                        <div class="columna">
                        <h3>6. ¿Qué elemento del pipeline de CI es el punto de inicio para la fase de promoción en el pipeline de CD?</h3> <!--Correcto: b-->
                        <label><input type="radio" name="pregunta_6" value="a">a) El hash de la base de datos de producción.</label><br>
                        <label><input type="radio" name="pregunta_6" value="b">b) El Artefacto Inmutable, una vez que ha pasado los Quality Gates de CI.</label><br>
                        <label><input type="radio" name="pregunta_6" value="c">c) El commit de código del desarrollador.</label><br>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>
                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_4/leccion_2/mostrar_calificacion_leccion_2.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_4/validar_actividades/validar_actividades_leccion_2.js?v=1.0"></script>
</body>
</html>
