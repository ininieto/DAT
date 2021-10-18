<?php

//fichero para sacar nombres por pantalla

include('menuAdmin.php');
include('conexion_bbdd.php');

$query = "select * from pedido";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados



echo ' <br><br> <table border = "1"> <tr> 

        <td> ID Pedido </td>
        <td> ID Cliente </td>
        <td> ID Producto </td>
        <td> Cantidad </td>
        <td> Coste Total </td>
        <td> Fecha Compra</td>

        
     </tr>';

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

    //Ponemos en notación normal la fecha
    $fecha = $row['fecha_compra'];
    $fecha_array = explode('-', $fecha);
    $fecha = $fecha_array[2].'/'.$fecha_array[1].'/'.$fecha_array[0];


    echo '<tr> ';
    echo '<td>'.$row['id_pedido'].'</td>';
    echo '<td>'.$row['id_cliente'].'</td>';
    echo '<td>'.$row['id_producto'].'</td>';
    echo '<td>'.$row['cantidad'].'</td>';
    echo '<td>'.$row['coste_total'].' $'.'</td>';
    echo '<td>'.$fecha.'</td>';

    echo '</tr> ';

}
echo '</table>';
