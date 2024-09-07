CREATE DATABASE secretaria;
USE secretaria;

CREATE TABLE curso(
cd int primary key auto_increment,
nome varchar(120) not null);

CREATE TABLE turma(
cd int primary key auto_increment,
nome varchar(45) not null,
id_curso int,
foreign key (id_curso) references curso(cd));

CREATE TABLE aluno(
rm int primary key not null,
nome varchar(80) not null,
dt_nasc date,
id_turma int,
foreign key (id_turma) references turma(cd));


INSERT into CURSO (nome) VALUES 
("Desenvolvimento de Sistemas");

INSERT INTO turma (nome, id_curso) VALUES
("3DSI3",1);

INSERT INTO aluno(rm, nome, dt_nasc, id_turma) VALUES
(040310,"Rodolfo Araujo", "198-02-13",1);


CREATE TABLE armario(
cd INT PRIMARY KEY AUTO_INCREMENT,
tamanho VARCHAR(45),
valor DECIMAL(10,2),
status VARCHAR(45));

INSERT INTO armario VALUES
(null, "Pequeno",50, ""),
(null, "Pequeno",50, "ocupado"),
(null, "Pequeno",50, ""),
(null, "Pequeno",50, ""),
(null, "Pequeno",50, "ocupado"),
(null, "Pequeno",50, "ocupado"),
(null, "Pequeno",50, ""),
(null, "Pequeno",50, ""),
(null, "Pequeno",50, "vencido"),
(null, "Pequeno",50, ""),
(null, "Pequeno",50, "vencido"),
(null, "Pequeno",50, "");