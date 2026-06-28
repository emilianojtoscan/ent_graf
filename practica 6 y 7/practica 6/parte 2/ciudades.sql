CREATE DATABASE practica;

USE practica;

CREATE TABLE ciudades(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(50),
    pais VARCHAR(50),
    habitantes INT,
    superficie DECIMAL(10,2),
    tieneMetro TINYINT(1)
);