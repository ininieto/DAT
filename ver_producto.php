<?php

//Fichero para ver tan sólo el producto elegido

include('menuAdmin.php'); //Aquí habrá que poner menuAdmin
include('conexion_bbdd.php');

$id_producto = $_GET['id_producto']; //tomamos la variable id_producto

$query = "select * from producto where id_producto=".$id_producto;


$resultado = mysqli_query($bd, $query);


echo ' <br><br> <table border = "1"> <tr> 

        <td> ID producto </td>
        <td> Título </td>
        <td> Categoría </td>
        <td> Descripción </td>
        <td> Precio </td>
        <td> Autor </td>
        <td> Ruta de la imagen </td>
        
     </tr>';


     $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos
     
     echo '<tr> ';
     echo '<td>'.$row['id_producto'].'</td>';
     echo '<td>'.$row['titulo'].'</td>';
     echo '<td>'.$row['categoria'].'</td>';
     echo '<td>'.$row['descripcion'].'</td>';
     echo '<td>'.$row['precio'].'$'.'</td>';
     echo '<td>'.$row['autor'].'</td>';
     echo '<td>'.'...DAT/'.$row['imagen'].'</td>';

 
     echo '</tr> ';
     echo '</table>';
 


?>