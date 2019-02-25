create database chat;

use chat;

create table mensajes(
	idMensaje int primary key auto_increment,
	mensaje varchar(100) not null
);

