# leer-JSON-MySQL-PHP-Flutter
Ejemplo sencillo de como leer un JSON con información de MySQL y PHP en Flutter

SQL

create database pruebas;

use pruebas;

create table usuarios(
  idUsuario int primary key auto_increment,
  nombre varchar(50) not null,
  telefono varchar(13) not null,
  email varchar(20) not null
);
