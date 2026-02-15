/*En caso de fallo en una tabla, usar el siguiente bloque de codigo*/
/*
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table Actividades; -- Nombre de la tabla
truncate table Actividades; -- Nombre de la tabla
SET FOREIGN_KEY_CHECKS = 1;
*/

/*SELECT Modulo.nombre_modulo, Modulo.idModulo, Actividades.idActividad, Actividades.titulo_actividad
FROM actividades Actividades
INNER JOIN modulo Modulo ON Actividades.idModulo = Modulo.idModulo;*/
SELECT * FROM test.actividades;
use test;

drop table Actividades;
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) VALUES (1, 'Historia de DevOps', 'Lectura, Interactiva');
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) VALUES (1, 'Cultura y principios de DevOps', 'Lectura, Intecractiva'); 
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) VALUES (1, 'El ciclo de vida de DevOps (CI/CD)', 'Lectura, Interactiva');
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) VALUES (1, 'Herramientas fundamentales', 'Lectura, Interactividad');
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) VALUES (1, 'Más allá del ciclo de vida: DevSecOps', 'Lectura, Interactiva');
select * from Actividades;

INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) 
VALUES (2, 'Introducción a Git', 'Lectura, Interactiva'),
 (2, 'Flujo de trabajo con ramas (branching y merging)', 'Lectura, Intecractiva'),
 (2, 'Repositorios remotos: GitHub, GitLab, Bitbucket', 'Lectura, Interactiva'),
 (2, 'Buenas prácticas en commits y control de cambios', 'Lectura, Interactiva'),
 (2, 'Revisiones de código y pull requests', 'Lectura, Interactiva'),
 (2, 'Colaboración entre equipos con Git', 'Lectura, Interactiva');
 
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad) 
VALUES 
 (3, 'Definición y Principio del Commit Frecuente', 'Lectura, Interactiva'),
 (3, 'El Servidor de CI y la Automatización del Build', 'Lectura, Intecractiva'),
 (3, 'La Batería de Pruebas Automatizadas (Shift Left)', 'Lectura, Interactiva'),
 (3, 'Gestión de Artefactos y Repositorios Centrales', 'Lectura, Interactiva'),
 (3, 'Monitoreo, Visibilidad y Ciclo de Retroalimentación', 'Lectura, Interactiva');
 
 INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad)
 VALUES
 (4, 'CD vs. CD: Entrega Continua vs. Despliegue Continuo', 'Lectura, Interactiva'),
 (4, 'La Promoción del Artefacto y los Entornos Secuenciales', 'Lectura, Interactiva'),
 (4, 'Pruebas de Alto Nivel y la Necesidad de Carga/Rendimiento', 'Lectura, Interactiva'),
 (4, 'Desacoplar Despliegue de Liberación (Release) con Feature Toggles', 'Lectura, Interactiva'),
 (4, 'Estrategias de Despliegue de Bajo Riesgo (Canary y Azul/Verde)', 'Lectura, Interactiva');
 
 INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad)
 VALUES
 (5, 'La Transformación de la Gestión de Infraestructura', 'Lectura, Interactiva'),
 (5, 'Modelos de Aprovisionamiento: Declarativo vs. Imperativo', 'Lectura, Interactiva'),
 (5, 'El Principio de Idempotencia y la Inmutabilidad', 'Lectura, Interactiva'),
 (5, 'Herramientas Clave de IaC y sus Roles', 'Lectura, Interactiva'),
 (5, 'IaC y el Pipeline de Entrega Continua (CD)', 'Lectura, Interactiva');
 
INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad)
 VALUES
 (6, 'La Transformación de la Gestión de Infraestructura', 'Lectura, Interactiva'),
 (6, 'Modelos de Aprovisionamiento: Declarativo vs. Imperativo', 'Lectura, Interactiva'),
 (6, 'El Principio de Idempotencia y la Inmutabilidad', 'Lectura, Interactiva'),
 (6, 'Herramientas Clave de IaC y sus Roles', 'Lectura, Interactiva');
 
 INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad)
 VALUES
 (7, 'Monitoreo vs. Observabilidad: La Distinción Clave', 'Lectura, Interactiva'),
 (7, 'Los Tres Pilares de la Observabilidad (MELT)', 'Lectura, Interactiva'),
 (7, 'SLIs, SLOs y SLA: Midiendo el Éxito de Negocio','Lectura, Interactiva'),
 (7, 'Alertas, Dashboards y Gestión de Incidentes', 'Lectura, Interactiva');
 
 INSERT INTO Actividades (idModulo, titulo_actividad, tipo_actividad)
 VALUES
(8,'Introducción a DevSecOps: Shift-Left Security', 'Lectura, Interactiva'),
(8,'Pruebas de Seguridad en el Pipeline CI/CD', 'Lectura, Interactiva'),
(8,'Gobernanza y Conformidad como Código (GaaC)', 'Lectura, Interactiva'),
(8,'Gestión de Secretos y Hardening de Entornos', 'Lectura, Interactiva');
