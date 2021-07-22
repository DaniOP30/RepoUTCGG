<?php
session_start();
$nombre = $_SESSION['nombre'];

if(!isset($_SESSION['rol'])){
    header('location:login.php');
}else{
    if($_SESSION['rol']!=1){
        header('location:login.php');

    }
}
?>

<?php

require 'back/conexion.php';
$id=$_GET['valor'];
$query = "SELECT * FROM repositorios where id=$id";
$result = mysqli_query($conexion, $query);
$registro = mysqli_fetch_array($result);

$rutadescarga="back/" . $registro['ruta'] . "/" . $registro['nombre_fantasma'];
$nombreArchivo=$registro['nombre_fantasma'];

$query2 = "SELECT * FROM manual_usu where id='$id'";
$result2 = mysqli_query($conexion, $query2);
$registro2 = mysqli_fetch_array($result2);

$rutadescarga2="back/" . $registro2['ruta'] . "/" . $registro2['nombre_fantasma'];
$nombreArchivo2=$registro2['nombre_fantasma'];

$query3 = "SELECT * FROM manual_tec where id=$id";
$result3 = mysqli_query($conexion, $query3);
$registro3 = mysqli_fetch_array($result3);

$rutadescarga3="back/" . $registro3['ruta'] . "/" . $registro3['nombre_fantasma'];
$nombreArchivo3=$registro3['nombre_fantasma'];

?>
<!DOCTYPE html>
<html lang="en">
<!--                                                    HEADER                                            -->
<!--  FONTS IMPORT   -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Styles/styleFlowers.css">
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
    <link rel="stylesheet" href="css/bsadmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
  
    ?>
</head>
    <?php
        include("sidebar.php");
        ?>
    <div class="container" style="margin-top:30px">

<div class="jumbotron" style="background-color:white">
  <h1 class="display-4"><?php echo $registro['nombre']; ?></h1> <br>
  <a class="btn btn-outline-primary " href="#" role="button" ><?php echo $registro[5]; ?></a>
    <a class="btn btn-outline-success " href="#" role="button" ><?php echo $registro[6]; ?></a>
    <a class="btn btn-outline-info " href="#" role="button" ><?php echo $registro[7]; ?></a><br><br>
  <p class="lead"><img src="img/avatar.png" class="avatar" height="25" style="border-radius: 50%;"> <?php echo $registro['nombre_a']; ?></p>
   
  <hr class="my-4">
  <h4> Descripción del proyecto </h4> <br>
  <p><?php echo $registro['descripcion']; ?></p> <br>
  <h5 style="color:#8C6CEE"> descarga el proyecto </h5> <br>
  <p class="lead">
  <div class="container">
    <div class="card-deck">
        <div class="card mb-4">
            <img class="card-img-top img-fluid" src="images/PDF.svg" >
            <div class="card-body">
                <h4 class="card-title">Memoria de Estadia</h4>
                
                <p class="card-text"><small class="text-muted" style="font-size:16px"> <a href="<?php echo $rutadescarga?>" download="<?php $nombreArchivo?>">Descargar</small></p> </a>
            </div>
        </div>
        <div class="card mb-4">
            <img class="card-img-top img-fluid" src="images/word.svg"  alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Manual de usuario</h4>
                
                <p class="card-text"><small class="text-muted" style="font-size:16px"> <a href="<?php echo $rutadescarga3?>" download="<?php $nombreArchivo3?>">Descargar</small></p> </a>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <div class="card mb-4">
            <img class="card-img-top img-fluid" src="images/word.svg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Manual técnico</h4>
            
                <p class="card-text"><small class="text-muted" style="font-size:16px"> <a href="<?php echo $rutadescarga2?>" download="<?php $nombreArchivo2?>">Descargar</small></p> </a>
            </div>
        </div>
        
        </div>
 
                                        </div>
                                    </div>

                                </div>
    
  </p>
</div>

</div>