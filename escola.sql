CREATE DATABASE escola;

USE escola;

CREATE TABLE professores(
	id_professor INT NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone CHAR(11) NOT NULL,
    salario INT NOT NULL
);

CREATE TABLE aulas(
	id_aula INT NOT NULL PRIMARY KEY,
    sala VARCHAR(50) NOT NULL,
    materia VARCHAR(50) NOT NULL,
    capacidade INT NOT NULL,
    assunto VARCHAR(100)
);

CREATE TABLE diario(
	id_professor INT NOT NULL,
    id_aula INT NOT NULL,
    FOREIGN KEY (id_professor) REFERENCES professores(id_professor),
    FOREIGN KEY (id_aula) REFERENCES aulas(id_aula),
    hora_aula TIME
);