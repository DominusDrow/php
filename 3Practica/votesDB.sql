create database votesDB;
use votesDB;

create table voters(
		id int not null auto_increment,
		name varchar(50) not null,
		image varchar(50) not null,
		primary key(id)
);

create table parties (
	id int not null auto_increment,
	image varchar(255) not null,
	name varchar(255) not null,
	primary key (id)
);

create table votes (
	id int not null auto_increment,
	voter_id int not null,
	party_id int not null,
	primary key (id),
	foreign key (voter_id) references voters(id),
	foreign key (party_id) references parties(id)
);

insert into parties (image, name) values ('./src/pri.png', 'Partido Revolucionario Institucional');
insert into parties (image, name) values ('./src/pan.png', 'Partido Acción Nacional');
insert into parties (image, name) values ('./src/prd.png', 'Partido de la Revolución Democrática');
insert into parties (image, name) values ('./src/morena.png', 'Movimiento Regeneración Nacional');
insert into parties (image, name) values ('./src/pt.png', 'Partido del Trabajo');
insert into parties (image, name) values ('./src/nulo.png', 'Nulo');

insert into voters (name, image) values ('Juan Perez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Maria Lopez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Pedro Sanchez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Luisa Garcia', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Jose Martinez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Maria Rodriguez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Pedro Hernandez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Luisa Ramirez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Jose Lopez', 'https://source.unsplash.com/random/400x400/?people');
insert into voters (name, image) values ('Maria Martinez', 'https://source.unsplash.com/random/400x400/?people');

insert into votes (voter_id, party_id) values (1, 1);


