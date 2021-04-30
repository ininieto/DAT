<!DOCTYPE html>

<html>

    <head>

      <title> Registro </title>
        
      <?php 
      include('header.php'); 
      ?>
      
      <?php 
      include('menu1.php'); 
      ?>
    </head>
    

    <body>

	
        <form class = "formulario" action = "introduce_usuario.php" method = "POST" > 

        <fieldset class = "registro">

            <legend> Datos Personales </legend>

            <label>Nombre: </label> <input type = "text" name = "nombre" placeholder = "Escriba su Nombre"/> <br/>
            <label>Apellidos:</label> <input type = "text" name = "apellidos" placeholder = "Escriba sus Apellidos"/> <br/> <br>
            
            <label> Fecha de Nacimiento:</label> <input type = "text" name = "fecha_nacimiento" placeholder="Año-Mes-Día"/> <br> <br>

            <label>Teléfono: </label> <input type = "number" name = "telefono" placeholder = "Escriba su Teléfono"  maxlength = "9" max = "999999999"/> <br/>
            <label>Ciudad:</label> <input type = "text" name = "ciudad" placeholder = "Escriba su Ciudad"/> <br/>
            <label>Dirección:</label> <input type = "text" name = "direccion" placeholder = "Escriba su Dirección"/> <br/>
            

        </fieldset> <br/>

        <fieldset class = "registro">

            <legend> Registro </legend>


            <label>Nombre de usuario: </label> <input type = "text" name = "usuario" /> <br/>
            <label>Correo electrónico: </label> <input type = "text" name = "email" placeholder = "ejemplo@dominio.com" /> <br/>
            <label>Contraseña: </label> <input type = "password" name = "clave" placeholder = "*******" /> <br/>
            <label>Repita su contraseña: </label> <input type = "password" name = "clave2" placeholder = "*******" /> <br/>
			
			
			
        </fieldset> <br/>

        <p id = "texto">¿Quiere recibir notificaciones?: <br>
         <input type="radio" name = "spam" value = "si"> Sí <br>
         <input type="radio" name = "spam" value = "no"> No <br> </p>


        <input type = "submit" value = "Registrarme"/> 
        <input type = "reset" value = "Borrar"/>
		
		</form>
		

    <img class = "fondo" src = "imagenes/logo.png">

    <script src = "tienda.js"> </script>


    </body> 
        

</html>