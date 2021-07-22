<?php
    require 'conexion.php';

    $id_D=$_GET['valor'];




    $query = "DELETE FROM tb_docente WHERE id=$id_D";


    mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
   
            
    header('Location: ../registrarDocente.php');
    die();

?>