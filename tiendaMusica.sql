create database dat003;


use dat003; /* USE sirve para abrir una base de datos */

create table usuario(

	id_usuario int unsigned not null auto_increment primary key,
	nombre char(50) not null,
	apellidos char(100),
	usuario char(50),
	email char(50),
	clave char(20),
	fecha_nacimiento date, 
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
	precio float(6, 2),
	autor char(255) not null,
	imagen char(200) not null /* Ruta de la imagen */
);



create table pedido(

	id_pedido int unsigned not null auto_increment primary key,
	id_cliente int unsigned not null,
	id_producto int unsigned not null,
	cantidad int unsigned not null,
	coste_total float(8,2),
	fecha_compra date not null
);
