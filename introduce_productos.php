<?php

include('menuAdmin.php'); //Aquí habrá que poner menuAdmin
include('conexion_bbdd.php'); //Para poder modificar la base de datos

//post los coge del formulario

@ $titulo = $_POST['titulo'];
@ $categoria = $_POST['categoria'];
@ $descripcion = $_POST['descripcion'];
@ $precio = $_POST['precio'];
@ $autor = $_POST['autor'];
@ $imagen = $_POST['imagen'];


//Trim los mete en la base de datos
$titulo = trim($titulo);
$categoria = trim($categoria);
$descripcion = trim($descripcion);
$precio= trim($precio);
$autor = trim($autor);
$imagen = trim($imagen);


if(!$titulo || !$categoria || !$descripcion || !$precio || !$autor){
    echo "faltan los obligatorios";
     exit;
}

if (is_numeric($precio))
	{
        echo "El precio introducido es numérico";
    }
	else 
	{
        echo "El precio ha de ser un valor numérico";
		exit;
    }

$titulo = addslashes($titulo);
$categoria = addslashes($categoria);
$descripcion = addslashes($descripcion);
$precio= addslashes($precio);
$autor = addslashes($autor);
$imagen = addslashes($imagen);


$query = "insert into producto values (null, '".$titulo . "', '".$categoria . "', '".$descripcion . "', '".$precio . "', '".$autor . "', '".$imagen . "')";



$resultado = mysqli_query($bd, $query);

if($resultado)
      echo'<script type="text/javascript">
    alert("¡Producto introducido con éxito!");
    window.location.href="producto.php";
    </script>';
else
  

?>