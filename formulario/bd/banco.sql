create database if not exists cadastrado;
use cadastrado;

create table cliente
(
	id int not null auto_increment primary key,
    nome varchar(40),
    email varchar(40),
    idade int,
    curso varchar(40)
);