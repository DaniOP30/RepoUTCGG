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
$query = "SELECT id, nombre, descripcion, nombre_a FROM repositorios";
$result = mysqli_query($conexion, $query);


?>

<!DOCTYPE html>
<html lang="en">
<!--                                                    HEADER                                            -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Styles/styleFlowers.css">
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
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
include("header.php");
?>

<body>
    <div class="container-fluid" id="nav">
        <div class="container-fluid" id="primer">
            <div class="row">
                <div class="col-3">
                <div class="card" id="card_menuLateral">
                    <div class="card-body" id="lista-menuLateral">
                        <ul class="list-group-flush">
                            <li class="list-group-item"><i class="bi bi-file-earmark"></i> Repositorio</li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarAlumno.php" style="color: #8C6CEE"><i class="bi bi-person-plus"></i> Registrar Alumno</a> </li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarDocente.php" style="color: black"><i class="bi bi-briefcase"></i> Registrar Docente</a></li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarRepositorio.php" style="color: black"><i class="bi bi-file-earmark-plus"></i> Registrar Repositorio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                <!--                                                    CARD REPOSITORIOS                                            -->
                <div class="col-9">
                    <div class="card" id="contDer">
                        <h3>Todos los repositorios</h3>
                        <div class="row">
                            <?php
                                while ($registro = mysqli_fetch_array($result)){

                            ?>
                            <div class="col-md-4">
                                <!--                                                    CARD 1                                            -->
                                
                                <div class="card" id="cards">
                                    <img src="img/ejemplo.png" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $registro[1]; ?></h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card"><?php echo $registro[2]; ?>
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <?php
                                    $v= $registro[0];
                                    ?>
                                    <div class="card-body">
                                        <button class="btn btn-sm" value="<?php echo $v?>" onclick="obtenerId(v);" data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>

                                    </div>
                                </div>
                                
                            </div>
                            <?php
                                }
                                ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

</body>



</html>