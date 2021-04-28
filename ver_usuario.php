<?php



include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

$id_usuario = $_GET['id_usuario']; //tomamos la variable id_usuario

$query = "select * from usuario where id_usuario=".$id_usuario;


$resultado = mysqli_query($bd, $query);


echo ' <br><br> <table border = "1"> <tr> 

        <td> ID usuario </td>
        <td> Nombre </td>
        <td> Apellidos </td>
        <td> Nombre de usuario </td>

        <td> Correo electrónico </td>
        <td> Contraseña </td>
        <td> Fecha de Nacimiento </td>
        <td> Teléfono </td>
        <td> Dirección </td>
        <td> Ciudad </td>
        <td> Administrador </td>
        <td> Spam </td>
        
     </tr>';


     $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos
     
     echo '<tr> ';
     echo '<td>'.$row['id_usuario'].'</td>';
     echo '<td>'.$row['nombre'].'</td>';
     echo '<td>'.$row['apellidos'].'</td>';
     echo '<td>'.$row['usuario'].'</td>';

     echo '<td>'.$row['email'].'</td>';
     echo '<td>'.$row['clave'].'</td>';
     echo '<td>'.$row['fecha_nacimiento'].'</td>';
     echo '<td>'.$row['telefono'].'</td>';
     echo '<td>'.$row['direccion'].'</td>';
     echo '<td>'.$row['ciudad'].'</td>';
     echo '<td>'.$row['privilegio'].'</td>';
     echo '<td>'.$row['spam'].'</td>';
 
     echo '</tr> ';
     echo '</table>';
 


?>