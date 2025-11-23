SELECT * FROM test.actividades_estudiante;
use test;
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
truncate table actividades_estudiante;
SET FOREIGN_KEY_CHECKS = 1; --
describe actividades_estudiante;
select * from  actividades_estudiante where idEstudiante = 25;