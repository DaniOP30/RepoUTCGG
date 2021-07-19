<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body id="bdd">
    <?php
        include 'modalRepositorio.php';
    ?>
    
    <div class="container-fluid">
        <div class="row" id="rowCard" >
            <div class="col-2">
                <div class="card" id="card_menuLateral"  >
                    <div class="card-body" id="lista-menuLateral">
                        <ul class="list-group-flush" >
                            <li class="list-group-item"><i class="bi bi-file-earmark"></i> Repositorio</li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarAlumno.php" style="color: black"><i class="bi bi-person-plus"></i> Registrar Alumno</a>  </li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarDocente.php" style="color: black"><i class="bi bi-briefcase"></i> Registrar Docente</a></li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarRepositorio.php" style="color: #8C6CEE"><i class="bi bi-file-earmark-plus"></i> Registrar Repositorio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card" id="card-registroAlumno">
                    <div class="card-body">
                        <div class="container-fluid">
                            <br>
                            <div class="row " >
                                <div class="col-11">
                                    <h5 class="card-title">Repositorios registrados</h5>
                                </div>
                                <div class="col-1">
                                  <button type="button" class="btn btn-success" data-bs-toggle="modal" id="boton-agregarAlumno" data-bs-target="#miModal">+ agregar</button>
                                </div>
                            </div>

                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card" id="car-rep">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        Daniel flores Peralta
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        Sistema de seguridad php y mysql
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure dolorem incidunt repellendus ipsam? Labore eaque commodi nemo facilis dolores ipsa eveniet nulla explicabo vitae, dolorem nobis neque quaerat facere!
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        nivel <br>
                                                        Tipo <br>
                                                        Archivos
            
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card" id="car-rep">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        Daniel flores Peralta
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        Sistema de seguridad php y mysql
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure dolorem incidunt repellendus ipsam? Labore eaque commodi nemo facilis dolores ipsa eveniet nulla explicabo vitae, dolorem nobis neque quaerat facere!
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        nivel <br>
                                                        Tipo <br>
                                                        Archivos
            
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card" id="car-rep">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        Daniel flores Peralta
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        Sistema de seguridad php y mysql
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure dolorem incidunt repellendus ipsam? Labore eaque commodi nemo facilis dolores ipsa eveniet nulla explicabo vitae, dolorem nobis neque quaerat facere!
                                                    </div>  
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        nivel <br>
                                                        Tipo <br>
                                                        Archivos
            
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>