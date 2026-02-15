/*En caso de fallo en una tabla, usar el siguiente bloque de codigo*/
/*
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table actividades_estudiante; -- Nombre de la tabla
truncate table actividades_estudiante; -- Nombre de la tabla
SET FOREIGN_KEY_CHECKS = 1;
*/
SELECT * FROM test.actividades_estudiante;
use test;
select * from actividades_estudiante where idEstudiante = 31;
select * from actividades_estudiante where idEstudiante = 32;
select * from actividades_estudiante where idEstudiante = 33;
select * from actividades_estudiante where idEstudiante = 34;
select * from actividades_estudiante where idEstudiante = 35;