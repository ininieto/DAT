<?php 


include('header.php');
include('menu1.php');

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


include('conexion_bbdd.php');

$query = "select * from usuario";

$resultado = mysqli_query($bd, $query);

$num = mysqli_num_rows($resultado); //numero de resultados

for($i = 0; $i < $num; $i++){

    $row = mysqli_fetch_array($resultado); //toma una fila de la base de datos

   if($usuario === $row['usuario'] && $clave === $row['clave']){ // el triple = comprueba que el tipo de dato también coincida
       echo '<br>Bienvenido/a, '.$usuario;
       exit;
   }
}

echo'<script type="text/javascript">
    alert("El usuario o la contraseña son incorrectos");
    window.location.href="formulariologin.php";
    </script>';


?>