CREATE DATABASE IF NOT EXISTS db_prato
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE db_prato;


CREATE TABLE usuario(
    codigo_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(100) NOT NULL
);


CREATE TABLE login(
    codigo_login INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_completo_login VARCHAR(100) NOT NULL,
    nome_login VARCHAR(50) NOT NULL UNIQUE,
    senha_login VARCHAR(32) NOT NULL,
    tipo_login INT(11) NOT NULL DEFAULT 0
);

ALTER TABLE login
    MODIFY codigo_login int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


INSERT INTO login (codigo_login, nome_completo_login, nome_login, senha_login, tipo_login) VALUES
(1, 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Usuario', 'usuario', '202cb962ac59075b964b07152d234b70', 1);