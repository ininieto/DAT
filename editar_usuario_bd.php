<?php

include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

//post los coge del formulario
@ $id_usuario = $_POST['id_usuario'];
@ $nombre = $_POST['nombre'];
@ $apellidos = $_POST['apellidos'];
@ $fecha_nacimiento = $_POST['fecha_nacimiento'];
@ $telefono = $_POST['telefono'];
@ $ciudad = $_POST['ciudad'];
@ $direccion = $_POST['direccion'];
@ $usuario = $_POST['usuario'];
@ $email = $_POST['email'];
@ $clave = $_POST['clave'];
@ $spam = $_POST['spam'];
@ $privilegio = $_POST['privilegio'];


$id_usuario = trim($id_usuario);
$nombre = trim($nombre);
$apellidos = trim($apellidos);
$fecha_nacimiento = trim($fecha_nacimiento);
$telefono = trim($telefono);
$ciudad = trim($ciudad);
$direccion = trim($direccion);
$usuario = trim($usuario);
$email = trim($email);
$clave = trim($clave);
$spam = trim($spam);
$privilegio = trim($privilegio);

//El arroba hace que no salgan problemas feos 
//es como el supress warnings

//Comprobamos que los datos introducidos son correctos
if(!$id_usuario || !$nombre || !$apellidos ||!$usuario ||!$email ||
   !$clave ||!$fecha_nacimiento ||!$direccion ||!$ciudad){     
    echo 'faltan los obligatorios';
    exit;
}


if(strcmp($spam, "si") == 0){
    $spam = 1;
}
else if(strcmp($spam, "no") == 0){
    $spam = 2;
}

if(strcmp($privilegio, "si") == 0){
    $privilegio = 1;
}
else if(strcmp($privilegio, "no") == 0){
    $privilegio = 2;
}




else{
    echo'<script type="text/javascript">
    alert("El campo de SPAM deberá ser 1 para recibir notificaciones y 2 para no");
    window.location.href="index.php";
    </script>';
}

if(strlen($telefono) != 9){
    echo 'el teléfono introducido debe tener 9 dígitos';
    exit;
}


$id_usuario = addslashes($id_usuario);
$nombre = addslashes($nombre);
$apellidos = addslashes($apellidos);
$fecha_nacimiento = addslashes($fecha_nacimiento);
$telefono = addslashes($telefono);
$ciudad = addslashes($ciudad);
$direccion = addslashes($direccion);
$usuario = addslashes($usuario);
$email = addslashes($email);
$clave = addslashes($clave);
$spam = addslashes($spam);
$privilegio = addslashes($privilegio);



include('conexion_bbdd.php');

$query = "UPDATE usuario  SET id_usuario = '".$id_usuario."', nombre = '".$nombre."', 
          apellidos = '".$apellidos."', fecha_nacimiento = '".$fecha_nacimiento."',
          telefono = '".$telefono."', ciudad = '".$ciudad."', direccion = '".$direccion."',
          usuario = '".$usuario."', email = '".$email."', clave = '".$clave."', spam = '".$spam."', privilegio = '".$privilegio."' 
          WHERE id_usuario =" .$id_usuario ; 


$resultado = mysqli_query($bd, $query);

if($resultado){

    echo'<script type="text/javascript">
    alert("¡Usuario editado con éxito!");
    window.location.href="usuario.php";
    </script>';

}
else{
    echo'<script type="text/javascript">
    alert("Algo no ha ido bien. Por favor, vuelva a intentarlo");
    window.location.href="usuario.php";
    </script>';
}
?>