<?php 


include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

//tomamos lo que ha introducido el usuario
@ $usuario = $_POST['usuario'];
@ $clave = $_POST['clave'];

$usuario = trim($usuario);
$clave = trim($clave);

$usuario = addslashes($usuario);
$clave = addslashes($clave);

if(!$usuario || !$clave){
    echo "falta introducir campos obligatorios";
    exit;
}

@ $query = "select * from usuario where usuario = '".$usuario."' &&  clave = '".$clave."'";

@ $resultado = mysqli_query($bd, $query);

@ $num = mysqli_num_rows($resultado); //numero de resultados

if($num == 0){
    echo'<script type="text/javascript">
    alert("El usuario o la contraseña son incorrectos");
    window.location.href="formulariologin.php";
    </script>';
}
else{
    echo'<script type="text/javascript">
    alert("Bienvenido/a, '.$usuario.'");
    window.location.href="formulariologin.php";
    </script>';
}





?>