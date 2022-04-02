create database lsm;
use lsm;
drop database lsm;

CREATE TABLE login (
id int AUTO_INCREMENT PRIMARY KEY,
usuario varchar(50),
contraseña varchar(50),
puntuaje_mayor int(2)
);

Select*from login;