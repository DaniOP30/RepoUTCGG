<?php
require 'conexion.php';

$username=$_POST['username'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$matricula=$_POST['matricula'];




$query = "INSERT INTO tb_docente (username,password,nombre,apellidos,tipo_user,matricula) 
VALUES ('$username','$password','$nombre','$apellidos',2,'$matricula')";


mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
echo "se ha subido con éxito <br>";
 
?>