<?php



include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

$id_usuario = $_GET['id_usuario']; //tomamos la variable id_usuario

$query = "delete from usuario where id_usuario=".$id_usuario;

$resultado = mysqli_query($bd, $query);

header('Location: usuario.php');

//faltaria avisar de errores si no existe algo




?>