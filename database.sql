CREATE DATABASE guia;
USE guia;

CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL
);
CREATE TABLE estudios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    nivel_estudios ENUM('Sin estudios', 'Primarios', 'Secundarios') NOT NULL
);
CREATE TABLE deportes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    persona_id INT NOT NULL,
    deporte VARCHAR(50) NOT NULL,
    FOREIGN KEY (persona_id) REFERENCES personas(id) ON DELETE CASCADE
);
CREATE TABLE ingresos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    ingresos INT NOT NULL
);
CREATE TABLE contratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contenido TEXT NOT NULL
);
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    clave VARCHAR(255) NOT NULL
);
