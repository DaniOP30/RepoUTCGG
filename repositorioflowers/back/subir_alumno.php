<?php
    require 'conexion.php';

    $username=$_POST['username'];
    $password=$_POST['password'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $matricula=$_POST['matricula'];
    $carrera=$_POST['carrera'];
    $cuatri=$_POST['cuatri'];
    $query = "INSERT INTO tb_alumnos (username,password,nombre,apellidos,tipo_user,carrera,cuatri,matricula) 
    VALUES ('$username','$password','$nombre','$apellidos',3,'$carrera','$cuatri','$matricula')";
    mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
    echo "se ha subido con éxito <br>";

    header('Location: ../registrarAlumno.php');
    die();
?>