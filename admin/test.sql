create database test;
use test;
create table Estudiante(
idEstudiante int primary key not null auto_increment,
usuario varchar(200) not null,
contraseña varchar(200) not null,
nombre_universidad varchar(200) not null,
pais varchar(200) not null,
estado varchar(200) not null,
fecha_registro varchar(200) not null
);

create table Modulo(
idModulo int primary key not null auto_increment,
nombre_modulo varchar(200) not null,
descripcion_unidad text,
objetivos text,
criterios_evaluacion text,
contenido text,
numero_actividades int(10) not null,
recursos text,
envalucacion int(10) not null
);

create table Actividades(
idActividad int primary key not null auto_increment,
idModulo int not null,
titulo_actividad varchar(200) not null,
tipo_Actividad varchar(200) not null,
foreign key (idModulo) references Modulo(idModulo)
);

create table Actividades_estudiante(
idActividad_estudiante int primary key not null auto_increment,
idEstudiante int not null,
idActividad int not null,
fecha_completada datetime default current_timestamp,
estado enum('pendiente', 'completada') default 'completada',
foreign key (idEstudiante) references Estudiante(idEstudiante),
foreign key (idActividad) references Actividades(idActividad)
);
alter table Actividades_estudiante add column calificacion int default 0;
truncate table Actividades_estudiante;
select * from Actividades_estudiante;
select calificacion FROM Actividades_estudiante;



create table Examen(
idExamen int not null primary key auto_increment,
idModulo int not null,
titulo varchar(200) not null,
descripcion text not null,
total_preguntas int not null,
foreign key (idModulo) references Modulo (idModulo)
);

create table Preguntas(
idPreguntas int not null primary key auto_increment,
idExamen int not null,
texto_pregunta text not null,
tipo varchar(200),
foreign key (idExamen) references Examen (idExamen)
);

create table Respuestas(
idRespuestas int not null primary key auto_increment,
idPreguntas int not null,
texto_respuesta text,
es_correcta tinyint(1),
foreign key (idPreguntas) references Preguntas (idPreguntas)
);

CREATE TABLE Examen_estudiante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idEstudiante INT NOT NULL,
    idExamen INT NOT NULL,
    calificacion INT NOT NULL,
    fecha_realizado DATETIME DEFAULT CURRENT_TIMESTAMP,
    intentos INT DEFAULT 1,
    estado VARCHAR(20) DEFAULT 'completado',
    FOREIGN KEY (idEstudiante) REFERENCES Estudiante(idEstudiante),
    FOREIGN KEY (idExamen) REFERENCES Examen (idExamen)
);
select * from Examen_estudiante;


CREATE TABLE Examenes_estudiante (
    idExamenes_estudiante INT AUTO_INCREMENT PRIMARY KEY,
    idEstudiante INT NOT NULL,
    idExamen INT NOT NULL,
    calificacion INT NOT NULL,
    fecha_realizado DATETIME DEFAULT CURRENT_TIMESTAMP,
    intentos INT DEFAULT 1,
    estado VARCHAR(20) DEFAULT 'completado',
    FOREIGN KEY (idEstudiante) REFERENCES Estudiante(idEstudiante),
    FOREIGN KEY (idExamen) REFERENCES Examen(idExamen)
);
select * from Examenes_estudiante;

create table Progresos_modulo(
idProgresos_modulo int not null primary key auto_increment,
idEstudiante int not null,
idModulo int not null,
estado VARCHAR(20) DEFAULT 'bloqueado',
fecha_desbloqueo datetime DEFAULT CURRENT_TIMESTAMP,
UNIQUE (idEstudiante, idModulo),
foreign key(idEstudiante) references Estudiante(idEstudiante)
);
SET FOREIGN_KEY_CHECKS = 0; -- Deshabilita la comprobación
drop table Progresos_modulo;
truncate table Progresos_modulo;
SET FOREIGN_KEY_CHECKS = 1;

select * from Progresos_modulo;
describe Estudiante;
describe Modulo;
describe Actividades;
describe Actividades_estudiante;
describe Examen;
show tables;
use test;
describe Modulo;