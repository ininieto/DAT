<html>

    <head>

        <title> Registro </title>
        
		<?php 
		include('header.php'); 
		include('menu1.php'); 
		?>
	
    </head>
    

    <body>

        <form class = "formulario" action = "registro.php" method = "POST" >

        <fieldset class = "registro">

            <legend> Datos Personales </legend>

            <label>Nombre: </label> <input type = "text" name = "nombre" placeholder = "Escriba su Nombre" maxlength = "50"/> <br/>
            <label>Apellidos:</label> <input type = "text" name = "apellidos" placeholder = "Escriba sus Apellidos" maxlength= "10"/> <br/> <br>
            
            <label> Fecha de Nacimiento:</label> <input type = "text" name = "fecha_nacimiento" placeholder="Día/Mes/Año"/ maxlength = "50"> <br> <br>

            <label>Teléfono: </label> <input type = "number" name = "telefono" placeholder = "Escriba su Teléfono"  maxlength = "9" max = "999999999"/> <br/>
            <label>Ciudad:</label> <input type = "text" name = "ciudad" placeholder = "Escriba su Ciudad"/ maxlength = "30">  <br/>
            <label>Dirección:</label> <input type = "text" name = "direccion" placeholder = "Escriba su Dirección"/ maxlength = "30" > <br/>
            

        </fieldset> <br/>

        <fieldset class = "registro">

            <legend> Registro </legend>


            <label>Nombre de usuario: </label> <input type = "text" name = "usuario" placeholder = "Introduzca el nombre de usuario" / maxlength="50"> <br/>
            <label>Correo electrónico: </label> <input type = "text" name = "email" placeholder = "ejemplo@dominio.com" maxlength="50"/> <br/>
            <label>Contraseña: </label> <input type = "password" name = "clave" placeholder = "*******" / maxlength="20"> <br/>
            <label>Repita su contraseña: </label> <input type = "password" name = "clave2" placeholder = "*******" maxlength = "20"/> <br/>
			
			
			
        </fieldset> <br/>

        <p id = "texto"> ¿Quiere recibir notificaciones?: <br>
         <input type="radio" name = "spam"> Sí <br>
         <input type="radio" name = "spam"> No <br> </p>


        <input type = "submit" value = "Registrarme"/> 
        <input type = "reset" value = "Borrar"/>
		
		</form>
		
		

    <img class = "fondo" src = "imagenes/logo.png">

    <script src = "tienda.js"> </script>


    </body> 
        

</html>