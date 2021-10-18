<!--EN ESTE ARCHIVO INCLUIMOS FRAGMENTOS DE CÓDIGO HTML QUE SE REPITEN -->

	<!--Para que haya un menú desplegable en todas las subpáginas, y además puedas
      volver más facilmente al menú principal-->

<html>

	  
	<body>
	
	<?php
	
		include('header.php');
		
	?>
	
      <div class = "navbar">
		
		<a href = "index.php"> Menú Principal </a>
        <a href = "formularioLogIn.php" id = "login"> Login</a>
        <a href = "producto.php"> Editar Producto</a>
		<a href = "usuario.php"> Editar Usuario</a>
		<a href = "formularioProducto.php"> Introducir Producto</a>
		<a href = "formularioregistroAdmin.php"> Introducir Usuario</a>
		<a href = "pedido.php"> Ver Pedidos</a>
        <div class = "dropdown">
       
      </div>

	</body>
	
</html>