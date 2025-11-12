CREATE DATABASE noazul;
USE noazul;

CREATE TABLE informacoes (
    cpf VARCHAR(11) PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    infocadastro DATE
);