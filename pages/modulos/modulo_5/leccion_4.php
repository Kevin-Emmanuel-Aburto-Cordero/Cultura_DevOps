<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/img/icons/icons_leccion/Icon_Commission_Event.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/pages/modulos/modulo_5/leccion_1.css?v=2.0">
    <link rel="stylesheet" href="../../../assets/fonts/font.css?v=1.0">
    <title>Leccion 4 - Herramientas Clave de IaC y sus Roles</title>
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
                    <?php include("scripts_modulo_5/leccion_4/leccion_4_scripts.php"); ?>
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
                                Diferentes Herramientas para Diferentes Fases
                            </h1>
                            <h4>
                                Concepto Central
                            </h4>
                            La gestión de la infraestructura se divide en dos fases principales, cada 
                            una con sus herramientas líderes.
                            <br>
                            <h4>
                                Herramientas de Aprovisionamiento (Provisioning)
                            </h4>
                            Se centran en la creación, modificación y eliminación de la infraestructura 
                            a nivel de nube o centro de datos. Crean recursos como VMs, redes 
                            y bases de datos. Líder del mercado: Terraform (multi-nube, declarativo) y 
                            AWS CloudFormation/Azure ARM Templates (nube específica).
                            <br>
                            <img src="../../../assets/img/modulo_5/aprovisionamiento.png" alt="Aprovisionamiento" class="imagen_ejemplo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-hijo2">
                <div class="lectura_2">
                    <div class="container">
                        <div class="columna">
                            <h4>
                                Herramientas de Gestión de Configuración (Configuration Management)
                            </h4>
                            Se centran en la configuración interna de los sistemas operativos y las 
                            VMs ya existentes. Instalan software (servidores web, middlewares), 
                            configuran archivos y gestionan servicios. Líderes: Ansible (imperativo, 
                            agentless), Chef (declarativo, basado en recipes) y Puppet (declarativo, 
                            basado en el estado deseado).
                            <br>
                            <h4>
                                Herramientas de Orquestación
                            </h4>
                            Herramientas que van más allá del aprovisionamiento, gestionando el 
                            ciclo de vida, la escalabilidad y la red de cargas de trabajo complejas 
                            basadas en contenedores. Líder: Kubernetes (declarativo, basado en el 
                            estado deseado de los clusters y pods).
                            <br>
                            <h4>
                                Interoperabilidad
                            </h4>
                            Es común usar Terraform para crear las VMs, y luego usar Ansible para 
                            configurar el software dentro de esas VMs, mostrando cómo las 
                            herramientas se complementan en un pipeline de CD.
                            <iframe width="500" height="300" 
                            src="https://www.youtube.com/embed/_ZjARPpI6NI?si=QOxdeNRimzeUiUK0" 
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
                    <form id="actividad" action="scripts_modulo_5/leccion_4/registrar_actividad_leccion_4.php" method="POST">
                        <input type="hidden" name="idActividad" value="25">
                        <div class="container">
                            <div class="columna">
                                <p><strong>Conceptos</strong></p>
                                <p>1. Terraform</p>
                                <p>2. Herramientas de Aprovisionamiento (Provisioning)</p>
                                <p>3. Ansible</p>
                                <p>4. Herramientas de Gestión de Configuración</p>
                            </div>
                            
                            <div class="columna">
                                <p><strong>Definiciones</strong></p>
                                <select name="r1" id="r1">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para la configuración interna de un servidor (ej. instalar un servidor web Nginx, configurar archivos).</option>
                                    <option value="b">b) Se centra en la creación, modificación y eliminación de recursos de infraestructura a nivel de nube (VMs, redes, balanceadores).</option>
                                    <option value="c">c) La herramienta líder de aprovisionamiento declarativo que es capaz de trabajar con múltiples proveedores de nube (multi-nube).</option>
                                    <option value="d">d) El ejemplo de herramienta imperativa que se utiliza para instalar software dentro de VMs que ya existen.</option>
                                </select><br>
                                
                                <select name="r2" id="r2">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para la configuración interna de un servidor (ej. instalar un servidor web Nginx, configurar archivos).</option>
                                    <option value="b">b) Se centra en la creación, modificación y eliminación de recursos de infraestructura a nivel de nube (VMs, redes, balanceadores).</option>
                                    <option value="c">c) La herramienta líder de aprovisionamiento declarativo que es capaz de trabajar con múltiples proveedores de nube (multi-nube).</option>
                                    <option value="d">d) El ejemplo de herramienta imperativa que se utiliza para instalar software dentro de VMs que ya existen.</option>
                                </select><br>
                                
                                <select name="r3" id="r3">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para la configuración interna de un servidor (ej. instalar un servidor web Nginx, configurar archivos).</option>
                                    <option value="b">b) Se centra en la creación, modificación y eliminación de recursos de infraestructura a nivel de nube (VMs, redes, balanceadores).</option>
                                    <option value="c">c) La herramienta líder de aprovisionamiento declarativo que es capaz de trabajar con múltiples proveedores de nube (multi-nube).</option>
                                    <option value="d">d) El ejemplo de herramienta imperativa que se utiliza para instalar software dentro de VMs que ya existen.</option>
                                </select><br>

                                <select name="r4" id="r4">
                                    <option value="">Selecciona...</option>
                                    <option value="a">a) Se utiliza para la configuración interna de un servidor (ej. instalar un servidor web Nginx, configurar archivos).</option>
                                    <option value="b">b) Se centra en la creación, modificación y eliminación de recursos de infraestructura a nivel de nube (VMs, redes, balanceadores).</option>
                                    <option value="c">c) La herramienta líder de aprovisionamiento declarativo que es capaz de trabajar con múltiples proveedores de nube (multi-nube).</option>
                                    <option value="d">d) El ejemplo de herramienta imperativa que se utiliza para instalar software dentro de VMs que ya existen.</option>
                                </select><br>
                            </div>
                        </div>
                        
                        <button class="botones" name="accion" type="submit" value="calificar">Enviar Respuestas</button><br>
                        <button class="botones" name="accion" type="submit" value="completar">Marcar como completada</button>

                    </form>
                    <h3>Calificacion: <?php include('scripts_modulo_5/leccion_4/mostrar_calificacion_leccion_4.php'); ?></h3>
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
    <script src="../../../assets/js/modulo_5/validar_actividades/validar_actividades_leccion_4.js?v=1.0"></script>
</body>
</html>