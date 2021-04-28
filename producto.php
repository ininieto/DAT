<?php

//fichero para sacar nombres por pantalla

include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

$query = "select * from producto";

echo "<br>" . $query . "<br>";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados

echo 'el numero de resultados es '.$num.'<br>';

echo ' <table border = "1"> <tr> 

        <td> Título </td>
        <td> Categoría </td>
        <td> Descripción </td>
        <td> Autor </td>
        <td> Precio </td>
        
     </tr>';

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos
    echo '<tr> ';
    echo '<td>'.$row['titulo'].'</td>';
    echo '<td>'.$row['categoria'].'</td>';
    echo '<td>'.$row['descripcion'].'</td>';
    echo '<td>'.$row['autor'].'</td>';
    echo '<td>'.$row['precio'].' $'.'</td>';
    echo '</tr> ';

}
echo '</table>';

?>