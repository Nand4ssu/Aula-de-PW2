CREATE DATABASE website_pdo;
USE website_pdo;

CREATE TABLE usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE ,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(255)
);
