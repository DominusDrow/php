create database videoteca;
use videoteca;
create table pelicula (
	id int not null auto_increment primary key,
	titulo varchar(50) not null, 
	director varchar(50) not null, 
	genero varchar(50), 
	duracion int);

create table usuario (
	id int not null auto_increment primary key,
	nombre varchar(50) not null, 
	apellido varchar(50) not null, 
	edad int, 
	telefono varchar(50), 
	contrasena varchar(50));

create table alquiler (
	id_usuario int not null, 
	id_pelicula int not null, 
	fecha_alquiler date, 
	fecha_devolucion date, 
	FOREIGN KEY (id_usuario) REFERENCES usuario(id), 
	FOREIGN KEY (id_pelicula) REFERENCES pelicula(id),
	primary key (id_usuario, id_pelicula));
	
alter table pelicula add column anyo int;

insert into pelicula (titulo, director, genero, duracion, anyo) values ('El padrino', 'Francis Ford Coppola', 'Drama', 175, 1972);
insert into pelicula (titulo, director, genero, duracion, anyo) values ('El padrino II', 'Francis Ford Coppola', 'Drama', 202, 1974);
insert into pelicula (titulo, director, genero, duracion, anyo) values ('El padrino III', 'Francis Ford Coppola', 'Drama', 162, 1990);

insert into usuario (nombre, apellido, edad, telefono, contrasena) values ('Pepe', 'Perez', 25, '666666666', '1234');
insert into usuario (nombre, apellido, edad, telefono, contrasena) values ('Juan', 'Garcia', 30, '666666667', '1234');
insert into usuario (nombre, apellido, edad, telefono, contrasena) values ('Maria', 'Lopez', 35, '666666668', '1234');

insert into alquiler (id_usuario, id_pelicula, fecha_alquiler, fecha_devolucion) values (1, 1, '2018-01-01', '2018-01-02');
insert into alquiler (id_usuario, id_pelicula, fecha_alquiler, fecha_devolucion) values (2, 2, '2018-02-01', '2018-02-02');
insert into alquiler (id_usuario, id_pelicula, fecha_alquiler, fecha_devolucion) values (3, 3, '2018-03-01', '2018-03-02');



	

