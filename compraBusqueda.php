<html>

<head>

  <title> La Casa Del Disco </title>
  <?php
  include('header.php');
  include('menu1.php');
  ?>

</head>

<?php


include('conexion_bbdd.php');


$id_producto = $_GET['id_producto'];

$query = "select * from producto where id_producto ='".$id_producto."'";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados

for ($i = 0; $i < $num; $i++) {

  $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

  $id_producto = $row['id_producto'];
  $titulo = $row['titulo'];
  $descripcion = $row['descripcion'];
  $precio = $row['precio'];
  $autor = $row['autor'];
  $imagen = $row['imagen'];

  $texto = "<html>   <figure class = 'producto' >

    <img  width = '200' class = 'foto' src = 'imagenes/$imagen'>


     <br><br>" . $precio . "$
     
     <form class = 'formulario' action = 'introduce_pedido.php' method = 'POST'>
     
     Usuario:  <input id = 'user' type = 'text' name = 'usuario' placeholder = 'Introduce tu usuario'/> <br/>
     Contraseña: <input type = 'password' name = 'clave' placeholder = 'Introduce tu contraseña'/> <br/><br/> 
     
     <input type = 'hidden' name = 'id_producto' value = '$id_producto'/>
     <input type = 'hidden' name = 'precio' value = '$precio'/>
     
     Cantidad: <input type = 'number' name = 'cantidad' /> <br/><br/> 


     <input type = 'submit' value = 'COMPRAR'>
     
     </form>
     
     </figcaption> 

     </figure></html>";


if($id_producto == $row['id_producto']){
	  echo $texto;
}
}

?>
<script src="tienda.js"> </script>

</body>


</html>