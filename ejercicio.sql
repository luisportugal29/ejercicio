create database Ejercicio;
use Ejercicio;

create table empleados(
id int auto_increment not null,
nombre varchar(65) not null,
telefono char(10) not null,
direccion varchar(150),
fechaNacimiento date not null,
activo boolean not null,
primary key(id)
);


