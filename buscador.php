<html>

<?php
include('menuAdmin.php');
include('conexion_bbdd.php');
?>

<body>

        <br><form class = "formulario" action = "busquedaSencilla_bd.php" method = "POST" >

        <fieldset class = "registro">

            <legend> Búsqueda </legend>

            <label>Buscar: </label> <input type = "text" name = "busqueda" placeholder = "Búsqueda" maxlength = "50"/> <br/>
            <input type = "submit" value = "Buscar"/> 
			
        </fieldset> <br/>
		</form>

		<br><form class = "formulario" action = "busqueda_bd.php" method = "POST" >
        <fieldset class = "registro">

            <legend> Búsqueda avanzada </legend>
			
			<label>Título: </label> <input type = "text" name = "titulo" placeholder = "Escriba el título" maxlength = "255" /> <br/>
			<label>Categoría:</label> <input type = "text" name = "categoria" placeholder = "Escriba la categoría" maxlength = "100" /> <br/> <br>
			<label>Descripción del producto:</label> <input type = "text" name = "descripcion" placeholder=" Descripción"/> <br> <br>
			<label>Precio: </label> <input type = "number" name = "precio" placeholder = "Escriba el precio"  maxlength = "9" max = "999999999" /> <br/>
			<label>Autor:</label> <input type = "text" name = "autor" placeholder = "Escriba el autor" maxlength = "255" /> <br/>
			<input type = "submit" value = "Buscar"/> 
           
			
			
        </fieldset> <br/>

		</form>
		
		

    <img class = "fondo" src = "imagenes/logo.png">

    <script src = "tienda.js"> </script>


    </body> 