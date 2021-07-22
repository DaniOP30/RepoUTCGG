<?php
require 'conexion.php';

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$matricula=$_POST['matricula'];
$username=$_POST['username'];
$password=$_POST['password'];






$query = "INSERT INTO tb_docente (username,password,nombre,apellidos,matricula,tipo_user) 
VALUES ('$username','$password','$nombre','$apellidos','$matricula',2)";


mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
echo "se ha subido con éxito <br>";
header('Location: ../registrarDocente.php');
die();
 
?>