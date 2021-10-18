<?php

//fichero para sacar nombres por pantalla
include('menuAdmin.php');
include('conexion_bbdd.php');

$query = "select * from usuario";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados


echo ' <br><br> <table border = "1"> <tr> 

        <td> Nombre </td>
        <td> Apellidos </td>
        <td> Correo electrónico </td>
        <td> Fecha de Nacimiento </td>
        <td> Teléfono </td>

        <td> Ver </td>
        <td> Editar </td>
        <td> Borrar </td>
        
        
     </tr>';

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

    //Ponemos en notación normal la fecha
    $fecha = $row['fecha_nacimiento'];
    $fecha_array = explode('-', $fecha);
    $fecha_array = array_reverse($fecha_array); 
    $fecha = implode('/', $fecha_array);


    echo '<tr> ';
    echo '<td>'.$row['nombre'].'</td>';
    echo '<td>'.$row['apellidos'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$fecha.'</td>';
    echo '<td>'.$row['telefono'].'</td>';

    echo'<td> <a href = "ver_usuario.php?id_usuario='.$row['id_usuario'].'"> Ver </a> </td>';
    echo'<td> <a href = "editar_usuario.php?id_usuario='.$row['id_usuario'].'"> Editar </a> </td>';
    echo'<td> <a href = "borrar_usuario.php?id_usuario='.$row['id_usuario'].'"> Borrar </a> </td>';

    echo '</tr> ';

}
echo '</table>';

?>