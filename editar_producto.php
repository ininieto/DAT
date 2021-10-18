<?php


include('menuAdmin.php');
include('conexion_bbdd.php');

$id_producto = $_GET['id_producto']; 

$query = "select * from producto where id_producto=".$id_producto;

$resultado = mysqli_query($bd, $query);

$row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

?>

<html>

	<!-- Ahora escribimos el formulario para editar los datos de los productos
		que deberá ser parecido al formulario para introducir productos -->
		
	
	<br><form class = "formulario" action = "editar_producto_bbdd.php" method = "POST" > 

<fieldset class = "registro"> 

    <input type = "hidden" name = "id_producto"  value = "<?php echo $row['id_producto']; ?>"/> 

    <legend> Datos del Producto </legend>

    <label>Título: </label> <input type = "text" name = "titulo" placeholder = "Escriba el nuevo título" value = "<?php echo $row['titulo']; ?>"/> <br/>
    <label>Categoría:</label> <input type = "text" name = "categoria" placeholder = "Escriba la nueva categoría" value = "<?php echo $row['categoria']; ?>"/> <br/> <br>
    <label>Descripción del producto:</label> <input type = "text" name = "descripcion" placeholder="Nueva Descripción" value = "<?php echo $row['descripcion']; ?>"/> <br> <br>
    <label>Precio: </label> <input type = "number" name = "precio" placeholder = "Escriba el nuevo precio"  maxlength = "9" max = "999999999" value = "<?php echo $row['precio']; ?>"/> <br/>
    <label>Autor:</label> <input type = "text" name = "autor" placeholder = "Escriba el nuevo autor" value = "<?php echo $row['autor']; ?>"/> <br/>
    
</fieldset> <br/>




<input type = "submit" value = "Editar los Datos del producto"/> 

</form>

</html>