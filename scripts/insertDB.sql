INSERT INTO estados (estado) VALUES ('Acre'), ('Alagoas'),('Amapá'),('Amazonas'),('Bahia'),('Ceará'),
('Distrito Federal'),('Espírito Santo'),('Goiás'),('Maranhão'),('Mato Grosso'),('Mato Grosso do Sul'),
('Minas Gerais'),('Pará'),('Paraíba'),('Paraná'),('Pernambuco'),('Piauí'),('Rio de Janeiro'),
('Rio Grande do Norte'),('Rio Grande do Sul'),('Rondônia'),('Roraima'),('Santa Catarina'),
('São Paulo'),('Sergipe'),('Tocantins');

INSERT INTO acessos (nivel) VALUES ('Administrador'), ('Comum');
INSERT INTO `status` (nm_status) VALUES ('ATIVO'), ('INATIVO');

INSERT INTO usuarios (nm_usuario, idAcesso, login, senha, idStatus) 
VALUES ('Administrador', '1', 'admin',md5(123), '1');

INSERT INTO empresas (`nm_empresa`, `idEstado`, `idStatus`, `dataCadastro`, `dataPagamento`) 
VALUES ('PlusVision', '5', '1', '2014-12-27', '05');
