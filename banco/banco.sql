CREATE DATABASE IF NOT EXISTS banco;

USE banco;

CREATE TABLE IF NOT EXISTS usuario(

	codigo int not null auto_increment primary key COMMENT "Chave Primária",
	nome varchar(255) not null COMMENT "Nome",
	sexo char(1) not null COMMENT "Sexo"


);