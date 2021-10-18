<?php




include('menuAdmin.php');
include('conexion_bbdd.php');

$id_usuario = $_GET['id_usuario']; //tomamos la variable id_usuario

$query = "select * from usuario where id_usuario=".$id_usuario;

$resultado = mysqli_query($bd, $query);

$row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

//Ponemos en notación normal la fecha
$fecha = $row['fecha_nacimiento'];
$fecha_array = explode('-', $fecha);
$fecha = $fecha_array[2].'/'.$fecha_array[1].'/'.$fecha_array[0];


?>

<br><form class = "formulario" action = "editar_usuario_bd.php" method = "POST" > 

<fieldset class = "registro">

    <input type = "hidden" name = "id_usuario"  value = "<?php echo $row['id_usuario']; ?>"/> 

    <legend> Datos Personales </legend>

    <label>Nombre: </label> <input type = "text" name = "nombre" placeholder = "Escriba su Nombre" value = "<?php echo $row['nombre']; ?>"/> <br/>
    <label>Apellidos:</label> <input type = "text" name = "apellidos" placeholder = "Escriba sus Apellidos" value = "<?php echo $row['apellidos']; ?>"/> <br/> <br>
    
    <label> Fecha de Nacimiento:</label> <input type = "text" name = "fecha_nacimiento" placeholder="Año-Mes-Día" value = "<?php echo $row['fecha_nacimiento']; ?>"/> <br> <br>

    <label>Teléfono: </label> <input type = "number" name = "telefono" placeholder = "Escriba su Teléfono"  maxlength = "9" max = "999999999" value = "<?php echo $row['telefono']; ?>"/> <br/>
    <label>Ciudad:</label> <input type = "text" name = "ciudad" placeholder = "Escriba su Ciudad" value = "<?php echo $row['ciudad']; ?>"/> <br/>
    <label>Dirección:</label> <input type = "text" name = "direccion" placeholder = "Escriba su Dirección" value = "<?php echo $row['direccion']; ?>"/> <br/>
    

</fieldset> <br/>

<fieldset class = "registro">

    <legend> Registro </legend>


    <label>Nombre de usuario: </label> <input type = "text" name = "usuario" value = "<?php echo $row['usuario']; ?>" /> <br/>
    <label>Correo electrónico: </label> <input type = "text" name = "email" placeholder = "ejemplo@dominio.com" value = "<?php echo $row['email']; ?>" /> <br/>
    <label>Contraseña: </label> <input type = "text" name = "clave" placeholder = "*******" value = "<?php echo $row['clave']; ?>"/> <br/>

</fieldset> <br/>

<?php

$spam = $row['spam'];
$id_usuario = $row['id_usuario'];
$privilegio = $row['privilegio'];

if($spam == 1){

    echo '<p id = "texto">¿Quiere recibir notificaciones?: <br>
    <input type="radio" name = "spam" value = "si" checked> Sí <br>
    <input type="radio" name = "spam" value = "no"> No <br> </p>';


} else{

    echo '<p id = "texto">¿Quiere recibir notificaciones?: <br>
    <input type="radio" name = "spam" value = "si" > Sí <br>
    <input type="radio" name = "spam" value = "no" checked> No <br> </p>';

}

if($privilegio == 1){

    echo '<p id = "texto"> Administrador: <br>
    <input type="radio" name = "privilegio" value = "si" checked> Sí <br>
    <input type="radio" name = "privilegio" value = "no"> No <br> </p>';

} else{

    echo '<p id = "texto">Administrador: <br>
    <input type="radio" name = "privilegio" value = "si" > Sí <br>
    <input type="radio" name = "privilegio" value = "no" checked> No <br> </p>';

}

?>




<input type = "submit" value = "Editar Mis Datos"/> 

</form>