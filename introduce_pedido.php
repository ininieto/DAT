<?php

include('header.php');
include('menu1.php');
include('conexion_bbdd.php');

//post los coge del formulario

@ $usuario = $_POST['usuario'];
@ $clave = $_POST['clave'];
@ $cantidad = $_POST['cantidad'];
@ $precio = $_POST['precio'];
@ $id_producto = $_POST['id_producto'];

//El arroba hace que no salgan problemas feos 
//es como el supress warnings

@ $query = "select * from usuario where usuario = '".$usuario."' &&  clave = '".$clave."' ";


@ $resultado = mysqli_query($bd, $query);
@ $num = mysqli_num_rows($resultado); //numero de resultados

if($num == 0){
    
    echo'<script type="text/javascript">
    alert("No se ha encontrado un usuario con esas credenciales");
    window.location.href="index.php";
    </script>';

}
else{
    

$usuario = trim($usuario);
$clave = trim($clave);
$cantidad= trim($cantidad);
$precio= trim($precio);
$id_producto= trim($id_producto);


 if(!$usuario || !$clave || !$cantidad || !$precio || !$id_producto){
   
    echo'<script type="text/javascript">
    alert("Falta introducir campos obligatorios");
    window.location.href="index.php";
    </script>';
    exit;
 }

$usuario = addslashes($usuario);
$clave = addslashes($clave);
$cantidad = addslashes($cantidad);
$precio = addslashes($precio);
$id_producto= addslashes($id_producto);

$row = mysqli_fetch_array($resultado); //toma una fila de la base de datos
$id_usuario = $row['id_usuario'];


$coste_total = intval($cantidad) * $precio;


$fecha_array = getdate();
$fecha_compra = $fecha_array['year']."-".$fecha_array['mon']."-".$fecha_array['mday'];


$query = "insert into pedido values (null, ".$id_usuario . ", ".$id_producto . ", ".$cantidad . ", ".$coste_total . ", '".$fecha_compra . "')";
$resultado = mysqli_query($bd, $query);

if($resultado){
    echo'<script type="text/javascript">
    alert("Pedido realizado con éxito!");
    window.location.href="index.php";
    </script>';
    exit;
}
else{
    echo'<script type="text/javascript">
    alert("Algo ha ido mal. Vuelva a intentarlo.");
    window.location.href="index.php";
    </script>';
    exit;
}
}
