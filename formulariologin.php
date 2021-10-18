<html>
  <head>
    <title> Login </title>

    <header> 
	<div id = headerLog Indiv> </div>

    <?php 
		include('header.php'); 
		include('menu1.php'); 
	?>
	
  </head>
  
  <body>
   

	<!--No entiendo muy bien la sintaxis de esto Iñigo-->
    <form class = "formulario" action = "inicio_sesion.php" method = "POST">  

        <fieldset id = identificate>

            <legend> Identifícate </legend>

            Usuario:  <input id = "user" type = "text" name = "usuario" placeholder = "Introduce tu usuario" maxlength="50"/> <br/>
            Contraseña: <input type = "password" name = "clave" placeholder = "Introduce tu contraseña" maxlength = "20"/> <br/><br/> <!-- Al poner type = "password" consigo que salgan puntitos en vez del texto -->

            <input type = "submit" value = "Iniciar Sesión">
        </fieldset>

    </form> <br/>


	
    <div class = "registrarse"> 
        
        ¿No estás registrado?

        <a href = "formularioregistro.php" > Regístrate</a>
	
    </div>

    <img class = "fondo"src = "imagenes/logo.png">

    <script src = "tienda.js"> </script>

  </body>
</html>

