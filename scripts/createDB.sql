create database easy;
use easy;

create table acessos(
id int not null auto_increment,
nivel varchar(50) null,
primary key (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS estados (
id INT(11) NOT NULL AUTO_INCREMENT,
estado VARCHAR(50) NULL DEFAULT NULL,
PRIMARY KEY (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

create table empresas(
id int not null auto_increment,
nm_empresa varchar(255) null,
cnpj varchar(50) null,
endereco varchar(255),
bairro varchar(255),
cidade varchar(255),
idEstado int null,
primary key(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;