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
                <div class="col-4">
                    <div class="card text-center" id="contIzq">
                        <!--                                                    DASHBOARD                                            -->
                        <div class="list-group">
                            <a href="#" class="list-group-flush"><i class="fas fa-file" style="color:green"></i> Repositorios</a>
                            <a href="#" class="list-group-flush"><i class="fas fa-user-plus" style="color:green"></i> Registrar Alumnos</a>
                            <a href="#" class="list-group-flush"><i class="fas fa-briefcase" style="color:green"></i> Registrar docente</a>
                            <a href="#" class="list-group-flush"><i class="fas fa-folder-plus" style="color:green"></i> Registrar repositorio</a>
                        </div>
                    </div>
                </div>
                <!--                                                    CARD REPOSITORIOS                                            -->
                <div class="col-8">
                    <div class="card" id="contDer">
                        <h3>Todos los repositorios</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <!--                                                    CARD 1                                            -->
                                <div class="card" id="cards">
                                    <img src="https://previews.123rf.com/images/mrcocoa/mrcocoa1605/mrcocoa160502010/58140598-proyecto-de-desarrollo-de-conceptos-ejemplo-icono-de-fondo-y-gr%C3%A1ficos-la-ilustraci%C3%B3n-es-colorido-vector-p.jpg" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Repositorio 1</h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card">Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <div class="card-body">
                                        <span>Carlos Daniel Olivo Perez</span>
                                        <button class="btn btn-sm " data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--                                                    CARD 2                                            -->
                                <div class="card" id="cards">
                                    <img src="https://image.apphit.com/image/filetype/jpg/jpg-logo.png" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Repositorio 1</h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card">Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <div class="card-body">
                                        <span aria-hidden="true">Daniel Flores</span>
                                        <button class="btn btn-sm " data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <!--                                                    CARD 3                                            -->
                                <div class="card" id="cards">
                                    <img src="https://images.wondershare.com/recoverit/article/2020/05/cant-open-png-file-0.jpg" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Repositorio 1</h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card">Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <div class="card-body">
                                        <span aria-hidden="true">Daniel Flores</span>
                                        <button class="btn btn-sm " data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">

                            <div class="card" id="cards">
                                    <img src="https://image.apphit.com/image/filetype/jpg/jpg-logo.png" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Repositorio 1</h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card">Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <div class="card-body">
                                        <span aria-hidden="true">Daniel Flores</span>
                                        <button class="btn btn-sm " data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">

                            <div class="card" id="cards">
                                    <img src="https://image.apphit.com/image/filetype/jpg/jpg-logo.png" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Repositorio 1</h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card">Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <div class="card-body">
                                        <span aria-hidden="true">Daniel Flores</span>
                                        <button class="btn btn-sm " data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">

                            <div class="card" id="cards">
                                    <img src="https://image.apphit.com/image/filetype/jpg/jpg-logo.png" class="img-responsive" id="cards-img">
                                    <div class="card-body">
                                        <h5 class="card-title">Repositorio 1</h5>
                                        <scroll-container id="scroll">
                                            <scroll-page id="text-card">Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                                Creacion de un sistema web para el monitoreo de una caseta de seguridad en un condominio privado
                                            </scroll-page>
                                        </scroll-container>
                                    </div>
                                    <div class="card-body">
                                        <span aria-hidden="true">Daniel Flores</span>
                                        <button class="btn btn-sm " data-toggle="modal" data-target="#ventanamodal">
                                            Ver contenido
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("footer.php");
        ?>
</body>

</html>