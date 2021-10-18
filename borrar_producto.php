<?php

include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

$id_producto = $_GET['id_producto']; //tomamos la variable id_producto

$query = "delete from producto where id_producto=".$id_producto;

$resultado = mysqli_query($bd, $query);

header('Location: producto.php');



?>