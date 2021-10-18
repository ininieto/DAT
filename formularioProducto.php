<?php

include('menuAdmin.php');
include('conexion_bbdd.php');


?>

<html>

	<!-- Ahora escribimos el formulario para editar los datos de los productos
		que deberá ser parecido al formulario para introducir productos -->
		
	
	<br><form class = "formulario" action = "introduce_productos.php" method = "POST" > 

<fieldset class = "registro"> 

    <legend> Datos del Producto </legend>

    <label>Título: </label> <input type = "text" name = "titulo" placeholder = "Escriba el título" maxlength = "255" /> <br/>
    <label>Categoría:</label> <input type = "text" name = "categoria" placeholder = "Escriba la categoría" maxlength = "100" /> <br/> <br>
    <label>Descripción del producto:</label> <input type = "text" name = "descripcion" placeholder=" Descripción"/> <br> <br>
    <label>Precio: </label> <input type = "number" name = "precio" placeholder = "Escriba el precio"  maxlength = "9" max = "999999999" /> <br/>
    <label>Autor:</label> <input type = "text" name = "autor" placeholder = "Escriba el autor" maxlength = "255" /> <br/>
    
</fieldset> <br/>



<input type = "submit" value = "Guardar los nuevos datos del producto"/> 

</form>

</html>