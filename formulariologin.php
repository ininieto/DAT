<!DOCTYPE html>

<html>
  <head>
    <title> Login </title>

    <?php 
    include('header.php'); 
    ?>
    
    <?php 
    include('menu1.php'); 
    ?>
  </head>
  

  <body>
  
  
    <form class = "formulario" action = "introduce_clientes.php" method = "POST"> <!-- FALTA EL ACTION --> 

        <fieldset id = identificate>

            <legend> Identifícate </legend>

            Usuario:  <input id = user type = text name = usuario placeholder = "Introduce tu usuario"/> <br/>
            Contraseña: <input type=text name = clave placeholder = "Introduce tu contraseña"/> <br/><br/>

            <input type = "submit" value = "Iniciar Sesión">
        </fieldset>

    </form> <br/>

    <div class = registrarse> 
        
        ¿No estás registrado?

        <a href = "formularioregistro.php" > Regístrate</a>
	
    </div>

    <img class = "fondo"src = "imagenes/logo.png">

    <script src = "tienda.js"> </script>

  </body>
</html>

