/*En caso de fallo en una tabla, usar el siguiente bloque de codigo*/
/*
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table examenes_estudiante; -- Nombre de la tabla
truncate table examenes_estudiante; -- Nombre de la tabla
SET FOREIGN_KEY_CHECKS = 1;
*/
SELECT * FROM test.examenes_estudiante;
use test;