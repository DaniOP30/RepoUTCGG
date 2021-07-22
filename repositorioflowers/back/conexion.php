<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "sistema";

$conexion = mysqli_connect("$server","$user","$pass","$db");

if($conexion){
}else{
    echo "algo salio mal";
}



?>