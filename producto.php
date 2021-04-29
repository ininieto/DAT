<?php

//fichero para sacar nombres por pantalla

include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

$query = "select * from producto";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados

echo ' <br><br> <table border = "1"> <tr> 

        <td> Título </td>
        <td> Categoría </td>
        <td> Descripción </td>
        <td> Autor </td>
        <td> Precio </td>
        
        <td> Ver </td>
        <td> Editar </td>
        <td> Borrar </td>
        
     </tr>';

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos
    echo '<tr> ';
    echo '<td>'.$row['titulo'].'</td>';
    echo '<td>'.$row['categoria'].'</td>';
    echo '<td>'.$row['descripcion'].'</td>';
    echo '<td>'.$row['autor'].'</td>';
    echo '<td>'.$row['precio'].' $'.'</td>';

    echo'<td> <a href = "ver_producto.php?id_producto='.$row['id_producto'].'"> Ver </a> </td>';
    echo'<td> <a href = "editar_producto.php?id_producto='.$row['id_producto'].'"> Editar </a> </td>';
    echo'<td> <a href = "borrar_producto.php?id_producto='.$row['id_producto'].'"> Borrar </a> </td>';

    echo '</tr> ';

}
echo '</table>';

?>