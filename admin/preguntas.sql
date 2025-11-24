/*En caso de fallo en una tabla, usar el siguiente bloque de codigo*/
/*
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table Preguntas; -- Nombre de la tabla
truncate table Preguntas; -- Nombre de la tabla
SET FOREIGN_KEY_CHECKS = 1;
*/
select * from Preguntas;
use test;

INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
/*Leccion 1*/
(1, '¿Cuál era el principal conflicto antes del surgimiento de DevOps?', 'opcion_multiple'),
(1, '¿Qué buscaba principalmente DevOps al surgir?', 'opcion_multiple'),
(1, '¿Quién es considerado el creador del movimiento DevOps?', 'opcion_multiple'),
(1, '¿En qué año se originó el término “DevOps”?', 'opcion_multiple'),
(1, '¿Qué problema resolvía DevOps en las organizaciones IT tradicionales?', 'opcion_multiple'),
/*Leccion 2*/
(1, '¿Qué representa principalmente DevOps dentro de una organización?', 'opcion_multiple'),
(1, '¿Qué promueve la cultura DevOps entre los equipos?', 'opcion_multiple'),
(1, '¿Cuál es el objetivo principal de DevOps respecto al cliente?', 'opcion_multiple'),
(1, '¿Qué elemento es esencial para disfrutar plenamente de DevOps?', 'opcion_multiple'),
(1, '¿Qué valor fomenta DevOps para mejorar el trabajo entre equipos?', 'opcion_multiple'),
/*leccion 3*/
(1, '¿Qué significa CI/CD en DevOps?', 'opcion_multilpe'),
(1, '¿Cuál es el objetivo principal de CI/CD?', 'opcion_multiple'),
(1, '¿Qué sucede en la etapa de Integración Continua (CI)?', 'opcion_multiple'),
(1, '¿Qué característica define la Entrega Continua (Continuous Delivery)?', 'opcion_multiple'),
(1, '¿Qué ventaja principal aporta el ciclo CI/CD?', 'opcion_multiple'),
/*leccion 4*/
(1, '¿Qué herramienta se utiliza para el control de versiones?', 'opcion_multiple'),
(1, '¿Qué herramienta permite automatizar pipelines de CI/CD?', 'opcion_multiple'),
(1, '¿Qué herramienta se usa para crear y administrar contenedores?', 'opcion_multiple'),
(1, '¿Cuál de las siguientes herramientas se utiliza para monitorear y visualizar métricas?', 'opcion_multiple'),
(1, '¿Cuál pertenece a la categoría de “Infraestructura como Código (IaC)”?', 'opcion_multiple'),
/*leccion 5*/
(1, '¿Qué agrega DevSecOps a la metodología DevOps?', 'opcion_multiple'),
(1, '¿Cuál es la principal diferencia de DevSecOps respecto a DevOps tradicional?', 'opcion_multiple'),
(1, '¿Qué principio es esencial en DevSecOps?', 'opcion_multiple'),
(1, '¿Qué beneficio genera integrar la seguridad desde el inicio del desarrollo?', 'opcion_multiple'),
(1, '¿Qué función cumple un experto en DevSecOps?', 'opcion_multiple');
/*---------------------------------------------------------------------------------------*/
/*Modulo 2*/
INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
/*leccion 1*/
(2, '¿Qué es Git?', 'opcion_multiple'),
(2, '¿Qué permite hacer Git principalmente?', 'opcion_multiple'),
(2, '¿Qué comando se usa para crear un nuevo repositorio?', 'opcion_multiple'),
(2, '¿Qué representa un commit en Git?', 'opcion_multiple'),
(2, '¿Qué hace el comando git log?', 'opcion_multiple'),
/*leccion 2*/
(2, '¿Para qué sirve una rama (branch) en Git?', 'opcion_multiple'),
(2, '¿Qué comando crea una nueva rama?', 'opcion_multiple'),
(2, '¿Qué hace el comando git merge?', 'opcion_multiple'),
(2, '¿Qué sucede si dos ramas modifican la misma línea de código?', 'opcion_multiple'),
(2, '¿Cuál es la rama principal por defecto en la mayoría de los repositorios?', 'opcion_multiple'),
/*leccion 3*/
(2, '¿Qué es un repositorio remoto?', 'opcion_multiple'),
(2, '¿Qué comando conecta un repositorio local con uno remoto?', 'opcion_multiple'),
(2, '¿Qué comando se usa para subir los cambios al remoto?', 'opcion_multiple'),
(2, '¿Qué plataforma es más usada para proyectos de código abierto?', 'opcion_multiple'),
(2, '¿Qué comando descarga e integra los cambios de un repositorio remoto?', 'opcion_multiple'),
/*leccion 4*/
(2, '¿Qué representa cada commit?', 'opcion_multiple'),
(2, '¿Qué tipo de mensaje es recomendable en un commit?', 'opcion_multiple'),
(2, '¿Qué prefijo indica una nueva funcionalidad en el mensaje del commit?', 'opcion_multiple'),
(2, '¿Qué comando prepara los archivos para ser confirmados?', 'opcion_multiple'),
(2, '¿Por qué es importante hacer commits frecuentes?', 'opcion_multiple'),
/*leccion 5*/
(2, '¿Qué es una Pull Request (PR)?', 'opcion_multiple'),
(2, '¿Qué es un reviewer?', 'opcion_multiple'),
/*leccion 6*/
(2, '¿Qué permite hacer Git en un equipo de trabajo?', 'opcion_multiple'),
(2, '¿Qué comando se usa para copiar un repositorio remoto en tu computadora?', 'opcion_multiple'),
(2, '¿Qué comando se utiliza para enviar tus cambios al repositorio remoto?', 'opcion_multiple');

INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
(3, '¿Cuál es el propósito principal de la Integración Continua (CI)?', 'opcion_multiple'),
(3, '¿Cuál es la regla cultural del Commit Frecuente en CI?', 'opcion_multiple'),
(3, '¿Qué problema busca resolver la automatización del build mediante un Servidor CI?', 'opcion_multiple'),
(3, '¿Qué significa el principio Shift Left en el pipeline de CI?', 'opcion_multiple'),
(3, '¿Cuál es la regla de oro del pipeline si una prueba automatizada falla (estado rojo)?', 'opcion_multiple'),

(3, '¿Qué tipo de prueba es la más rápida y la más ejecutada en el pipeline de CI?', 'opcion_multiple'),
(3, '¿Qué herramienta automatizada se utiliza para auditar la calidad, vulnerabilidades y deuda técnica del código sin ejecutarlo?', 'opcion_multiple'),
(3, '¿Cuál es la métrica que cuantifica la porción de código fuente que ha sido ejercitada por las pruebas unitarias?', 'opcion_multiple'),
(3, '¿Qué se genera y almacena en el Repositorio de Artefactos después de un build y pruebas exitosas?', 'opcion_multiple'),
(3, '¿A qué se refiere el Principio de Inmutabilidad en la gestión de artefactos?', 'opcion_multiple'),

(3, '¿Cuál es la función principal de herramientas como Artifactory o Nexus en la CI?', 'opcion_multiple'),
(3, '¿Qué se logra al etiquetar el Artefacto con el hash de Git o el número de build?', 'opcion_multiple'),
(3, '¿Qué métrica busca reducir la CI mediante el Monitoreo y el Feedback rápido?', 'opcion_multiple'),
(3, '¿Cuál es la función principal de un dashboard visible en la práctica de Feedback Rápido?', 'opcion_multiple'),
(3, '¿Qué significa que el build esté en estado verde?', 'opcion_multiple'),

(3, '¿Qué término describe la secuencia de pasos automatizados (Build, Test, Package) que se ejecutan con cada commit?', 'opcion_multiple'),
(3, '¿Qué herramienta de automatización de builds se utiliza comúnmente en proyectos Java para gestionar dependencias y la compilación?', 'opcion_multiple'),
(3, '¿Cuál es un beneficio directo del uso de ramas de corta duración en la CI?', 'opcion_multiple'),
(3, '¿Cuál es la función del Repositorio de Artefactos con respecto a las dependencias externas?', 'opcion_multiple'),
(3, '¿Cuál es un ejemplo de un Servidor de Integración Continua (CI)?', 'opcion_multiple'),

(3, '¿Cuál es la relación de la CI con la Entrega Continua (CD)?', 'opcion_multiple'),
(3, '¿Qué permite la práctica de Pipeline como Código?', 'opcion_multiple'),
(3, '¿Qué significa la Trazabilidad en el contexto de Gestión de Artefactos?', 'opcion_multiple'),
(3, '¿Cuál es el riesgo principal de trabajar con ramas de desarrollo que duran semanas?', 'opcion_multiple'),
(3, '¿Cuál de estas actividades NO ocurre en la fase de Integración Continua (CI)?', 'opcion_multiple');
SELECT * FROM test.preguntas;
/*---------------------------------------------------------------------------------------*/
/*Modulo 4*/
INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
(4, '¿Cuál es la principal diferencia entre la Entrega Continua (Continuous Delivery) y el Despliegue Continuo (Continuous Deployment)?', 'opcion_multiple'),
(4, '¿Qué debe suceder con el Artefacto (paquete binario) al moverse del entorno QA al entorno Staging en CD?', 'opcion_multiple'),
(4, '¿Cuál es el objetivo principal de ejecutar Pruebas de Carga en el entorno de Staging?', 'opcion_multiple'),
(4, '¿Qué práctica permite desacoplar el Despliegue (enviar código a Producción) de la Liberación (hacerlo visible al usuario)?', 'opcion_multiple'),
(4, '¿Cuál es la principal ventaja del Despliegue Azul/Verde?', 'opcion_multiple'),

(4, '¿Cuál es el entorno que debe ser una réplica exacta de Producción, gracias a IaC?', 'opcion_multiple'),
(4, '¿Qué significa que un script de despliegue sea Idempotente?', 'opcion_multiple'),
(4, '¿Cuál es el propósito del Despliegue Canary?', 'opcion_multiple'),
(4, '¿Qué tipo de prueba verifica el flujo completo de la aplicación, interactuando con bases de datos y servicios externos reales en Staging?', 'opcion_multiple'),
(4, '¿Cómo se conoce a la capacidad de volver a la versión estable anterior en segundos, después de un despliegue fallido?', 'opcion_multiple'),

(4, '¿Por qué es importante el Monitoreo constante durante un Despliegue Canary?', 'opcion_multiple'),
(4, '¿Cuál es el principal riesgo que se mitiga al usar Feature Toggles en Producción?', 'opcion_multiple'),
(4, 'En el Despliegue Azul/Verde, ¿qué representa el entorno Azul?', 'opcion_multiple'),
(4, '¿Qué requisito de la infraestructura debe asegurarse en CD para que los entornos sean consistentes?', 'opcion_multiple'),
(4, '¿Cuál es el propósito de ejecutar Pruebas de Seguridad Dinámicas (DAST) en la fase de CD?', 'opcion_multiple'),

(4, '¿Cómo se llama la práctica de que los desarrolladores envían cambios constantemente a la rama principal (trunk) aunque la feature no esté terminada, usando toggles?', 'opcion_multiple'),
(4, '¿Qué se reduce al implementar un sistema de Reversión Instantánea?', 'opcion_multiple'),
(4, '¿Qué requiere la Entrega Continua (Continuous Delivery) que la diferencia de la automatización total?', 'opcion_multiple'),
(4, '¿Cuál es el propósito de realizar Pruebas de Integración E2E en Staging, y no solo Unitarias?', 'opcion_multiple'),
(4, 'En CD, ¿qué se entiende por Promoción del Artefacto?', 'opcion_multiple'),

(4, '¿Qué métrica es esencialmente medida por las Pruebas de Carga en Staging?', 'opcion_multiple'),
(4, '¿Cuál es el entorno que sirve como el punto de roll-back seguro en el Despliegue Azul/Verde?', 'opcion_multiple'),
(4, '¿Qué permite el uso de Feature Toggles con respecto al Desarrollo Basado en Troncal (TBD)?', 'opcion_multiple'),
(4, '¿Qué significa que el Despliegue Continuo (CD) tiene una confianza absoluta en el sistema?', 'opcion_multiple'),
(4, '¿Cuál es la última acción automatizada que realiza el pipeline de Entrega Continua (antes de la pausa manual)?', 'opcion_multiple');
SELECT * FROM test.preguntas;
/*---------------------------------------------------------------------------------------*/
/*Modulo 5*/
INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
(5, '¿Qué práctica de DevOps consiste en gestionar la infraestructura (servidores, redes) con archivos de código?', 'opcion_multiple'),
(5, '¿Qué problema ocurre cuando los entornos (Dev, Prod) se vuelven inconsistentes por cambios manuales?', 'opcion_multiple'),
(5, '¿En el Modelo Declarativo, ¿qué define el usuario?', 'opcion_multiple'),
(5, '¿Qué herramienta de IaC es un ejemplo principal del Modelo Declarativo y es multi-nube?', 'opcion_multiple'),
(5, '¿Cuál es la propiedad de IaC que asegura que repetir una operación no cause cambios o errores adicionales?', 'opcion_multiple'),

(5, '¿Qué implica el principio de Infraestructura Inmutable para un servidor existente?', 'opcion_multiple'),
(5, '¿Qué herramienta se enfoca principalmente en la Gestión de Configuración (instalar software dentro de una VM ya creada)?', 'opcion_multiple'),
(5, '¿En qué fase del pipeline de CD se ejecuta el comando terraform apply?', 'opcion_multiple'),
(5, '¿Qué comando de Terraform se utiliza en la fase CI para verificar la sintaxis y las políticas del código IaC?', 'opcion_multiple'),
(5, '¿Cuál es el beneficio de usar Entornos Desechables en el pipeline?', 'opcion_multiple'),

(5, '¿Qué herramienta se usa para la Orquestación de contenedores (gestión de clústeres y pods)?', 'opcion_multiple'),
(5, '¿En el Modelo Imperativo, ¿qué define el usuario?', 'opcion_multiple'),
(5, '¿Cuál es el principal beneficio de que el código de IaC esté en Git?', 'opcion_multiple'),
(5, '¿Cómo se conoce a la práctica de usar Ansible para configurar una VM que fue creada por Terraform?', 'opcion_multiple'),
(5, '¿Qué comando de Terraform genera un informe de los cambios que se van a aplicar a la infraestructura?', 'opcion_multiple'),

(5, '¿Cuál es el resultado de que el código de IaC siga un proceso de Pull Request?', 'opcion_multiple'),
(5, '¿Qué modelo de aprovisionamiento exige que el usuario defina el cómo (la secuencia de pasos)?', 'opcion_multiple'),
(5, '¿Cuál es el principal problema de los procesos de configuración de infraestructura manuales?', 'opcion_multiple'),
(5, '¿Qué hace la herramienta declarativa si el estado actual es igual al estado deseado?', 'opcion_multiple'),
(5, '¿Qué herramienta de gestión de configuración se caracteriza por ser imperativa y agentless (no requiere software en el servidor de destino)?', 'opcion_multiple'),

(5, '¿Cuál es la función principal de las Herramientas de Aprovisionamiento?', 'opcion_multiple'),
(5, '¿Qué concepto clave de la Lección 5.3 se relaciona directamente con la filosofía de contenedores (Docker)?', 'opcion_multiple'),
(5, '¿Qué significa que el código de IaC reside en el flujo de trabajo CI/CD?', 'opcion_multiple'),
(5, '¿Qué permite el comando terraform plan en el contexto de la Entrega Continua (CD)?', 'opcion_multiple'),
(5, '¿Cuál es la solución de IaC para el problema de que los administradores configuren servidores manualmente (ssh o clics en consolas)?', 'opcion_multiple');
SELECT * FROM test.preguntas;
/*---------------------------------------------------------------------------------------*/
/*Modulo 6*/
INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
(6, '¿Qué paquete incluye todo lo necesario para correr una aplicación (código, runtime y configuración)?', 'opcion_multiple'),
(6, '¿Cuál es la principal ventaja de un Contenedor sobre una Máquina Virtual (VM)?', 'opcion_multiple'),
(6, '¿Cuál es la plataforma más popular para crear y ejecutar contenedores?', 'opcion_multiple'),
(6, '¿Cómo se llama el archivo de texto que contiene las instrucciones para construir una imagen de contenedor?', 'opcion_multiple'),
(6, '¿Qué problema resuelve el contenedor al garantizar la paridad de entornos?', 'opcion_multiple'),

(6, '¿Qué es la Imagen de Contenedor?', 'opcion_multiple'),
(6, '¿Cómo se construyen las imágenes de contenedor para permitir una transferencia eficiente?', 'opcion_multiple'),
(6, '¿Qué se utiliza para referenciar una imagen específica con una versión única (ej. app:v1.2.3)?', 'opcion_multiple'),
(6, '¿Cómo se llama al repositorio centralizado donde se almacenan las imágenes de contenedores versionadas?', 'opcion_multiple'),
(6, '¿Qué comando se ejecuta en la fase de CI para crear la imagen a partir del Dockerfile?', 'opcion_multiple'),

(6, '¿Cuál es el proceso de automatizar el despliegue, la gestión y la escalabilidad de múltiples contenedores?', 'opcion_multiple'),
(6, '¿Cuál es el sistema de código abierto líder para la Orquestación de contenedores?', 'opcion_multiple'),
(6, '¿Bajo qué modelo de aprovisionamiento opera Kubernetes?', 'opcion_multiple'),
(6, '¿Cuál es la unidad de despliegue más pequeña en Kubernetes?', 'opcion_multiple'),
(6, '¿Qué objeto de K8s define cuántas réplicas de un Pod deben estar corriendo?', 'opcion_multiple'),

(6, '¿Qué componente de K8s compara constantemente el estado deseado con el estado actual para la auto-sanación?', 'opcion_multiple'),
(6, '¿Qué permite que dos equipos nombren un servicio igual (ej. database) sin conflicto en el mismo clúster K8s?', 'opcion_multiple'),
(6, '¿Cuál es el principal beneficio de usar Namespaces en K8s?', 'opcion_multiple'),
(6, '¿Qué herramienta de IaC (Módulo 5) se usa para aprovisionar el Clúster K8s completo?', 'opcion_multiple'),
(6, '¿En el pipeline de CD, ¿qué tipo de actualización facilita un Deployment de K8s de forma nativa?', 'opcion_multiple'),

(6, '¿El contenedor es una unidad de despliegue inmutable?', 'opcion_multiple'),
(6, '¿Qué concepto es un conjunto de máquinas (nodos) que ejecutan las aplicaciones en contenedores en Kubernetes?', 'opcion_multiple'),
(6, '¿Qué comando de Docker se usa para subir la imagen al Registro en la fase CI?', 'opcion_multiple'),
(6, '¿Qué tipo de archivos se utilizan en K8s para definir el estado deseado de los Pods y Deployments?', 'opcion_multiple'),
(6, '¿Cuál es el propósito del versionado de imágenes (etiquetas como v1.0.0)?', 'opcion_multiple');
select * from preguntas;
/*---------------------------------------------------------------------------------------*/
/*Modulo 7*/
INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
(7, '¿Cuál es la práctica que se basa en métricas predefinidas y responde a preguntas conocidas (ej. ¿CPU alta?)?', 'opcion_multiple'),
(7, '¿Qué propiedad del sistema permite responder a preguntas desconocidas sobre un fallo?', 'opcion_multiple'),
(7, '¿Cuál es el acrónimo que representa los tres pilares principales de la Observabilidad?', 'opcion_multiple'),
(7, '¿Qué pilar de la Observabilidad consiste en valores numéricos para medir tendencias?', 'opcion_multiple'),
(7, '¿Qué pilar consiste en registros de texto o JSON y se usa para la investigación profunda del fallo?', 'opcion_multiple'),

(7, '¿Qué pilar mide el camino completo que recorre una solicitud a través de múltiples microservicios?', 'opcion_multiple'),
(7, '¿Qué métrica se mide como el porcentaje de tiempo que el servicio está operativo?', 'opcion_multiple'),
(7, '¿Qué son las siglas SLI (Service Level Indicator)?', 'opcion_multiple'),
(7, '¿Qué son las siglas SLO (Service Level Objective)?', 'opcion_multiple'),
(7, '¿Qué concepto es un contrato legal con el cliente y puede implicar penalizaciones?', 'opcion_multiple'),

(7, '¿Cómo se llama al tiempo que se permite que el servicio falle sin incumplir el SLO?', 'opcion_multiple'),
(7, '¿Qué debe hacer el equipo si el Margen de Error se consume rápido?', 'opcion_multiple'),
(7, '¿Qué métricas mide el MTTR (Mean Time To Resolution) y el MTTD (Mean Time To Detection)?', 'opcion_multiple'),
(7, '¿Cómo actúa la Observabilidad en el pipeline de CD post-despliegue?', 'opcion_multiple'),
(7, '¿Qué acción puede iniciar el pipeline de CD si una alerta de SLO se dispara inmediatamente después de un despliegue?', 'opcion_multiple'),

(7, '¿Qué tipo de análisis se realiza sin culpa después de un incidente grave?', 'opcion_multiple'),
(7, '¿Cuál es el objetivo principal del análisis Post-Mortem en el principio Sin Culpa?', 'opcion_multiple'),
(7, '¿Qué datos de Observabilidad son cruciales para encontrar la causa raíz en el Post-Mortem?', 'opcion_multiple'),
(7, '¿En qué se convierten los resultados del Post-Mortem y los datos de Observabilidad para el equipo de Desarrollo?', 'opcion_multiple'),
(7, '¿Qué SLI mide el tiempo de respuesta de una solicitud?', 'opcion_multiple'),

(7, '¿La Observabilidad es más adecuada para sistemas monolíticos o microservicios?', 'opcion_multiple'),
(7, '¿Cuál es el rol de los Tableros (Dashboards) en el Monitoreo?', 'opcion_multiple'),
(7, '¿Qué tipo de Métricas son la base para establecer los SLIs?', 'opcion_multiple'),
(7, '¿Qué significa que la Observabilidad cierra el ciclo DevOps?', 'opcion_multiple'),
(7, '¿Cuál es el proceso formal para manejar los fallos críticos del sistema, desde la detección hasta la resolución?', 'opcion_multiple');
select * from preguntas;
/*---------------------------------------------------------------------------------------*/
/*Modulo 8*/
INSERT INTO Preguntas (idExamen, texto_pregunta, tipo) VALUES 
(8, '¿Cuál es la práctica de integrar la seguridad como una responsabilidad compartida, automatizada y continua en todas las fases de DevOps?', 'opcion_multiple'),
(8, '¿Cómo se llama el principio de aplicar controles de seguridad lo más pronto posible en el ciclo de vida, comenzando en la fase de código?', 'opcion_multiple'),
(8, '¿Cuál es el principal beneficio de aplicar la seguridad al principio del ciclo (Shift-Left)?', 'opcion_multiple'),
(8, '¿Qué problema tradicional resuelve DevSecOps, evitando que la seguridad actúe como un cuello de botella?', 'opcion_multiple'),
(8, '¿Para mantener la velocidad de DevOps, ¿cómo deben ser las pruebas y verificaciones de seguridad en las etapas de CI/CD?', 'opcion_multiple'),

(8, '¿Qué tipo de prueba de seguridad escanea el Código Fuente (estático) sin ejecutar la aplicación?', 'opcion_multiple'),
(8, '¿Qué tipo de prueba de seguridad escanea la aplicación en un entorno en ejecución (dinámico), simulando ataques externos?', 'opcion_multiple'),
(8, '¿Qué buscan los escáneres de dependencias en bibliotecas y paquetes de terceros?', 'opcion_multiple'),
(8, '¿Qué se debe escanear para detectar software desactualizado o con vulnerabilidades conocidas antes de desplegar un contenedor (Módulo 6)?', 'opcion_multiple'),
(8, '¿Qué nombre recibe la integración de herramientas de seguridad automatizadas en el pipeline de CI/CD?', 'opcion_multiple'),

(8, '¿Qué se define como la práctica de definir las reglas de negocio, los permisos y las políticas de seguridad en un formato de código versionado?', 'opcion_multiple'),
(8, '¿Qué término se refiere al cumplimiento de políticas internas, estándares de la industria (ej. ISO 27001) y regulaciones externas (ej. GDPR)?', 'opcion_multiple'),
(8, '¿Qué significa la sigla RBAC?', 'opcion_multiple'),
(8, '¿En Kubernetes (K8s), ¿qué se utiliza para limitar qué acciones puede realizar un usuario/servicio en un Namespace?', 'opcion_multiple'),
(8, '¿Qué política de gobernanza asegura que la persona que escribe el código no es la misma que lo aprueba para Producción?', 'opcion_multiple'),

(8, '¿Qué facilitan la automatización de CI/CD y el uso de la Observabilidad en términos de cumplimiento regulatorio?', 'opcion_multiple'),
(8, '¿Dónde nunca se deben almacenar las contraseñas, claves API o tokens (Secretos)?', 'opcion_multiple'),
(8, '¿Qué tipo de soluciones se deben usar para inyectar claves API solo en tiempo de ejecución, sin almacenarlas en el código?', 'opcion_multiple'),
(8, '¿Qué principio de seguridad limita el daño si una parte del sistema es comprometida, dando solo los permisos mínimos necesarios?', 'opcion_multiple'),
(8, '¿Qué significa hacer Hardening (endurecimiento) de contenedores?', 'opcion_multiple'),

(8, '¿Qué tipo de prueba de seguridad se enfoca en fallos como SQL Injection y Cross-Site Scripting (XSS) en el código fuente?', 'opcion_multiple'),
(8, '¿Cuál es la fuente de datos que se vuelve un requisito o story para el backlog de Desarrollo en el Bucle de Feedback de seguridad?', 'opcion_multiple'),
(8, '¿Qué herramienta de gestión se utiliza para inyectar contraseñas de bases de datos de forma segura en los Pods de K8s?', 'opcion_multiple'),
(8, '¿A quién recae principalmente la responsabilidad compartida de escribir código seguro en un modelo DevSecOps?', 'opcion_multiple'),
(8, '¿Qué proceso automatizado debe activarse rápidamente ante alertas críticas de vulnerabilidad o intrusión (ej. aislamiento de nodos o roll-back)?', 'opcion_multiple');