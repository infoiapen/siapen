CREATE DATABASE IF NOT EXISTS siapen;

USE siapen;

CREATE TABLE tab_usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(300),
    status CHAR(1)
);

CREATE TABLE tab_log_tentativa(
	id INT AUTO_INCREMENT PRIMARY KEY,
    ip VARCHAR(15),
    email VARCHAR(100),
    senha VARCHAR(300),
    origem VARCHAR(300),
    bloqueado CHAR(3),
    data_hora timestamp NULL DEFAULT CURRENT_TIMESTAMP
);