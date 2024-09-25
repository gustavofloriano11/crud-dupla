CREATE DATABASE escola;

USE escola;

CREATE TABLE professores(
	id_professor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone CHAR(11) NOT NULL,
    salario INT NOT NULL,
    idade VARCHAR(3)
);

CREATE TABLE aulas(
	id_aula INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sala VARCHAR(50) NOT NULL,
    materia VARCHAR(50) NOT NULL,
    capacidade INT NOT NULL,
    assunto VARCHAR(100)
);

CREATE TABLE diario(
	id_diario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_professor INT NOT NULL,
    id_aula INT NOT NULL,
    FOREIGN KEY (id_professor) REFERENCES professores(id_professor),
    FOREIGN KEY (id_aula) REFERENCES aulas(id_aula),
    hora_aula TIME
);