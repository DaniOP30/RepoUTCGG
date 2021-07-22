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
    
</head>
    <?php
        include("sidebar.php");
        include 'modalRepositorio.php';
        ?>
    <div class="container">
    <?php

        if (isset($_POST['buscar'])) {
            $where = '';
            $carrera = $_POST["carrera"];
            $tipo = $_POST["tipo"];
            $nivel = $_POST["nivel"];
            if (empty($_POST['carrera']) && empty($_POST['tipo'])) {
                $where = "where nivel_proyecto like '" . $nivel . "%'";
            } else if (empty($_POST['carrera']) && empty($_POST['nivel'])) {
                $where = "where tipo_proyecto like '" . $tipo . "%'";
            } else if (empty($_POST['tipo']) && empty($_POST['nivel'])) {
                $where = "where carrera like '" . $carrera . "%'";
            } else if (isset($_POST['tipo']) && isset($_POST['nivel']) && (empty($_POST['carrera']))) {
                $where = "where tipo_proyecto like '" . $tipo . "%' && nivel_proyecto= '" . $nivel . "'";
            } else if (isset($_POST['carrera']) && isset($_POST['nivel']) && (empty($_POST['tipo']))) {
                $where = "where carrera like '" . $carrera . "%' && nivel_proyecto= '" . $nivel . "'";
            } else if (isset($_POST['carrera']) && isset($_POST['tipo']) && (empty($_POST['nivel']))) {
                $where = "where carrera like '" . $carrera . "%' && tipo_proyecto= '" . $tipo . "'";
            } else {
                $where = "where carrera like '" . $carrera . "%' && tipo_proyecto= '" . $tipo . "' && nivel_proyecto= '" . $nivel . "'";
            }



            $query = "SELECT * FROM repositorios $where";
        } else {
            $query = "SELECT * FROM repositorios";
        }

        $result = mysqli_query($conexion, $query);


        ?>
             
    <div class="content p-4">
    <h1 class="display-5 mb-4">Registrar repositorios</h1>
    <button type="button" class="btn btn-primary" style="background-color:#42C392; color:white; margin-bottom:30px; margin-top:20px; padding:10px" data-bs-toggle="modal" id="boton-agregarAlumno" data-bs-target="#miModal">
      <i class="fa fa-plus" style="color:white"></i> Agregar Nuevo</button>
    <div class="col-12">
        <div class="row">

        <?php
        while ($registro = mysqli_fetch_array($result)){
            ?>

        <div class="col-md-6 col-lg-4">
        <div class="card" height="20" style="margin-top:30px;">
  <div class="card-body">
    <h5 class="card-title" style="margin-top:10px; "><?php echo $registro[1]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted" style="font: weight 100px; color: #9271F6 !important; font-weight:300 !important">
    <img src="img/avatar.png" class="avatar" height="15" style="border-radius: 50%;"> <?php echo $registro[3]; ?></h6>
    <style>
    p {
 overflow: hidden;
 width: 250px;
 white-space: nowrap;
 display:inline-block;
 text-overflow: ellipsis;
 
 }
    </style>
    <p class="card-text" style="margin-top:30px; color:#7C8BA8  "><?php echo $registro[4]; ?></p>
    <span class="badge badge-pill badge-info" style="font-size:13px;font-weight:300;"><?php echo $registro[6]; ?></span>
    <span class="badge badge-pill badge-success" style="font-size:13px;font-weight:300;"><?php echo $registro[7]; ?></span> 
    <span class="badge badge-pill badge-primary" style="font-size:13px;font-weight:300;padding-left:8px"><?php echo $registro[5]; ?></span> <br><br>
    <a href="modal.php?valor=<?php echo $registro[0]; ?>" class="card-link" style="color:#42C392; margin-top:20px" >Ver repositorio <i class="fa fa-fw fa-chevron-right" style="color:#42C392" ></i></a> 
    <a href="#" class="card-link"></a>
  </div>

</div>
</div>
<?php }?>
</div>
</div>

<body>

       
        <?php
        include("footer.php");
        ?>


    
                <!--                                                    CARD REPOSITORIOS                                            -->
               



<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/anima.js"></script>
    <script src="js/bsadmin.js"></script>
</body>

</html>