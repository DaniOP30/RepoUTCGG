<?php
session_start();

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
$query = "SELECT id, nombre, descripcion, nombre_a, carrera, tipo_proyecto, nivel_proyecto FROM repositorios";
$result = mysqli_query($conexion, $query);


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
    include("modal.php");
    ?>
</head>
    <?php
        include("sidebar.php");
        ?>
    <div class="container">
    <div class="content p-4">
    <h1 class="display-5 mb-4">Todos los repositorios</h1>
    <div class="col-12">
        <div class="row">

<<<<<<< HEAD
        <?php
        while ($registro = mysqli_fetch_array($result)){
            ?>

        <div class="col-md-6 col-lg-4">
        <div class="card" height="20" style="margin-top:30px;">
  <div class="card-body">
    <h5 class="card-title" style="margin-top:10px; "><?php echo $registro[1]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted" style="font: weight 100px; color: #9271F6 !important; font-weight:300 !important">
    <img src="img/avatar.png" class="avatar" height="15" style="border-radius: 50%;"> <?php echo $registro[3]; ?></h6>
    
    <p class="card-text" style="margin-top:30px; color:#7C8BA8  "><?php echo $registro[2]; ?></p>
    <a class="btn btn-outline-primary btn-sm" href="#" role="button" ><?php echo $registro[4]; ?></a>
    <a class="btn btn-outline-success btn-sm" href="#" role="button" ><?php echo $registro[5]; ?></a>
    <a class="btn btn-outline-info btn-sm" href="#" role="button" ><?php echo $registro[6]; ?></a><br><br>

    <a href="#" class="card-link" style="color:#42C392; margin-top:20px" value="<?php echo $v?>" onclick="obtenerId(v);" data-toggle="modal" data-target="#ventanamodal">Ver repositorio <i class="fa fa-fw fa-chevron-right" style="color:#42C392" ></i></a> 
    <a href="#" class="card-link"></a>
  </div>

</div>
</div>
<?php }?>
</div>
</div>

<body>

=======
<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="sidebar-toggle text-light mr-3" ><i class="fa fa-bars" style="color:#122245;"></i></a>

    <a class="navbar-brand" href="#"  style="color:#122245; font: weight 600;"><i class="fa fa-code-branch" style="color:#42C392"></i>UTCGG</a>

    <div class="navbar-collapse collapse" >
        <ul class="navbar-nav ml-auto" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" style="color:#0B1427">
                    <i class="fa fa-user" style="color:#42C392"></i> Username 
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Información</a>
                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<div class="d-flex">
    <nav class="sidebar bg-light" >
        <ul class="list-unstyled">
            <li ><a href="#"><i class="fa fa-fw fa-file-search" style="color:#9271F6" ></i> Repositorios</a></li>
            <li><a href="#"><i class="fa fa-fw fa-user-plus" style="color:#42C392"></i> Registrar alumno</a></li>
            <li><a href="#"><i class="fa fa-fw fa-chalkboard-teacher" style="color:#42C392"></i> Registrar Docente</a></li>
            <li><a href="#"><i class="fa fa-fw fa-file-plus" style="color:#42C392"></i>Agregar repositorio</a></li>
           
    </nav>
    <div class="container">
    <div class="content p-4">
    <h1 class="display-5 mb-4">Todos los repositorios</h1>
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
    
    <p class="card-text" style="margin-top:30px; color:#7C8BA8  "><?php echo $registro[2]; ?></p>
    <a class="btn btn-outline-primary btn-sm" href="#" role="button" ><?php echo $registro[4]; ?></a>
    <a class="btn btn-outline-success btn-sm" href="#" role="button" ><?php echo $registro[5]; ?></a>
    <a class="btn btn-outline-info btn-sm" href="#" role="button" ><?php echo $registro[6]; ?></a><br><br>

    <a href="#" class="card-link" style="color:#42C392; margin-top:20px" value="<?php echo $v?>" onclick="obtenerId(v);" data-toggle="modal" data-target="#ventanamodal">Ver repositorio <i class="fa fa-fw fa-chevron-right" style="color:#42C392" ></i></a> 
    <a href="#" class="card-link"></a>
  </div>

</div>
</div>
<?php }?>
</div>
</div>

<body>

>>>>>>> 772ed48a1eaad8678d56c3d66eb7d95d78f4cce3
       
        <?php
        include("footer.php");
        ?>

<script>
function obtenerId($hola) {
    print($hola);
    $id=$hola;


}

</script>

<?php
$q = "SELECT nombre, descripcion, nombre_a FROM repositorios WHERE id = '$id'";
$r = mysqli_query($conexion, $q);
$reg = mysqli_fetch_assoc($r);
?>
<div class="modal fade" id="ventanamodal" tabindex="-1" role="dialog" aria-labelledby="tituloventana" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal">
            <div class="modal-header" id="headersito">
                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hiden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <h5 class="text-center"><?php echo $reg['nombre']; ?></h5>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12" id="principal">
                            <!-- Level 1: .col-sm-9 -->
                            <div class="row">
                                <div class="col-4 col-sm-4" id="modalIzq" >
                                    <picture>
                                        <img src="https://lastfm.freetls.fastly.net/i/u/770x0/34819209333548f09304bed428227fa4.jpg" class="img-fluid img-thumbnail" alt="...">
                                    </picture>
                                </div>
                                <div class="col-8 col-sm-8" id="modalDer">
                                <p><?php echo $reg['nombre_a']; ?></p>


                                <p style="font-size:14px"><?php echo $reg['descripcion']; ?></p>

                                <br>
                                    </div>
                                <div class="container-fluid" id="segundo">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="#">
                                                    <picture>
                                                        <img src="https://smartandroid.net/wp-content/uploads/2019/01/lirelespdf4.png" class="img-fluid img-thumbnail" alt="...">
                                                    </picture>Memoria de Estadia
                                                </a>


                                            </div>
                                            <div class="col-4">

                                                <a href="#">
                                                    <picture>
                                                        <img src="https://www.alegsa.com.ar/Imagen/icono-docx.png" class="img-fluid img-thumbnail" alt="...">
                                                    </picture>Manual de Usuario
                                                </a>


                                            </div>
                                            <div class="col-4">

                                                <a href="#">
                                                    <picture>
                                                        <img src="https://www.alegsa.com.ar/Imagen/icono-docx.png" class="img-fluid img-thumbnail" alt="...">
                                                    </picture>Manual Técnico
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

    
                <!--                                                    CARD REPOSITORIOS                                            -->
               



<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/anima.js"></script>
    <script src="js/bsadmin.js"></script>
</body>

</html>