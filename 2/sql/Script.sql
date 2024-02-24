create database sistema_cracha;

use sistema_cracha;

create table usuarios(
	id INT auto_increment primary key,
	username varchar(50) not null,
	password varchar(255) not null,
	nivel_autorizacao INT NOT null,
	email varchar(255)
);

SELECT * FROM usuarios;

INSERT INTO usuarios (username, password, nivel_autorizacao, email)
VALUES ('root', 'root', '0', 'jeffersonlegnaghi07@gmail.com');

INSERT INTO usuarios (username, password, nivel_autorizacao, email)
VALUES ('user', 'user', '1', 'jeffersonlegnaghi07@gmail.com');

DROP table usuarios;

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(255) NOT NULL,
    Sobrenome VARCHAR(255) NOT NULL,
    Cargo VARCHAR(255) NOT NULL,
    Setor VARCHAR(255) NOT NULL,
    Escola VARCHAR(255) NOT NULL,
    Foto BLOB
);

SELECT * FROM funcionarios;

DROP table funcionarios;

INSERT INTO funcionarios (id, Nome, Sobrenome, Cargo, Setor, Escola, Foto)
VALUES ('0', 'nome', 'sonrenome', 'cargo', 'setor', 'escola', 'foto');

DROP DATABASE sistema_cracha;

