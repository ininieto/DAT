<?php

@ $bd= mysqli_connect('localhost', 'root', '', 'dat003'); //realiza la conexion a la base de datos

if(!$bd){ //si no se ha podido conectar

    echo "mal el servidor";
    exit;
}

?>