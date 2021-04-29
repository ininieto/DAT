<?php

include('header.php');
include('menu1.php');


@ $nombre = $_POST['nombre'];
@ $apellidos = $_POST['apellidos'];
@ $fecha_nacimiento = $_POST['fecha_nacimiento'];
@ $telefono = $_POST['telefono'];
@ $ciudad = $_POST['ciudad'];
@ $direccion = $_POST['direccion'];
@ $usuario = $_POST['usuario'];
@ $email = $_POST['email'];
@ $clave = $_POST['clave'];
@ $clave2 = $_POST['clave2'];
@ $spam = $_POST['spam'];


$nombre = trim($nombre);
$apellidos = trim($apellidos);
$fecha_nacimiento = trim($fecha_nacimiento);
$telefono = trim($telefono);
$ciudad = trim($ciudad);
$direccion = trim($direccion);
$usuario = trim($usuario);
$email = trim($email);
$clave = trim($clave);
$clave2 = trim($clave2);
$spam = trim($spam);

//Comprobamos que los datos introducidos son correctos
if(!$nombre || !$apellidos ||!$usuario ||!$email ||
   !$clave ||!$fecha_nacimiento ||!$direccion ||!$ciudad){     
    echo 'faltan los obligatorios';
    exit;
}

if(strcmp($clave, $clave2) != 0){
    echo 'las claves deben coincidir';
    exit;
}

if(strcmp($spam, "si") == 0){
    $spam = 1;
}
else if(strcmp($spam, "no") == 0){
    $spam = 2;
}

if(strlen($telefono) != 9){
    echo 'el teléfono introducido debe tener 9 dígitos';
    exit;
}



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


include('conexion_bbdd.php');

$query = "insert into usuario values (null, '".$nombre . "', '".$apellidos . "', '".$usuario . "', '".$email . "', '".$clave . "', '".$fecha_nacimiento . "', '".$telefono . "', '".$direccion . "', '".$ciudad . "', 2,  '".$spam ."')";

$resultado = mysqli_query($bd, $query);

if($resultado){

    echo'<script type="text/javascript">
    alert("¡Usuario registrado con éxito!");
    window.location.href="index.php";
    </script>';

}
else{
    echo "ko";
}
?>