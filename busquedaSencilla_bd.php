<?php

include ('header.php');
include('menu1.php'); 
include('conexion_bbdd.php'); //Para poder modificar la base de datos

//post los coge del formulario

$busqueda = $_POST['busqueda'];

//Trim los mete en la base de datos

$busqueda = trim($busqueda);

$query= "select * from producto where titulo = '".$busqueda."' || autor = '".$busqueda."' || categoria = '".$busqueda."' || descripcion = '".$busqueda."' || precio = '".$busqueda."'";

$resultado = mysqli_query($bd,$query);

$num= mysqli_num_rows($resultado);

if($num == 0){
    echo'<script type="text/javascript">
    alert("No se han encontrado resultados que coincidan con la búsqueda");
    window.location.href="buscador.php";
    </script>';
}
else{
		echo ' <table border = "1"> <tr> 

        <td> Título </td>
        <td> Categoría </td>
        <td> Descripción </td>
        <td> Autor </td>
        <td> Precio </td>
		
		<td> Comprar </td>
        
        
     </tr>';

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos
    echo '<tr> ';
    echo '<td>'.$row['titulo'].'</td>';
    echo '<td>'.$row['categoria'].'</td>';
    echo '<td>'.$row['descripcion'].'</td>';
    echo '<td>'.$row['autor'].'</td>';
    echo '<td>'.$row['precio'].' $'.'</td>';
	
	echo'<td> <a href = "compraBusqueda.php?id_producto='.$row['id_producto'].'"> Comprar </a> </td>';
   
    echo '</tr> ';

}
echo '</table>';
    }

?>
