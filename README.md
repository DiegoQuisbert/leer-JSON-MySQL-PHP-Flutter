# leer-JSON-MySQL-PHP-Flutter
Ejemplo sencillo de como leer un JSON con información de MySQL y PHP en Flutter

<b> SQL PARA CREAR LA BASE DE DATOS </b>

create database pruebas; <br>

use pruebas; <br>

create table usuarios( <br>
  idUsuario int primary key auto_increment, <br>
  nombre varchar(50) not null, <br>
  telefono varchar(13) not null, <br>
  email varchar(20) not null <br>
); <br>
