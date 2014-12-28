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

create table `status`(
id int not null auto_increment,
nm_status varchar(50),
primary key(id))
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
contato varchar(255),
fone varchar(50),
idStatus int null,
dataCadastro date null,
dataPagamento int null,
created_at varchar(60) null,
updated_at varchar(60) null,
primary key(id),
CONSTRAINT FK_idStatus_empresas FOREIGN KEY (idStatus) REFERENCES `status`(id),
CONSTRAINT FK_idEstado_empresas FOREIGN KEY (idEstado) REFERENCES estados(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

create table usuarios(
id int not null auto_increment,
nm_usuario varchar(255) null,
matricula varchar(20),
login varchar(50),
senha varchar(100),
idEmpresa int null,
idAcesso int null,
idStatus int null,
created_at varchar(60) null,
updated_at varchar(60) null,
primary key(id),
CONSTRAINT FK_idStatus_usuarios FOREIGN KEY (idStatus) REFERENCES `status`(id),
CONSTRAINT FK_idEmpresa_usuarios FOREIGN KEY (idEmpresa) REFERENCES empresas(id),
CONSTRAINT FK_idAcesso_usuarios FOREIGN KEY (idAcesso) REFERENCES acessos(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

create table historico_pagamento(
id int not null auto_increment,
idEmpresa int null,
idUsuario int null,
dataPagamento date null,
created_at varchar(60) null,
updated_at varchar(60) null,
primary key(id),
CONSTRAINT FK_idEmpresa_hp FOREIGN KEY (idEmpresa) REFERENCES empresas(id),
CONSTRAINT FK_idUsuario_hp FOREIGN KEY (idUsuario) REFERENCES usuarios(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

create table setores(
id int not null auto_increment,
nm_setor varchar(255) null,
idEmpresa int null,
created_at varchar(60) null,
updated_at varchar(60) null,
primary key(id),
CONSTRAINT FK_idEmpresa_setores FOREIGN KEY (idEmpresa) REFERENCES empresas(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

create table equipamentos(
id int not null auto_increment,
nm_equipamento varchar(255),
tombo varchar(100),
idSetor int null,
n_serie varchar(100),
marca varchar(255),
modelo varchar(255),
observacao varchar(255),
idStatus int null,
created_at varchar(60) null,
updated_at varchar(60) null,
primary key(id),
CONSTRAINT FK_idStatus_equipamentos FOREIGN KEY (idStatus) REFERENCES `status`(id),
CONSTRAINT FK_idSetor_equipamentos FOREIGN KEY (idSetor) REFERENCES setores(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS ocorrencias (
id INT(11) NOT NULL AUTO_INCREMENT,
`data` DATE NULL DEFAULT NULL,
horario VARCHAR(255) NULL DEFAULT NULL,
idUsuario INT(11) NULL DEFAULT NULL,
idEquipamento INT(11) NULL DEFAULT NULL,
ocorrencia VARCHAR(255) NULL DEFAULT NULL,
data_conclusao date null,
retorno varchar(255) null,
created_at varchar(60) null,
updated_at varchar(60) null,
PRIMARY KEY (id),
CONSTRAINT FK_idUsuario_ocorrencias FOREIGN KEY (idUsuario) REFERENCES usuarios(id),
CONSTRAINT FK_idEquipamento_ocorrencias FOREIGN KEY (idEquipamento) REFERENCES equipamentos(id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `logs`(
id int not null auto_increment,
`data` date null,
horario varchar(50) null,
idUsuario int null default null,
acao varchar(5000) null,
created_at varchar(60) null,
updated_at varchar(60) null,
primary key(id),
CONSTRAINT FK_idUsuario_logs FOREIGN KEY (idUsuario) REFERENCES usuarios (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


