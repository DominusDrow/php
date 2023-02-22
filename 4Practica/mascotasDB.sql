drop database if exists mascotasDB;

create database mascotasDB default character set utf8mb4 collate utf8mb4_unicode_ci;
use mascotasDB;

create table mascotas(
		id int auto_increment primary key,
		nombre varchar(50) not null,
		edad int not null,
		raza varchar(50) not null,
		color varchar(50) not null,
		sexo varchar(50) not null,
		descripcion varchar(50) not null,
		foto varchar(50) not null,
		estado int not null default 0,
	);

	create table usuarios(
		id int auto_increment primary key,
		nombre varchar(50) not null,
		telefono varchar(50) not null,
		contrasena varchar(50) not null,
		mascota int not null,
	);

	create table adopciones(
		id int auto_increment primary key,
		id_mascota int not null,
		id_usuario int not null,
		fecha timestamp not null default current_timestamp,
		primary key(id),
		foreign key(id_mascota) references mascotas(id),
		foreign key(id_usuario) references usuarios(id)
	);

	insert into usuarios(nombre, telefono, contrasena, mascota) values('admin', '123456789', 'root', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Alfredo', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Juan', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Pedro', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Maria', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Luis', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Ana', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Jose', '123456789', '1234', 0);
	insert into usuarios(nombre, telefono, contrasena, mascota) values('Luisa', '123456789', '1234', 0);

	
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Firulais', 2, 'Pastor Aleman', 'Cafe', 'Macho', 'Es un perro muy serio', './src/firulais.jpg');
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Luna', 1, 'Pastor Belga', 'Blanco', 'Hembra', 'Es un perro muy jugueton', './src/luna.jpg');
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Pepito', 3, 'Border Colie', 'Cafe', 'Macho', 'Es un perro muy gracioso', './src/pepito.jpg');
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Pepita', 2, 'Chihuaha', 'negro', 'Hembra', 'Es un perro muy cariñoso', './src/pepita.jpg');
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Roger', 2, 'Labrador', 'Gris', 'Macho', 'Es un perro muy serio', './src/Roger.jpg');
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Lola', 1, 'Pastor Belga', 'Blanco', 'Hembra', 'Es un perro muy jugueton', './src/lola.jpg');
	insert into mascotas(nombre, edad, raza, color, sexo, descripcion, foto) values('Max', 3, 'Border Colie', 'Cafe', 'Macho', 'Es un perro muy gracioso', './src/Max.jpg');


insert into adopciones(id_mascota, id_usuario) values(1, 2);
insert into adopciones(id_mascota, id_usuario) values(2, 3);
insert into adopciones(id_mascota, id_usuario) values(3, 4);





	
