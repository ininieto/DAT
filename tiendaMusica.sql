create database dat003;


use dat003; /* USE sirve para abrir una base de datos */

create table usuario(

	id_usuario int unsigned not null auto_increment primary key,
	nombre char(50) not null,
	apellidos char(100) not null,
	usuario char(50) not null,
	email char(50) not null,
	clave char(20) not null,
	fecha_nacimiento date not null, 
	telefono char(20),
	direccion char(30) not null,
	ciudad char(30) not null,
	privilegio tinyint, /* indica si el usuario es administrador o no */
	spam tinyint /* Si el usuario quiere recibir avisos, un radio boton */
);


create table producto(


	id_producto int unsigned not null auto_increment primary key,
	titulo char(255) not null,
	categoria char (100) not null, /* cd, vinilo, blu-ray... */
	descripcion text not null, 
	precio float(6, 2) not null,
	autor char(255) not null,
	imagen char(200) not null /* Ruta de la imagen */
);



create table pedido(

	id_pedido int unsigned not null auto_increment primary key,
	id_cliente int unsigned not null,
	id_producto int unsigned not null,
	cantidad int unsigned not null,
	coste_total float(8,2) not null,
	fecha_compra date not null
);
