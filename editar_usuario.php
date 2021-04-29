<?php

include('header.php');
include('menu1.php');

include('conexion_bbdd.php');


$id_usuario = $_GET['id_usuario']; //tomamos la variable id_usuario

$query = "select * from usuario where id_usuario=" . $id_usuario;

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


$id_usuario = $row['id_usuario'];
$nombre = $row['nombre'];
$apellidos = $row['apellidos'];
$usuario = $row['usuario'];
$email = $row['email'];
$clave = $row['clave'];
$fecha = $row['fecha_nacimiento'];
$telefono = $row['telefono'];
$direccion = $row['direccion'];
$ciudad = $row['ciudad'];
$privilegio = $row['privilegio'];
$spam = $row['spam'];

//Ponemos en notación normal la fecha

$fecha_array = explode('-', $fecha);
$fecha = $fecha_array[2] . '/' . $fecha_array[1] . '/' . $fecha_array[0];



echo "<tr id = 'resultados'> ";
echo "<td id = 'button0' title = '$id_usuario' >" .$id_usuario . "</td>";
echo "<td id = 'button1' title = '$nombre' >" . $nombre . "</td>";
echo "<td id = 'button2' title = '$apellidos'>" . $apellidos . "</td>";
echo "<td id = 'button3' title = '$usuario'>" . $usuario . "</td>";

echo "<td id = 'button4' title = '$email'>" . $email . "</td>";
echo "<td id = 'button5' title = '$clave'>" . $clave . "</td>";
echo "<td id = 'button6' title = '$fecha'>" . $fecha . "</td>";
echo "<td id = 'button7' title = '$telefono'>" . $telefono . "</td>";
echo "<td id = 'button8' title = '$direccion'>" . $direccion . "</td>";
echo "<td id = 'button9' title = '$ciudad'>" . $ciudad . "</td>";
echo "<td id = 'button10' title = '$privilegio'>" . $privilegio . "</td>";
echo "<td id = 'button11' title = '$spam'>" . $spam . "</td>";

echo '</tr> ';
echo '</table>';

?>

<html>
    <p id = "hueco"> </p> <!-- Huequín para escribir el valor de cada casilla durante el desarrollo -->
</html>

<script>
    let id = [];
    let button = [];

    /* Pongo los event listeners a las casillas de la tabla */

    for (let i = 0; i < 12; i++) {
        let str1 = "button";

        id[i] = str1 + i.toString(); // Concateno "button" y cada numero

        button[i] = document.getElementById(id[i]);

        button[i].addEventListener("click", () => {
            // probando las arrow functions :)

            document.getElementById("hueco").innerHTML = button[i].title;
        });

        button[i].addEventListener("mouseover", () => {
            // función que resalta el fondo de la casilla sobre la que está el ratón

            button[i].style.background = "rgb(255, 255, 255)";
            button[i].style.color = "rgb(0, 0, 0 )";
        });

        button[i].addEventListener("mouseleave", () => {
            // función que restaura el color de fondo cuando quitas el ratón

            button[i].style.background = "rgb(0, 0, 0 )";
            button[i].style.color = "rgb(255, 255, 255)";
        });
    }
</script>