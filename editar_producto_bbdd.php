<?php

include('menuAdmin.php'); 
include('conexion_bbdd.php'); //Para poder modificar la base de datos

//post los coge del formulario

@ $titulo = $_POST['titulo'];
@ $categoria = $_POST['categoria'];
@ $descripcion = $_POST['descripcion'];
@ $precio = $_POST['precio'];
@ $autor = $_POST['autor'];
@ $imagen = $_POST['imagen'];
@ $id_producto = $_POST['id_producto'];


//Trim los mete en la base de datos
$titulo = trim($titulo);
$categoria = trim($categoria);
$descripcion = trim($descripcion);
$precio= trim($precio);
$autor = trim($autor);
$imagen = trim($imagen);
$id_producto = trim($id_producto);



if(!$titulo || !$categoria || !$descripcion || !$precio || !$autor){
    echo "faltan los obligatorios";
     exit;
}

if (!is_numeric($precio))
	{
    echo'<script type="text/javascript">
    alert("El precio ha de ser númerico");
    window.location.href="producto.php";
    </script>';
		exit;
    }


$titulo = addslashes($titulo);
$categoria = addslashes($categoria);
$descripcion = addslashes($descripcion);
$precio= addslashes($precio);
$autor = addslashes($autor);
$imagen = addslashes($imagen);
$id_producto = addslashes($id_producto);


$query = "UPDATE producto  SET id_producto = '".$id_producto."', titulo = '".$titulo."', 
          categoria = '".$categoria."', descripcion = '".$descripcion."',
          precio = '".$precio."', autor = '".$autor."', imagen = '".$imagen."'
          WHERE id_producto =". $id_producto ;



$resultado = mysqli_query($bd, $query);

if($resultado)

   echo'<script type="text/javascript">
    alert("¡Producto editado con éxito!");
    window.location.href="producto.php";
    </script>';
else
    echo'<script type="text/javascript">
    alert("Oh OH! Algo no ha ido bien. or favor, vuelva a intentarlo");
    window.location.href="producto.php";
    </script>';

?>