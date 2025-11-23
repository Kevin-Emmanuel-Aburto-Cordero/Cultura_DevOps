SELECT * FROM test.examen;
use test;
INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas) 
VALUES (1, 'Evaluación del Modulo 1', 'Evalúa los temas de DevOps básico', 25);

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (2, 'Evaluación del Modulo 2', 'Evalúa los temas del Control de Versiones y Colaboración', 25);

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (3, 'Evaluación del Modulo 3', 'Evalúa los temas de la Integración Continua (CI)', 25);
select * from Examen;

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (4, 'Evaluación del Modulo 4', 'Evalúa los temas de la Entrega Continua (CD)', 25);
select * from Examen;

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (5, 'Evaluación del Modulo 5', 'Evalúa los temas de la Infraestructura como Código (IaC)', '25');
select * from Examen;

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (6, 'Evaluación del Modulo 6', 'Evalúa los temas de los Contenedores y Orquestación', '25');
select * from Examen;

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (7, 'Evaluación del Modulo 7', 'Evalúa los temas del Monitoreo, Observabilidad y Feedback','25');
select * from Examen;

INSERT INTO Examen (idModulo, titulo, descripcion, total_preguntas)
VALUES (8, 'Evaluación del Modulo 8',  'Evalúa los temas sobre DevSecOps y Gobernanza', '25');
select * from Examen;