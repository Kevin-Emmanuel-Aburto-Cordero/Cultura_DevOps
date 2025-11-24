/*En caso de fallo en una tabla, usar el siguiente bloque de codigo*/
/*
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table Respuestas; -- Nombre de la tabla
truncate table Respuestas; -- Nombre de la tabla
SET FOREIGN_KEY_CHECKS = 1;
*/
use test;
select * from Respuestas;

INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 1
(1, 'La falta de recursos económicos.', 0),
(1, 'Los objetivos opuestos entre desarrollo y operaciones.', 1),
(1, 'La ausencia de herramientas de programación.', 0),
-- Pregunta 2
(2, 'Aumentar la cantidad de código producido.', 0),
(2, 'Integrar desarrollo y operaciones para mejorar la colaboración y velocidad.', 1),
(2, 'Reemplazar los métodos tradicionales de programación.', 0),
-- Pregunta 3
(3, 'Patrick Debois.', 1),
(3, 'Andrew Shafer.', 0),
(3, 'John Allspaw.', 0),
-- Pregunta 4
(4, '2007', 0),
(4, '2009', 1),
(4, '2011', 0),
-- Pregunta 5
(5, 'El exceso de automatización.', 0),
(5, 'La dificultad para hacer cambios rápidos y seguros en producción.', 1),
(5, 'La falta de personal técnico.', 0),
-- Pregunta 6
(6, 'Un conjunto de herramientas técnicas.', 0),
(6, 'Una metodología de programación.', 0),
(6, 'Una cultura organizacional de colaboración y mejora continua.', 1),
-- Pregunta 7
(7, 'Competencia y especialización individual.', 0),
(7, 'Jerarquías más estrictas.', 0),
(7, 'Colaboración, comunicación y responsabilidad compartida.', 1),
-- Pregunta 8
(8, 'Reducir la carga de trabajo del equipo de operaciones.', 0),
(8, 'Unificar personas, procesos y herramientas con enfoque en el cliente.', 1),
(8, 'Eliminar completamente los errores humanos.', 0),
-- Pregunta 9
(9, 'La mentalidad y cultura adecuadas.', 1),
(9, 'El uso exclusivo de herramientas de automatización.', 0),
(9, 'La eliminación de los equipos de operaciones.', 0),
-- Pregunta 10
(10, 'La independencia total entre departamentos.', 0),
(10, 'El enfoque en tareas individuales.', 0),
(10, 'La empatía y confianza mutua.', 1),
-- Pregunta 11
(11, 'Comunicación Interactiva / Desarrollo Cooperativo.', 0),
(11, 'Integración Continua / Distribución o Implementación Continua.', 1),
(11, 'Conexión Inmediata / Codificación Directa.', 0),
-- Pregunta 12
(12, 'Evitar las pruebas automáticas.', 0),
(12, 'Automatizar el desarrollo y entrega del software para hacerlo más rápido y confiable.', 1),
(12, 'Separar desarrollo y operaciones.', 0),
-- Pregunta 13
(13, 'Se fusionan los cambios de código y se ejecutan pruebas automáticas.', 1),
(13, 'Se implementa directamente el código en producción.', 0),
(13, 'Se revisan manualmente los errores de compilación.', 0),
-- Pregunta 14
(14, 'El despliegue final es manual.', 1),
(14, 'Todo el proceso es completamente automático.', 0),
(14, 'No incluye pruebas automáticas.', 0),
-- Pregunta 15
(15, 'Menor número de herramientas de desarrollo.', 0),
(15, 'Reducción del trabajo en equipo.', 0),
(15, 'Mayor rapidez y calidad en las entregas de software.', 1),
-- Pregunta 16
(16, 'Terraform', 0),
(16, 'Git', 1),
(16, 'Docker', 0),
-- Pregunta 17
(17, 'Kubernetes', 0),
(17, 'Docker', 0),
(17, 'Jenkins', 1),
-- Pregunta 18
(18, 'GitHub', 0),
(18, 'Docker', 1),
(18, 'Prometheus', 0),
-- Pregunta 19
(19, 'Prometheus y Grafana', 1),
(19, 'Puppet y Chef', 0),
(19, 'Jira y Slack', 0),
-- Pregunta 20
(20, 'Grafana', 0),
(20, 'Terraform', 1),
(20, 'Selenium', 0),
-- Pregunta 21
(21, 'La automatización de los despliegues.', 0),
(21, 'La eliminación del monitoreo.', 0),
(21, 'La integración de la seguridad en todo el ciclo de desarrollo.', 1),
-- Pregunta 22
(22, 'DevSecOps elimina los equipos de seguridad.', 0),
(22, 'La seguridad se aplica desde el inicio del desarrollo.', 1),
(22, 'DevSecOps ignora los aspectos de operaciones.', 0),
-- Pregunta 23 
(23, 'Automatizar las tareas de seguridad.', 1),
(23, 'Realizar pruebas manuales al final del desarrollo.', 0),
(23, 'Descartar el monitoreo continuo.', 0),
-- Pregunta 24
(24, 'Retrasar el ciclo de entrega.', 0),
(24, 'Reducir riesgos y costos de vulnerabilidades.', 1),
(24, 'Evitar el uso de herramientas automatizadas.', 0),
-- Pregunta 25
(25, 'Diseñar la interfaz visual del software.', 0),
(25, 'Supervisar únicamente los sistemas de producción.', 0),
(25, 'Integrar y automatizar la seguridad dentro del pipeline de desarrollo.', 1);
/*--------------------------------------------------------------------*/
/*Modulo 2*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 1
(26, 'Un lenguaje de programación', 0),
(26, 'Un sistema de control de versiones ', 1),
(26, 'Un entorno de desarrollo', 0),
-- Pregunta 2
(27, 'Editar imágenes', 0),
(27, 'Guardar y gestionar versiones del código', 1),
(27, 'Crear bases de datos', 0),
-- Pregunta 3
(28, 'git init', 1),
(28, 'git start', 0),
(28, 'git create', 0), 
-- Pregunta 4
(29, 'Un error en el código', 0),
(29, 'Un punto de guardado con cambios realizados', 1),
(29, 'Un archivo temporal', 0),
-- Pregunta 5
(30, 'Muestra los usuarios conectados', 0),
(30, 'Muestra el historial de commits', 1),
(30, 'Elimina el historial', 0),


-- Pregunta 6
(31, 'Para almacenar imágenes del proyecto', 0),
(31, 'Para trabajar en paralelo sin afectar el código principal', 1),
(31, 'Para crear copias de seguridad automáticas', 0),
-- Pregunta 7
(32, 'git branch nombre_rama', 1),
(32, 'git new nombre_rama', 0),
(32, 'git make nombre_rama', 0),
-- Pregunta 8
(33, 'Elimina una rama', 0),
(33, 'Une los cambios de una rama con otra', 1),
(33, 'Cambia el nombre del proyecto', 0),
-- Pregunta 9
(34, 'Se crea un merge conflict', 1),
(34, 'Git elimina una de las ramas', 0),
(34, 'Git fusiona automáticamente sin errores', 0),
-- Pregunta 10
(35, 'dev', 0),
(35, 'main', 1),
(35, 'sourcer', 0),


-- Pregunta 11
(36, 'Un proyecto local', 0),
(36, 'Una copia del repositorio en la nube', 1),
(36, 'Un editor de código', 0),
-- Pregunta 12
(37, 'git connect origin', 0),
(37, 'git remote add origin <url>', 1),
(37, 'git upload <url>', 0),
-- Pregunta 13
(38, 'git upload', 0),
(38, 'git push', 1),
(38, 'git send', 0),
-- Pregunta 14
(39, 'Bitbucket', 0),
(39, 'GitHub', 1),
(39, 'GitLab', 0),
-- Pregunta 15
(40, 'git pull', 1),
(40, 'git clone', 0),
(40, 'git sync', 0),


-- Pregunta 16
(41, 'Un respaldo automático del sistema', 0),
(41, 'Un punto lógico de cambio en el proyecto', 1),
(41, 'Un comentario de un usuario', 0),
-- Pregunta 17
(42, 'General, como “cambios varios”', 0),
(42, 'Claro y descriptivo', 1),
(42, 'En blanco', 0),
-- Pregunta 18
(43, 'fix:', 0),
(43, 'feat:', 1),
(43, 'refactor:', 0),
-- Pregunta 19
(44, 'git add', 1),
(44, 'git ready', 0),
(44, 'git prepare', 0),
-- Pregunta 20
(45, 'Para reducir el tamaño del proyecto', 0),
(45, 'Para mantener un historial claro y detallado', 1),
(45, 'Para borrar versiones anteriores', 0),

-- Pregunta 21
(46, 'Un error en Git', 0),
(46, 'Una solicitud para integrar cambios entre ramas', 1),
(46, 'Un comando de actualización', 0),
-- Pregunta 22
(47, 'El creador del repositorio', 0),
(47, 'El programador que aprueba o revisa los cambios', 1),
(47, 'El servidor remoto', 0),

-- Pregunta 23
(48, 'Trabajar todos en el mismo proyecto al mismo tiempo', 1),
(48, 'Editar imágenes colaborativamente', 0),
(48, 'Usar Git sin conexión a internet', 0),
-- Pregunta 24
(49, 'git download', 0),
(49, 'git clone', 1),
(49, 'git pull', 0),
-- Pregunta 25
(50, 'git push', 1),
(50, 'git update', 0),
(50, 'git save', 0);

/*--------------------------------------------------------------------*/
/*Modulo 3*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 1
(51, 'Aumentar la cantidad de features por desarrollador.', 0),
(51, 'Reemplazar completamente al equipo de control de calidad (QA).', 0),
(51, 'Automatizar la validación del código y detectar defectos y conflictos tempranamente.', 1),

-- Pregunta 2
(52, 'Fusionar cambios pequeños a la rama principal varias veces al día.', 1),
(52, 'Hacer un commit grande una vez a la semana para documentar el progreso.', 0),
(52, 'Trabajar en una rama de desarrollo privada por más de un mes.', 0),

-- Pregunta 3
(53, 'El costo de licencias de software propietario.', 0),
(53, 'El problema de que el código solo funciona en mi máquina.', 1),
(53, 'La falta de herramientas de diseño gráfico.', 0),

-- Pregunta 4
(54, 'Adelantar las pruebas y los chequeos de calidad al inicio del ciclo de desarrollo.', 1),
(54, 'Mover el código a la izquierda en el editor.', 0),
(54, 'Cambiar el lenguaje de programación a la izquierda.', 0),

-- Pregunta 5
(55, 'El desarrollador debe documentar el bug y seguir trabajando en otras tareas.', 0),
(55, 'El equipo debe detener el desarrollo de nuevas features y corregir el build inmediatamente.', 1),
(55, 'El pipeline intenta el build tres veces más automáticamente.', 0),

-- Pregunta 6
(56, 'Pruebas Unitarias.', 1),
(56, 'Pruebas de Carga y Rendimiento.', 0),
(56, 'Pruebas de Aceptación del Usuario (UAT).', 0),

-- Pregunta 7
(57, 'Un Servidor HTTP (como Apache).', 0),
(57, 'Análisis Estático de Código (ej. SonarQube).', 1),
(57, 'Un sistema de tickets (como Jira).', 0),

-- Pregunta 8
(58, 'MTTD (Tiempo Medio para Detectar).', 0),
(58, 'Cobertura de Código.', 1),
(58, 'Frecuencia de Despliegue.', 0),

-- Pregunta 9
(59, 'El Artefacto Inmutable (paquete binario o ejecutable).', 1),
(59, 'Un reporte de costos de la infraestructura.', 0),
(59, 'Una nueva versión del código fuente en un archivo ZIP.', 0),

-- Pregunta 10
(60, 'Que el mismo artefacto probado en CI debe usarse en todos los entornos, sin cambios.', 1),
(60, 'Que solo los desarrolladores senior pueden modificar los artefactos.', 0),
(60, 'Que el código fuente no debe ser modificado una vez que inicia el build.', 0),

-- Pregunta 11
(61, 'Almacenar la documentación del usuario final.', 0),
(61, 'Actuar como Repositorios de Artefactos para almacenar paquetes binarios.', 1),
(61, 'Gestionar el flujo de tickets entre los equipos.', 0),

-- Pregunta 12
(62, 'Mejorar el rendimiento de la aplicación.', 0),
(62, 'Reducir el tamaño del paquete.', 0),
(62, 'Asegurar la Trazabilidad completa del código hasta la producción.', 1),

-- Pregunta 13
(63, 'La Frecuencia de Despliegue.', 0),
(63, 'La cantidad de commits por desarrollador.', 0),
(63, 'El Tiempo Medio para Detectar un Fallo (MTTD).', 1),

-- Pregunta 14
(64, 'Generar reportes trimestrales para la gerencia.', 0),
(64, 'Fomentar la transparencia y la responsabilidad colectiva sobre el estado del build.', 1),
(64, 'Mostrar los datos personales de los desarrolladores.', 0),

-- Pregunta 15
(65, 'Que el desarrollador ha terminado su proyecto por el día.', 0),
(65, 'Que el código ya está corriendo en el ambiente de Producción.', 0),
(65, 'Que la compilación y todas las pruebas automatizadas pasaron con éxito.', 1),

-- Pregunta 16
(66, 'El Log de Errores.', 0),
(66, 'El Merge Hell.', 0),
(66, 'El Pipeline de CI.', 1),

-- Pregunta 17
(67, 'Terraform.', 0),
(67, 'Docker.', 0),
(67, 'Maven o Gradle.', 1),

-- Pregunta 18
(68, 'Aumentar el número de servidores en la infraestructura.', 0),
(68, 'Reducir la complejidad de las fusiones (merges) de código.', 1),
(68, 'Permitir que el desarrollador trabaje aislado por semanas.', 0),

-- Pregunta 19
(69, 'Reemplazar a Git como sistema de control de versiones.', 0),
(69, 'Almacenar la base de datos de los clientes.', 0),
(69, 'Actuar como un proxy para librerías de terceros, controlando su seguridad y disponibilidad.', 1),

-- Pregunta 20
(70, 'MySQL.', 0),
(70, 'Microsoft Word.', 0),
(70, 'Jenkins.', 1),

-- Pregunta 21
(71, 'La CD ocurre antes de la CI.', 0),
(71, 'La CI es el requisito fundamental que hace posible la CD.', 1),
(71, 'Son procesos independientes que no se relacionan.', 0),

-- Pregunta 22
(72, 'Versionar, revisar y auditar el proceso de build junto con el código de la aplicación.', 1),
(72, 'Que el código se escriba más rápido.', 0),
(72, 'Reducir el número de pruebas unitarias.', 0),

-- Pregunta 23
(73, 'Saber exactamente qué commit de Git generó el software que se ejecuta en Producción.', 1),
(73, 'La velocidad de descarga del Artefacto.', 0),
(73, 'El proceso de documentar el código fuente en un wiki.', 0),

-- Pregunta 24
(74, 'El Infierno de la Fusión (Merge Hell) debido a los conflictos de código masivos.', 1),
(74, 'Un fallo en el Servidor CI.', 0),
(74, 'Que el desarrollador se aburra de su tarea.', 0),

-- Pregunta 25
(75, 'Ejecución de Pruebas Unitarias.', 0),
(75, 'Análisis Estático de Código.', 0),
(75, 'Aprobación manual para pasar el software al cliente final en producción.', 1);
SELECT * FROM test.respuestas;
/*--------------------------------------------------------------------*/
/*Modulo 4*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 26
(76, 'La velocidad de compilación del código.', 0),
(76, 'El lenguaje de programación utilizado.', 0),
(76, 'La intervención humana para la liberación final a Producción.', 1),

-- Pregunta 27
(77, 'Debe ser recompilado para adaptarse al nuevo entorno.', 0),
(77, 'Debe mantener su Inmutabilidad (ser el paquete exacto sin cambios).', 1),
(77, 'Debe ser modificado para incluir las nuevas features.', 0),

-- Pregunta 28
(78, 'Asegurar que el sistema soporte el volumen de tráfico esperado de Producción.', 1),
(78, 'Verificar la ortografía en el código fuente.', 0),
(78, 'Aumentar el número de desarrolladores en el equipo.', 0),

-- Pregunta 29
(79, 'Documentación manual de todos los pasos.', 0),
(79, 'El uso de Feature Toggles (Feature Flags).', 1),
(79, 'Recompilar el artefacto varias veces.', 0),

-- Pregunta 30
(80, 'Es la estrategia más económica en la nube.', 0),
(80, 'Permite una reversión (roll-back) instantánea en caso de fallo.', 1),
(80, 'Reduce la cantidad de código fuente escrito.', 0),

-- Pregunta 31
(81, 'El entorno de Desarrollo Local.', 0),
(81, 'El Repositorio de Código (Git).', 0),
(81, 'El entorno de Staging/Pre-producción.', 1),

-- Pregunta 32
(82, 'Que el script solo funciona con un lenguaje de programación.', 0),
(82, 'Que requiere la aprobación manual del gerente.', 0),
(82, 'Que siempre produce el mismo estado final, sin importar cuántas veces se ejecute.', 1),

-- Pregunta 33
(83, 'Liberar la nueva versión solo a un pequeño porcentaje de usuarios para monitorear.', 1),
(83, 'Eliminar la necesidad de monitoreo en Producción.', 0),
(83, 'Desplegar la nueva versión al 100% de los usuarios inmediatamente.', 0),

-- Pregunta 34
(84, 'Pruebas de Componentes Aislados.', 0),
(84, 'Pruebas de Usabilidad.', 0),
(84, 'Pruebas de Sistema o End-to-End (E2E).', 1),

-- Pregunta 35
(85, 'El Roll-back o Reversión Instantánea.', 1),
(85, 'Despliegue Canary.', 0),
(85, 'Promoción del Artefacto.', 0),

-- Pregunta 36
(86, 'Para aumentar la memoria RAM del servidor.', 0),
(86, 'Para detectar fallos inmediatamente en el pequeño grupo de usuarios afectados.', 1),
(86, 'Para contar el número de commits.', 0),

-- Pregunta 37
(87, 'El riesgo de que el manager no apruebe la factura.', 0),
(87, 'El riesgo de que un fallo grave en una feature nueva afecte a todos los usuarios.', 1),
(87, 'El riesgo de que el código no compile.', 0),

-- Pregunta 38
(88, 'La versión antigua y estable que está recibiendo el tráfico.', 1),
(88, 'La nueva versión del software.', 0),
(88, 'El entorno de pruebas de carga.', 0),

-- Pregunta 39
(89, 'Que las Pruebas Unitarias sean manuales.', 0),
(89, 'Que todos los desarrolladores usen la misma marca de computadora.', 0),
(89, 'El uso de la Infraestructura como Código (IaC).', 1),

-- Pregunta 40
(90, 'Escanear el artefacto mientras se está ejecutando en un entorno de prueba.', 1),
(90, 'Encontrar vulnerabilidades en el código fuente antes de que se compile.', 0),
(90, 'Diseñar la interfaz de usuario.', 0),

-- Pregunta 41
(91, 'Desarrollo Basado en Troncal (Trunk-Based Development - TBD).', 1),
(91, 'Desarrollo de Alta Seguridad.', 0),
(91, 'Desarrollo en Aislamiento.', 0),

-- Pregunta 42
(92, 'La velocidad del internet del usuario.', 0),
(92, 'El número de servidores de bases de datos.', 0),
(92, 'El Riesgo y el tiempo de Downtime (interrupción) en Producción.', 1),

-- Pregunta 43
(93, 'Un paso de aprobación o activación manual antes de liberar a Producción.', 1),
(93, 'Una validación manual de la interfaz de usuario.', 0),
(93, 'La necesidad de compilar el código en otro lenguaje.', 0),

-- Pregunta 44
(94, 'Validar la conexión y el comportamiento con servicios externos y dependencias reales.', 1),
(94, 'Ahorrar tiempo en la fase de CI.', 0),
(94, 'Validar si los iconos de la aplicación son bonitos.', 0),

-- Pregunta 45
(95, 'Recompilar el código fuente en un nuevo servidor.', 0),
(95, 'Mover el Artefacto Inmutable secuencialmente a través de entornos (QA, Staging, Prod).', 1),
(95, 'Darle un aumento de sueldo al desarrollador.', 0),

-- Pregunta 46
(96, 'La latencia (tiempo de respuesta) bajo alta concurrencia.', 1),
(96, 'La cantidad de bugs de seguridad del código.', 0),
(96, 'El número de feature toggles activos.', 0),

-- Pregunta 47
(97, 'El entorno de Staging.', 0),
(97, 'El entorno Azul (la versión antigua y estable).', 1),
(97, 'El entorno de Desarrollo.', 0),

-- Pregunta 48
(98, 'Automatizar la corrección de errores de seguridad.',0 ),
(98, 'Que los desarrolladores eviten hacer commits.', 0),
(98, 'Permitir el commit constante a la rama principal aunque la feature no esté terminada.', 1),

-- Pregunta 49
(99, 'Que solo se despliega código una vez al mes.', 0),
(99, 'Que no se necesita ningún tipo de monitoreo.', 0),
(99, 'Que el código se libera a Producción automáticamente si todas las pruebas pasan.', 1),

-- Pregunta 50
(100, 'Volver a la versión anterior del código fuente.', 0),
(100, 'Eliminar todas las bases de datos de Producción.', 0),
(100, 'Desplegar el artefacto a Staging/Pre-producción y ejecutar las pruebas finales.', 1);
SELECT * FROM test.respuestas;
/*--------------------------------------------------------------------*/
/*Modulo 5*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 51
(101, 'Despliegue Continuo (CD)', 0),
(101, 'Integración Continua (CI)', 0),
(101, 'Infraestructura como Código (IaC)', 1),

-- Pregunta 52
(102, 'Despliegue Azul/Verde', 0),
(102, 'Desarrollo Basado en Troncal (TBD)', 0),
(102, 'Desviación de Configuración (Configuration Drift)', 1),

-- Pregunta 53
(103, 'El lenguaje de programación de la aplicación.', 0),
(103, 'El orden exacto de cada comando a ejecutar (el cómo).', 0),
(103, 'El estado final deseado del sistema (el qué).', 1),

-- Pregunta 54
(104, 'Git', 0),
(104, 'Terraform', 1),
(104, 'Ansible', 0),

-- Pregunta 55
(105, 'Trazabilidad', 0),
(105, 'Inmutabilidad', 0),
(105, 'Idempotencia', 1),

-- Pregunta 56
(106, 'Que se destruye y se crea uno nuevo con el cambio requerido.', 1),
(106, 'Que se le pueden aplicar parches de seguridad manualmente.', 0),
(106, 'Que se usa Git para control de versiones.', 0),

-- Pregunta 57
(107, 'AWS S3', 0),
(107, 'Terraform', 0),
(107, 'Ansible', 1),

-- Pregunta 58
(108, 'Fase de Despliegue Continuo (CD)', 1),
(108, 'Fase de Integración Continua (CI)', 0),
(108, 'Fase de Desarrollo Local', 0),

-- Pregunta 59
(109, 'terraform init', 0),
(109, 'terraform validate', 1),
(109, 'terraform destroy', 0),

-- Pregunta 60
(110, 'Aumentar el Configuration Drift.', 0),
(110, 'Crear un entorno de prueba para usarlo y luego destruirlo para ahorrar costos.', 1),
(110, 'Hacer la reversión (roll-back) más lenta.', 0),

-- Pregunta 61
(111, 'Git', 0),
(111, 'Kubernetes', 1),
(111, 'Chef', 0),

-- Pregunta 62
(112, 'El tamaño de las imágenes del sitio web.', 0),
(112, 'La secuencia exacta de comandos a ejecutar (el cómo).', 1),
(112, 'El resultado final deseado (el qué).', 0),

-- Pregunta 63
(113, 'Lograr Trazabilidad y Auditabilidad de todos los cambios de infraestructura.', 1),
(113, 'Aumentar la latencia de la aplicación.', 0),
(113, 'Permite escribir menos líneas de código.', 0),

-- Pregunta 64
(114, 'Reversión Manual.', 0),
(114, 'Orquestación', 0),
(114, 'Interoperabilidad de herramientas.', 1),

-- Pregunta 65
(115, 'terraform plan', 1),
(115, 'terraform init', 0),
(115, 'terraform validate', 0),

-- Pregunta 66
(116, 'Eliminar la necesidad de monitoreo.', 0),
(116, 'Garantizar la revisión y aprobación de los cambios de infraestructura.', 1),
(116, 'Permitir que el código se escriba más rápido.', 0),

-- Pregunta 67
(117, 'Modelo Imperativo', 1),
(117, 'Modelo Inmutable', 0),
(117, 'Modelo Declarativo', 0),

-- Pregunta 68
(118, 'Permiten la trazabilidad completa.' , 0),
(118, 'Son demasiado rápidos.' , 0),
(118, 'Llevan a la Desviación de Configuración (Configuration Drift).' , 1),

-- Pregunta 69
(119, 'No hace nada y pasa al siguiente recurso.' , 1),
(119, 'Aplica el cambio de nuevo.' , 0),
(119, 'Genera un roll-back.' , 0),

-- Pregunta 70
(120, 'Chef', 0),
(120, 'Puppet', 0),
(120, 'Ansible', 1),

-- Pregunta 71
(121, 'Escribir el código de la aplicación.' , 0),
(121, 'Crear recursos de nube (VMs, redes, bases de datos).' , 1),
(121, 'Instalar Java en el servidor.' , 0),

-- Pregunta 72
(122, 'Gestión de Configuración' , 0),
(122, 'Infraestructura Inmutable' , 1),
(122, 'Modelo Imperativo' , 0),

-- Pregunta 73
(123, 'Que debe ser validado y desplegado de la misma manera que el código de la aplicación.' , 1),
(123, 'Que solo se despliega una vez al año.' , 0),
(123, 'Que requiere la aprobación de todos los desarrolladores.' , 0),

-- Pregunta 74
(124, 'Crear un roll-back manual.' , 0),
(124, 'Implementar un Manual Gate (aprobación) antes de aplicar cambios irreversibles.' , 1),
(124, 'Borrar el historial de Git.' , 0),

-- Pregunta 75
(125, 'Aumentar el número de personas para hacer la configuración.' , 0),
(125, 'La Eliminación del Manualismo mediante código automatizado y repetible.' , 1),
(125, 'Usar solo lenguajes de programación complejos.', 0);
SELECT * FROM test.respuestas;
/*--------------------------------------------------------------------*/
/*Modulo 6*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 76
(126, 'Contenedor', 1),
(126, 'Máquina Virtual (VM)', 0),
(126, 'Archivo de Texto', 0),

-- Pregunta 77
(127, 'El contenedor emula el hardware completo.', 0),
(127, 'El contenedor es más pesado y lento.', 0),
(127, 'El contenedor comparte el núcleo (kernel) del sistema operativo anfitrión.', 1),

-- Pregunta 78
(128, 'Terraform', 0),
(128, 'Kubernetes', 0),
(128, 'Docker', 1),

-- Pregunta 79
(129, 'Dockerfile', 1),
(129, 'YAML File', 0),
(129, 'Log File', 0),

-- Pregunta 80
(130, 'La falta de Feature Toggles.', 0),
(130, 'La lentitud del internet del usuario.', 0),
(130, 'El problema de Funciona en mi máquina.', 1),

-- Pregunta 81
(131, 'La instancia del contenedor en ejecución.', 0),
(131, 'Un archivo de log de errores.', 0),
(131, 'Una plantilla de solo lectura del sistema de archivos y configuración.', 1),

-- Pregunta 82
(132, 'En Capas que se reutilizan entre diferentes imágenes.', 1),
(132, 'Usando archivos muy grandes.', 0),
(132, 'Con un runtime de SO completo.', 0),

-- Pregunta 83
(133, 'El Commit ID de Git.', 0),
(133, 'La dirección IP.', 0),
(133, 'La Etiqueta (Tag).', 1),

-- Pregunta 84
(134, 'El Registro (Registry)', 1),
(134, 'Repositorio de Código (Git)', 0),
(134, 'El balanceador de carga (Load Balancer).', 0),

-- Pregunta 85
(135, 'terraform apply', 0),
(135, 'docker build', 1),
(135, 'docker push', 0),

-- Pregunta 86
(136, 'Integración de IaC', 0),
(136, 'La Orquestación', 1),
(136, 'Pruebas de Carga', 0),

-- Pregunta 87
(137, 'Ansible', 0),
(137, 'Kubernetes (K8s)', 1),
(137, 'Docker Hub', 0),

-- Pregunta 88
(138, 'Modelo Manual', 0),
(138, 'Modelo Declarativo', 1),
(138, 'Modelo Imperativo', 0),

-- Pregunta 89
(139, 'El Pod', 1),
(139, 'Clúster', 0),
(139, 'Nodo (Node)', 0),

-- Pregunta 90
(140, 'Namespace', 0),
(140, 'Deployment', 1),
(140, 'Service', 0),

-- Pregunta 91
(141, 'El Bucle de Control (Control Loop)', 1),
(141, 'El Dockerfile', 0),
(141, 'El Registro (Registry)', 0),

-- Pregunta 92
(142, 'El Contenedor inmutable.', 0),
(142, 'La Máquina Virtual (VM).', 0),
(142, 'El Namespace (Espacio de Nombres)', 1),

-- Pregunta 93
(143, 'Evitar el uso de Terraform.', 0),
(143, 'Aumentar el uso del disco duro.', 0),
(143, 'Lograr el aislamiento lógico y la gestión de permisos por entorno/equipo.', 1),

-- Pregunta 94
(144, 'Docker', 0),
(144, 'Ansible', 0),
(144, 'Terraform', 1),

-- Pregunta 95
(145, 'Actualizaciones Rotativas (Rolling Updates)', 1),
(145, 'Actualizaciones de Hardware', 0),
(145, 'Actualizaciones Manuales', 0),

-- Pregunta 96
(146, 'Sí, una vez creado, cualquier cambio requiere crear uno nuevo.', 1),
(146, 'Solo si se usa Docker.', 0),
(146, 'No, es completamente mutable.', 0),

-- Pregunta 97
(147, 'El Clúster', 1),
(147, 'El Dockerfile', 0),
(147, 'Pod', 0),

-- Pregunta 98
(148, 'docker push', 1),
(148, 'docker build', 0),
(148, 'docker run', 0),

-- Pregunta 99
(149, 'Archivos YAML (manifiestos)', 1),
(149, 'Archivos PDF', 0),
(149, 'Archivos .exe', 0),

-- Pregunta 100
(150, 'Reducir el tamaño de la imagen.', 0),
(150, 'Hacer que el contenedor sea mutable.', 0),
(150, 'Identificar y controlar qué versión de la aplicación se despliega en cada entorno.', 1);
SELECT * FROM test.respuestas;
/*--------------------------------------------------------------------*/
/*Modulo 7*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 101
(151, 'Trazabilidad', 0),
(151, 'Monitoreo (Monitoring)', 1),
(151, 'Observabilidad', 0),

-- Pregunta 102
(152, 'Monitoreo', 0),
(152, 'Modelo Imperativo', 0),
(152, 'Observabilidad', 1),

-- Pregunta 103
(153, 'MELT (Métricas, Eventos, Logs, Trazas)', 1),
(153, 'CI/CD', 0),
(153, 'SLA', 0),

-- Pregunta 104
(154, 'Logs', 0),
(154, 'Métricas (Metrics)', 1),
(154, 'Trazas', 0),

-- Pregunta 105
(155, 'Trazas', 0),
(155, 'Logs (Registros)', 1),
(155, 'Métricas', 0),

-- Pregunta 106
(156, 'Logs', 0),
(156, 'Métricas', 0),
(156, 'Trazas (Traces)', 1),

-- Pregunta 107
(157, 'Latencia', 0),
(157, 'Disponibilidad', 1),
(157, 'Rendimiento', 0),

-- Pregunta 108
(158, 'El tiempo que tarda el servicio en fallar.', 0),
(158, 'Un contrato legal con el cliente.', 0),
(158, 'Una métrica específica que mide la calidad del servicio.', 1),

-- Pregunta 109
(159, 'El tiempo de inactividad del servidor.', 0),
(159, 'El umbral o meta interna establecida para los SLIs.', 1),
(159, 'El código de la aplicación.', 0),

-- Pregunta 110
(160, 'SLI', 0),
(160, 'SLA (Service Level Agreement)', 1),
(160, 'SLO', 0),

-- Pregunta 111
(161, 'Margen de Error (Error Budget)', 1),
(161, 'Tiempo de Inactividad Permitido', 0),
(161, 'Margen de Ganancia (Profit Margin)', 0),

-- Pregunta 112
(162, 'Acelerar el lanzamiento de features.', 0),
(162, 'Añadir más Logs.', 0),
(162, 'Detener el desarrollo de features y priorizar la fiabilidad.', 1),

-- Pregunta 113
(163, 'El número de líneas de código.', 0),
(163, 'La rapidez con la que el equipo detecta y resuelve problemas.', 1),
(163, 'a velocidad del código.', 0),

-- Pregunta 114
(164, 'Como un Quality Gate que puede activar un roll-back.', 1),
(164, 'Reemplazando a Terraform.', 0),
(164, 'Aumentando el Configuration Drift.', 0),

-- Pregunta 115
(165, 'Un roll-back automatizado (reversión a la versión anterior estable).', 1),
(165, 'Una nueva feature.', 0),
(165, 'Un análisis de mercado.', 0),

-- Pregunta 116
(166, 'Análisis Financiero.', 0),
(166, 'Análisis de Front-end.', 0),
(166, 'Análisis Post-Mortem (o Post-Incidente).', 1),

-- Pregunta 117
(167, 'Mejorar los procesos y sistemas para evitar la recurrencia del fallo.', 1),
(167, 'Reducir la latencia.', 0),
(167, 'Documentar a la persona responsable.', 0),

-- Pregunta 118
(168, 'Logs (registros) y Trazas (rutas de solicitud).', 0),
(168, 'Gráficos de pastel.', 0),
(168, 'Archivos de Word.', 0),

-- Pregunta 119
(169, 'En requisitos o stories para el backlog.', 1),
(169, 'En más alertas.', 0),
(169, 'En excusas.', 0),

-- Pregunta 120
(170, 'Disponibilidad', 0),
(170, 'Costo de CPU', 0),
(170, 'Latencia', 1),

-- Pregunta 121
(171, 'Sistemas Microservicios y distribuidos.', 1),
(171, 'Sistemas basados en papel.', 0),
(171, 'Sistemas monolíticos grandes.', 0),

-- Pregunta 122
(172, 'Escribir los Logs.', 0),
(172, 'Ejecutar el código de aplicación.', 0),
(172, 'Proveer visualización en tiempo real de las Métricas del sistema.', 1),

-- Pregunta 123
(173, 'Métricas de calidad de servicio (ej. tasa de errores).', 1),
(173, 'étricas de Hardware (ej. temperatura).', 0),
(173, 'Métricas de marketing.', 0),

-- Pregunta 124
(174, 'Que las features se lanzan más lento.', 0),
(174, 'Que ya no se necesita Git.', 0),
(174, 'Que los datos de Producción (Ops) alimentan la planificación de Desarrollo (Dev).', 1),

-- Pregunta 125
(175, 'Integración Continua (CI)', 0),
(175, 'Despliegue Azul/Verde.', 0),
(175, 'Gestión de Incidentes.', 1);
SELECT * FROM test.respuestas;
/*--------------------------------------------------------------------*/
/*Modulo 8*/
INSERT INTO Respuestas (idPreguntas, texto_respuesta, es_correcta)
VALUES
-- Pregunta 126
(176, 'DevSecOps', 1),
(176, 'Integración Continua (CI)', 0),
(176, 'Monitorización Continua', 0),

-- Pregunta 127
(177, 'Control de Acceso (RBAC)', 0),
(177, 'Shift-Left (Mover a la Izquierda)', 1),
(177, 'Security First', 0),

-- Pregunta 128
(178, 'Aumentar el tiempo de despliegue (CD).', 0),
(178, 'Encontrar y arreglar fallos cuando son más baratos y fáciles de corregir.', 1),
(178, 'Garantizar que solo el equipo de Seguridad arregle fallos.', 0),

-- Pregunta 129
(179, 'El rol de Gatekeeper (Portero) al final del pipeline.', 1),
(179, 'La falta de containers.', 0),
(179, 'El Alert Fatigue.', 0),

-- Pregunta 130
(180, 'Realizadas solo por el equipo de Seguridad.', 0),
(180, 'Automatizadas e incorporadas como Quality Gates.', 1),
(180, 'Largas y manuales.', 0),

-- Pregunta 131
(181, 'SAST (Static Application Security Testing)', 1),
(181, 'Análisis de Logs', 0),
(181, 'DAST (Dynamic Testing)', 0),

-- Pregunta 132
(182, 'Análisis de Dependencias', 0),
(182, 'SAST', 0),
(182, 'DAST (Dynamic Application Security Testing)', 1),

-- Pregunta 133
(183, 'Errores gramaticales en el código.', 0),
(183, 'Vulnerabilidades conocidas de código abierto (Zero-Day) listadas en bases de datos (CVEs).', 1),
(183, 'Vulnerabilidades de red internas.', 0),

-- Pregunta 134
(184, 'Las Imágenes de Contenedores (Docker Images).', 1),
(184, 'La factura de la nube.', 0),
(184, 'El archivo de logs.', 0),

-- Pregunta 135
(185, 'Recolección de Datos', 0),
(185, 'Quality Gate (Puerta de Calidad)', 1),
(185, 'Implementación de Features', 0),

-- Pregunta 136
(186, 'Gobernanza como Código (GaaC)', 1),
(186, 'Análisis Estático (SAST)', 0),
(186, 'Aprovisionamiento Imperativo', 0),

-- Pregunta 137
(187, 'Gobernanza y Conformidad.', 1),
(187, 'Latencia', 0),
(187, 'Deployment', 0),

-- Pregunta 138
(188, 'Registro de Bibliotecas de Aplicación Contratada', 0),
(188, 'Revisión Basada en Código Automático', 0),
(188, 'Control de Acceso Basado en Roles (Role-Based Access Control).', 1),

-- Pregunta 139
(189, 'El RBAC (Control de Acceso Basado en Roles).', 1),
(189, 'Un Dockerfile.', 0),
(189, 'El escaneo DAST.', 0),

-- Pregunta 140
(190, 'Separación de Tareas (Separation of Duties).', 1),
(190, 'Control de Acceso (RBAC).', 0),
(190, 'Principio Sin Culpa.', 0),

-- Pregunta 141
(191, 'La instalación manual de software.', 0),
(191, 'La creación de Feature Toggles.', 0),
(191, 'La Auditoría y Trazabilidad completa de cada cambio.', 1),

-- Pregunta 142
(192, 'En el Registry de Contenedores.', 0),
(192, 'En una base de datos.', 0),
(192, 'En texto plano dentro del código fuente (Git) o en las imágenes de contenedores.', 1),

-- Pregunta 143
(193, 'Comentarios en el Dockerfile.', 0),
(193, 'Archivos de texto encriptados manualmente.', 0),
(193, 'Sistemas de Secret Management (ej. HashiCorp Vault).', 1),

-- Pregunta 144
(194, 'Principio de Separación de Tareas.', 0),
(194, 'Principio de Máxima Apertura.', 0),
(194, 'Principio de Mínimo Privilegio.', 1),

-- Pregunta 145
(195, 'Hacer que el contenedor sea mutable.', 0),
(195, 'Poner la aplicación en un clúster más grande.', 0),
(195, 'Construir las imágenes con la menor cantidad de paquetes posibles y ejecutarlas con usuarios no root.', 1),

-- Pregunta 146
(196, 'SAST', 1),
(196, 'DAST', 0),
(196, 'Escaneo de Red', 0),

-- Pregunta 147
(197, 'La lista de características deseadas.', 0),
(197, 'Las facturas de la nube.', 0),
(197, 'Los resultados del Análisis Post-Mortem de incidentes de seguridad.', 1),

-- Pregunta 148
(198, 'Un firewall.', 0),
(198, 'Un Sistema de Gestión de Secretos (ej. HashiCorp Vault).', 1),
(198, 'Un linter de código.', 0),

-- Pregunta 149
(199, 'A los equipos de Desarrollo (Dev) y Operaciones (Ops).', 1),
(199, 'Solo al equipo de Seguridad.', 0),
(199, 'Solo al equipo de Marketing.', 0),

-- Pregunta 150
(200, 'El plan de Respuesta a Incidentes de Seguridad.', 1),
(200, 'La pausa del pipeline.', 0),
(200, 'El reinicio de la base de datos.', 0);
select * from respuestas;