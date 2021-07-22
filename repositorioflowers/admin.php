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
    <?php
    include("modal.php");
    ?>
</head>
    <?php
        include("sidebar.php");
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
                <form method="POST">
            <table class="table">
                <thead>
                    <tr class="filtro">
                        <th>
                            Carrera
                            <select class="form-select" aria-label="Default select example" name="carrera">
                                <option selected value="">Todos</option>
                                <option value="Ing. en Procesos Alimentarios">Ing. en Procesos Alimentarios</option>
                                <option value="Ing. en Mantenimiento Industrial">Ing. en Mantenimiento Industrial</option>
                                <option value="TI">TI</option>
                                <option value="Ing. en Energías Renovables">Ing. en Energías Renovables</option>
                                <option value="Lic. en Gestión del Capital Humano">Lic. en Gestión del Capital Humano</option>
                                <option value="Ing. en Metal Mecánica">Ing. en Metal Mecánica</option>
                                <option value="Ing. en Logística Internacional">Ing. en Logística Internacional</option>
                                <option value="Lic. en Gestión y Desarrollo Turístico">Lic. en Gestión y Desarrollo Turístico</option>
                                <option value="Lic. en Gastronomía">Lic. en Gastronomía</option>
                            </select>
                        </th>
                        <th>
                            Tipo de proyecto
                            <select class="form-select" aria-label="Default select example" name="tipo">
                                <option selected value="">Todos</option>
                                <option value="Integradora">Integradora</option>
                                <option value="Estadia">Estadia</option>
                                <option value="Especial">Especial</option>
                            </select>
                        </th>
                        <th>
                            Nivel de proyecto
                            <select class="form-select" aria-label="Default select example" name="nivel">
                                <option selected value="">Todos</option>
                                <option value="TSU">TSU</option>
                                <option value="Ingenieria">Ingenieria</option>
                            </select>
                        </th>
                        <th>
                            <input type="submit" name="buscar" class="btn btn-success" value="Ver">
                        </th>
                    </tr>
                </thead>
            </table>
        </form>
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
    
    <p class="card-text" style="margin-top:30px; color:#7C8BA8  "><?php echo $registro[4]; ?></p>
    <span class="badge badge-pill badge-info" style="font-size:13px;font-weight:300;"><?php echo $registro[6]; ?></span>
    <span class="badge badge-pill badge-success" style="font-size:13px;font-weight:300;"><?php echo $registro[7]; ?></span> 
    <span class="badge badge-pill badge-primary" style="font-size:13px;font-weight:300;padding-left:8px"><?php echo $registro[5]; ?></span> <br><br>
    <a href="#" class="card-link" style="color:#42C392; margin-top:20px" value="<?php echo $v?>" onclick="obtenerId(v);" data-toggle="modal" data-target="#ventanamodal">Ver repositorio <i class="fa fa-fw fa-chevron-right" style="color:#42C392" ></i></a> 
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

<script>
function obtenerId($hola) {
    print($hola);
    $id=$hola;


}

</script>


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