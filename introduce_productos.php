<?php

include('header.php');
include('menu1.php');

//post los coge del formulario

@ $titulo = $_POST['titulo'];
@ $categoria = $_POST['categoria'];
@ $descripcion = $_POST['descripcion'];
@ $precio = $_POST['telefono'];
@ $autor = $_POST['autor'];
@ $imagen = $_POST['imagen'];


//Trim los mete en la base de datos
$titulo = trim($titulo);
$categoria = trim($categoria);
$descripcion = trim($descripcion);
$precio= trim($precio);
$autor = trim($autor);
$imagen = trim($imagen);


 if(!$titulo || !$categoria || !$descripcion || !$precio || !$autor || !$imagen){
    echo "faltan los obligatorios";
    exit;
 }

$titulo = addslashes($titulo);
$categoria = addslashes($categoria);
$descripcion = addslashes($descripcion);
$precio= addslashes($precio);
$autor = addslashes($autor);
$imagen = addslashes($imagen);

include('conexion_bbdd.php');

$query = "insert into producto values (null, '".$titulo . "', '".$categoria . "', '".$descripcion . "', '".$precio . "', '".$autor . "', '".$imagen . "')";


$resultado = mysqli_query($bd, $query);

if($resultado)
    echo "ok";
else
    echo "ko";

?>