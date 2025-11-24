/*En caso de fallo en una tabla, usar el siguiente bloque de codigo*/
/*
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table modulo; -- Nombre de la tabla
truncate table modulo; -- Nombre de la tabla
SET FOREIGN_KEY_CHECKS = 1;
*/

SELECT * FROM test.modulo;
use test;
insert into Modulo values(
1,
"Induccion a DevOps", 
"Aprender conceptos basicos", 
"Que el estudiante conozca y aprenda conceptos basicos sobre DevOps",
"Actividades, Examen", 
"¿Que es Devops?, Origen de DevOps, Ventajas sobre DevOps.", 
5, 
"Videos, Imagenes", 
1);

insert into Modulo values(
2,
"Control de Versiones y Colaboración", 
"Aprender conceptos basicos", 
"Que el estudiante conozca y aprenda el uso de Git, flujos de trabajo, repositorios remotos, revisiones de codigo y la colaboración entre equipos",
"Actividades, Examen", 
"¿Qué es Git?, ¿Qué es y como funciona un flujo de trabajo?, Repositorios remotos, Revisiones de codigo, ¿Como funciona la colaboración entre equipos con Git?", 
6, 
"Videos, Imagenes", 
1);

insert into Modulo values(
3,
"Integración Continua (CI)",
"Aprender conceptos basicos",
"Que el estudiante aprenda sobre la automatizacion del Build y las Pruebas",
"Actividades, Examen",
"Implementación de pipelines que automaticen la compilación, la ejecución de pruebas unitarias y el analisis de calidad de código",
5,
"Videos, Imagenes",
1
);

insert into Modulo values(
4,
"Entrega Continua (CD)",
"Aprender conceptos basicos",
"Que el estudiante aprenda sobre el Despliegue y Promoción",
"Actividades, Examen",
"Extender el pipeline de CI para automatizar el despliegue a múltiples entornos (Desarrollo, QA, Staging).",
5,
"Videos, Imagenes",
1
);

insert into Modulo values(
5,
"Infraestructura como Código (IaC)",
"Aprender conceptos basicos",
"Que el estudiante aprenda sobre la Gestión de Entornos",
"Actividades, Examen",
"herramientas para provisionar y gestionar la infraestructura de manera automatizada y reproducible.",
5,
"Videos, Imagenes",
1
);

insert into Modulo values(
6,
"Contenedores y Orquestación",
"Aprender conceptos basicos",
"Que el estudiante aprenda sobre la Estandarización y Escalabilidad",
"Actividades, Examen",
"Introducción a Docker para empaquetar aplicaciones y a Kubernetes para gestionar y orquestar grandes conjuntos de contenedores.",
5,
"Videos, Imagenes",
1
);

insert into Modulo values(
7,
"Monitoreo, Observabilidad y Feedback",
"Aprender conceptos basicos",
"Que el estudiante aprenda sobre la Salud del sistema",
"Actividades, Examen",
"Implementación de logging, métricas y tracing para detectar, diagnosticar y responder a problemas en producción.",
5,
"Videos, Imagenes",
1
);

insert into Modulo values(
8,
"DevSecOps y Gorbernanza",
"Aprender conceptos basicos",
"Que el estudiante aprenda sobre la Seguridad Integrada",
"Actividades, Examen",
"Integración de prácticas de seguridad en todas las etapas del pipeline (CI/CD). Revisión de principios de seguridad, Compliance y auditoría en entornos automatizados.",
6,
"Videos, Imagenes",
1
);