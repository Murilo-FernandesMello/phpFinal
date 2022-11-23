create database bdLogin;
use bdLogin;

create table tbUsuario(
idUsu int not null primary key auto_increment,
nomeUsu varchar (80) not null,
emailUsu varchar (80) not null,
senhaUsu varchar (20) not null,
dataNasc datetime,
ativo bit);

create table tbAdmin(
idAdmin int not null primary key auto_increment,
emailAdmin varchar(80) not null,
senhaAdmin varchar(80) not null);

insert into tbAdmin
values (1,'murilofmello@gmail.com', '123456');

select * from tbAdmin;

drop table tbUsuario;

create table tbUsu(
id int not null auto_increment primary key,
nome varchar (80) not null,
email varchar (80) not null,
senha varchar (20) not null,
nasc date,
ativo boolean);

insert into tbUsu
values(1,'Teste', 'teste@gmail.com', '123', '2005/10/07',false);


select * from tbUsu;

alter table tbUsu add adm boolean;

delete from tbUsu where id = 1;

insert into tbUsu
values(1, "Teste", "teste@gmail.com", "123", "2005/10/07", false, false);

delete from tbAdmin where idAdmin = 1;

alter table tbAdmin add adm boolean;

insert into tbAdmin
values(1, "murilo@gmail.com", 123, true);

drop table tbAdmin;

insert into tbUsu
values (2, "Murilo", "murilo@gmail.com", "123", "2005/10/07", true, true);

select * from tbUsu;

use bdLogin;