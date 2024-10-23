create database ds1;

use ds1;

create table cliente(
id int primary key auto_increment,
nome varchar(50),
telefone varchar(20),
endereco varchar(100),
email varchar(50),
nascimento date
);

select * from cliente;