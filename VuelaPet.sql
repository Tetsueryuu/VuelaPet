drop database vuelapet;
create database vuelapet;
use vuelapet;

create table contacto(
id_con int primary key,
nombre_con varchar(100),
edad_con varchar(4),
telefono_con varchar(15),
asiento_con varchar(100), 
origen_con varchar(50),
destino_con varchar(50),
hora_con varchar(50)
);

create table pasajero(
id_con int,
id_pas int auto_increment primary key,
nombre_pas varchar(100),
edad_pas varchar(4),
asiento_pas varchar(100), 
origen_pas varchar(50),
destino_pas varchar(50),
hora_pas varchar(50),
foreign key (id_con) references contacto(id_con)
);

select * from pasajero;
select * from contacto;
select count(id_pas) from pasajero;