<?php
    require 'conexion.php';
    
    

    $id_D=$_GET['valor'];




    $query = "DELETE FROM tb_alumnos WHERE id=$id_D";


    mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));

        
    header('Location: ../registrarAlumno.php');
    die();

?>