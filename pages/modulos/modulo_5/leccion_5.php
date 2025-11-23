<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_5/leccion_1.css?v=1.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 5 - IaC y el Pipeline de Entrega Continua (CD)</title>
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
                    <?php include("scripts_modulo_5/leccion_5/leccion_5_scripts.php"); ?>
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
                                La Integración del Código de Infraestructura
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            IaC lleva la infraestructura al flujo de trabajo CI/CD. El código de la infraestructura reside en Git junto al código de la aplicación (o en un repositorio separado) y sigue el mismo proceso de validación.
                            <h4>
                                Fase CI (Integración de IaC)
                            </h4>
                            El código de Terraform o Ansible se somete a Análisis Estático (ej. terraform validate o linters de Ansible) en el pipeline de CI. Esto verifica la sintaxis, las mejores prácticas y las políticas de seguridad antes de que se toque la infraestructura real.
                            <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/3zX2o3NjbnM?si=TYxGlHNPkbiOU3ff" 
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
                                Fase CD (Despliegue de IaC)
                            </h4>
                            El pipeline utiliza el comando terraform plan para generar un informe de los cambios propuestos a la infraestructura. Este plan puede requerir una aprobación manual (Manual Gate en CD). Una vez aprobado, se ejecuta terraform apply, aprovisionando o modificando el entorno automáticamente (ej. creando un nuevo entorno de Staging para el build).
                            <h4>
                                Beneficio Final
                            </h4>
                            IaC permite el concepto de Entornos Desechables: la capacidad de crear un entorno de pruebas completo, usarlo para la validación E2E (Lección 4.3) y luego destruirlo (terraform destroy), optimizando costos y garantizando que las pruebas siempre se realicen en un entorno limpio y estandarizado.
                            <img src="../../../assets/img/modulo_5/infrastructure_as_code.webp" alt="Integraccion" class="imagen_ejemplo">
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
                    <form id="actividad" action="scripts_modulo_5/leccion_5/registrar_actividad_leccion_5.php" method="POST">
                        <input type="hidden" name="idActividad" value="26">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Entornos Desechables</p>
                                <p>2. terraform validate</p>
                                <p>3. terraform plan</p>
                                <p>4. Fase CI (Integración de IaC)</p>
                                <p>5. terraform apply</p>
    
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El paso en la fase de CD que genera un informe de los cambios propuestos antes de modificar la infraestructura real.</option>
                                    <option value="b">b) El beneficio clave de IaC que permite crear un entorno de prueba, usarlo y luego destruirlo para ahorrar costos.</option>
                                    <option value="c">c) La fase del pipeline de CD donde se ejecuta el despliegue automático del código de la infraestructura.</option>
                                    <option value="d">d) El comando utilizado en la fase CI para verificar la sintaxis y las políticas de seguridad del código de infraestructura.</option>
                                    <option value="e">e) El comando que se ejecuta en la fase CD para aprovisionar o modificar la infraestructura automáticamente (aplicar los cambios).</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El paso en la fase de CD que genera un informe de los cambios propuestos antes de modificar la infraestructura real.</option>
                                    <option value="b">b) El beneficio clave de IaC que permite crear un entorno de prueba, usarlo y luego destruirlo para ahorrar costos.</option>
                                    <option value="c">c) La fase del pipeline de CD donde se ejecuta el despliegue automático del código de la infraestructura.</option>
                                    <option value="d">d) El comando utilizado en la fase CI para verificar la sintaxis y las políticas de seguridad del código de infraestructura.</option>
                                    <option value="e">e) El comando que se ejecuta en la fase CD para aprovisionar o modificar la infraestructura automáticamente (aplicar los cambios).</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El paso en la fase de CD que genera un informe de los cambios propuestos antes de modificar la infraestructura real.</option>
                                    <option value="b">b) El beneficio clave de IaC que permite crear un entorno de prueba, usarlo y luego destruirlo para ahorrar costos.</option>
                                    <option value="c">c) La fase del pipeline de CD donde se ejecuta el despliegue automático del código de la infraestructura.</option>
                                    <option value="d">d) El comando utilizado en la fase CI para verificar la sintaxis y las políticas de seguridad del código de infraestructura.</option>
                                    <option value="e">e) El comando que se ejecuta en la fase CD para aprovisionar o modificar la infraestructura automáticamente (aplicar los cambios).</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El paso en la fase de CD que genera un informe de los cambios propuestos antes de modificar la infraestructura real.</option>
                                    <option value="b">b) El beneficio clave de IaC que permite crear un entorno de prueba, usarlo y luego destruirlo para ahorrar costos.</option>
                                    <option value="c">c) La fase del pipeline de CD donde se ejecuta el despliegue automático del código de la infraestructura.</option>
                                    <option value="d">d) El comando utilizado en la fase CI para verificar la sintaxis y las políticas de seguridad del código de infraestructura.</option>
                                    <option value="e">e) El comando que se ejecuta en la fase CD para aprovisionar o modificar la infraestructura automáticamente (aplicar los cambios).</option>
                                </select><br>

                                <select name="r5" id="r5">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) El paso en la fase de CD que genera un informe de los cambios propuestos antes de modificar la infraestructura real.</option>
                                    <option value="b">b) El beneficio clave de IaC que permite crear un entorno de prueba, usarlo y luego destruirlo para ahorrar costos.</option>
                                    <option value="c">c) La fase del pipeline de CD donde se ejecuta el despliegue automático del código de la infraestructura.</option>
                                    <option value="d">d) El comando utilizado en la fase CI para verificar la sintaxis y las políticas de seguridad del código de infraestructura.</option>
                                    <option value="e">e) El comando que se ejecuta en la fase CD para aprovisionar o modificar la infraestructura automáticamente (aplicar los cambios).</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_5/leccion_5/mostrar_calificacion_leccion_5.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_5/validar_actividades/validar_actividades_leccion_5.js?v=1.0"></script>
</body>
</html>