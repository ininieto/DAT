
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

$categoria = $_GET['categoria']; //tomamos la variable categoria

$query = "select * from producto";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $autor = $row['autor'];
    $imagen = $row['imagen'];

    if($categoria == $row['categoria']){
     
      echo "<figure class = 'producto' >";

      echo "<img  width = '200' class = 'foto' src = 'imagenes/$imagen'>";


      echo " <br> 10,99 $ <br/>";
      echo " COMPRAR </figcaption> ";

      echo " </figure>";
   
    }

}

?>
    <script src = "tienda.js"> </script>
	
  </body>
	
	
</html>