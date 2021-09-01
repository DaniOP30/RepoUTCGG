<?php
$server = "localhost";
$user = "root";
$pass = "root";
$db = "sistema";

$conexion = mysqli_connect("$server","$user","$pass","$db");

if($conexion){
}else{
    echo "algo salio mal";
}



?>