create database votesDB;
use votesDB;

create table voters(
		id int not null auto_increment,
		name varchar(50) not null,
		image varchar(50) not null,
		email varchar(50) not null,
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

insert into parties (image, name) values ('images/1.jpg', 'Party 1');
insert into parties (image, name) values ('images/2.jpg', 'Party 2');
insert into parties (image, name) values ('images/3.jpg', 'Party 3');

